
(function($){
$("body").on("click", ".js-delete-item", delete_item);
    function delete_item(){
        var file = $(this).closest(".js-file");
        var id = file.attr("data-id");
        file.slideUp(function() {
                    file.remove();
                });
        $.ajax({
            url : delet.ajaxurl,
            type: 'post',
            data: {
                action : 'delet_audio',
                id_post: id
            },
            // beforeSend: function(){
            //     link.html('Cargando ...');
            // },
            success: function(){
                 recalculatePrice();     
            }

        });

    };

})(jQuery);

