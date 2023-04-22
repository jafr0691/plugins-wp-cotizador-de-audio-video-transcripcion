(function($) {
            'use strict';
            // Change this to the location of your server-side upload handler:
            $("body").on("click", ".js-fileupload", fileupload({
                url: subir.subir_ajax,
                dataType: 'json',
                data:{action : 'subir_audio'},
                sequentialUploads: true,
                add: function (e, data) {
                    // add temporary id to file
                    $.each(data.files, function (index, file) {
                        data.files[index].tmp_id = Math.floor((Math.random() * 10000000) + 1); // rand id
                    });
                    data.submit();
                },
                submit: function (e, data) {

                    $.each(data.files, function (index, file) {
                        addFile({
                            id: file.tmp_id,
                            original_filename: file.name,
                            size: '-',
                            duration_for_humans: '-'
                        });
                    });
                   // showProgressFile();
                },
                done: function (e, data) {
                    // add permanent files
                    $.each(data.files, function (index, file) {
                        removeTemporary(file.tmp_id);
                        addFile(data.result, true); // permanent
                        recalculatePrice();
                    });

                    if ($('.js-file-container .js-progress').length == 0) {
                        showDonePopup('regular');
                    }
                },
                progress: function (e, file) {
                    var tmp_id = file.files[0].tmp_id; // file tmp id
                    var percents = parseInt(file.loaded / file.total * 100, 10);
                    var mb_s = file.bitrate / 1024 / 1024 / 8;

                    $(".js-file-container .js-file[data-id=" + tmp_id + "] .js-progress-bar").css('width', percents + '%');
                    $(".js-file-container .js-file[data-id=" + tmp_id + "] .js-progress-text").text(round(mb_s, 2) +  ' MB/s - ' + percents + '%');
                },
                progressall: function (e, data) {
                   var progress = parseInt(data.loaded / data.total * 100, 10);
                   $('.js-progress-bar').css(
                           'width',
                           progress + '%'
                   );
                },
                fail: function (e, data) {
                    removeTemporary(data.files[0].tmp_id);
                    showError(data.files[0].name);
                    showHideOptions();
                }
            }).prop('disabled', !$.support.fileInput) // ?????????
                    .parent().addClass($.support.fileInput ? undefined : 'disabled');

        
    });