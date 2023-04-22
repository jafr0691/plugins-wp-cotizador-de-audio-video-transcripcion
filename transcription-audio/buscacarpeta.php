<div class="wrap">
	<h2><?php _e( 'Calculadora de pedidos', 'calculadora de pedidos' ) ?></h2>
		Bienvenido a las descargas de los pedidos:
	</div>
<div style="margin-top: 30px;">
<div style="float: left; display: inline;">
	<form action="../wp-content/plugins/calculadora-transcription/transcription-audio/descarga.php" method="POST">
    	<label>Id pedido:</label>
		<input type="text" name="origen">
        <div style="display: inline;">
        <label>Password:</label>
        <input type="text" name="pass" value="3RVn@z2dLt">
        </div>
		<input type="submit" value="Buscar Pedido">
	</form>
</div>
<div style="float: right; display: inline;">
	<form action="../wp-content/plugins/calculadora-transcription/transcription-audio/limpiar.php" method="POST">
		<select name="limpiar">
            <option>Selecionar</option>
            <option value="vaciar">Limpiar BD y Carpetas</option>
        </select>
		<input type="submit" value="Limpieza total">
	</form>
</div>
</div>
<?php

 ?>