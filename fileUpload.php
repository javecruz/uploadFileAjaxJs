<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers:Origin,X-Requested-With, Content-Type, Accept");








	//información del fichero
	// echo "Nombre Original del Fichero: " . $_FILES['fichero']['name'];
	// echo "<br>Tipo MIME del fichero: " . $_FILES['fichero']['type'];
	// echo "<br>Tamaño en bytes del fichero subido: " . $_FILES['fichero']['size'];
	// echo "<br>Nombre Temporal del fichero que se genera para guardarlo: " . $_FILES['fichero']['tmp_name'];
	// echo "<br>Codigo de error asociado a la subida del fichero: " . $_FILES['fichero']['error'];

	if(is_uploaded_file($_FILES['myFile']['tmp_name'])){

		$nombreDirectorio = "uploadedFiles/";
		$nombreFicheroFinal = $nombreDirectorio . substr_replace($_FILES['myFile']['name'],'-'.time(),strpos($_FILES['myFile']['name'],'.'),0);

		if(is_dir($nombreDirectorio)){
			move_uploaded_file($_FILES['myFile']['tmp_name'], $nombreFicheroFinal);
			// echo "<br>Fichero Subido con el Nombre: " . $nombreFicheroFinal;
			// echo "<br><img src='images/$nombreFicheroFinal' alt='$nombreFicheroFinal'>";
		}else{
			echo "<br>Error en directorio";
		}

	}else{
		echo "<br>no se ha podido subir fichero";
	}





?>