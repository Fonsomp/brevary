<?php
	function listarArchivos($carpeta){
		if(is_dir($carpeta)){
			if ($dir = opendir($carpeta)) {
				while(($archivo = readdir($dir)) !== false){
					if ($archivo != '.' && $archivo != '..' && $archivo != '.htaccess') {
						echo '<li><a target="_blank" href="'.$carpeta.'/'.$archivo.'"><img src="images/iconFiles2.png" width="20" height="20">'.$archivo.'</a></li>';}
				}
			closedir($dir);
			}
		}
	}

?>
