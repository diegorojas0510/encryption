<?php include "header.php"?>
<run Emoji: Insert Emoji=cat(1F408)>
<body>

	<div class="container">

		<form class="form-horizontal" method="POST" style="margin:0 auto"  enctype="multipar/form-data" action="../controllers/keys.controller.php">
			<div class="form-group">
				<label class="col-lg-8 control-label text-primary h3">Mensaje</label>
				<div class="col-lg-4">
					<textarea rows="4" cols="50" class="form-control" name="mensaje"></textarea>
				</div>
			</div>

			<div class="custom-control custom-radio">
				<!--muestra en pantalla el boton radio para poder seleccionar-->
				<input type="radio" id="customRadio1" name="option" value=0>Decodificar<br>
				<!--permite ver la palabra decodificar al lado del boton radio-->
				
			</div>
			<div class="custom-control custom-radio">
				<!--muestra en pantalla el boton radio para poder seleccionar-->
				<input type="radio" id="customRadio2" name="option"  value=1>Codificar<br>
				<!--permite ver la palabra codificado al lado del boton radio-->
				
			</div>
			<div class="form-group">
				<button type="submit" value="Enviar" name="submit" class="btn btn-success left">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>
