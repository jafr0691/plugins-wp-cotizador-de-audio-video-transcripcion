(function($) {
    // save
    var post = $.post(visitor.visitor_ajax, {action : 'visitor_transcri'});
    post.done(function(data) {
        if (data != 0) {
            var data = JSON.parse(data);
            $.each(data, function(index, file) {
                addFile(data[index], true); // permanent
                recalculatePrice();
            });
        }
    });
    // $.ajax({
    //         url : visitor.visitor_ajax,
    //         type: 'post',
    //         data: {
    //             action : 'visitor_transcri',
    //         },
    //         // beforeSend: function(){
    //         //     link.html('Cargando ...');
    //         // },
    //         success: function(data){
    //             if (data != 0) {
    //                 var data = JSON.parse(data);
    //                 $.each(data, function(index, file) {
    //                     addFile(data[index], true); // permanent
    //                     recalculatePrice();
    //                 });
    //             }    
    //         }

    //     });
})(jQuery);