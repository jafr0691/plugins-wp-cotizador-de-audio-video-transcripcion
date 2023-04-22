(function($){

	$("body").on("click",".order-summary__continue-button", compra);

	function compra(){

		$.ajax({
            url : carrito.carrito_ajax,
            type: 'post',
            data: {
                action : 'carrito',
            },
            // beforeSend: function(){
            //     link.html('Cargando ...');
            // },
            success: function(){
                 window.location= location.origin+"/chequeo/";     
            }

        });

	}

})(jQuery);