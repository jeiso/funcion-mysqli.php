<?PHP
	$funcion=$_GET['funcion'];
	if (function_exists($funcion))
	{
		//mysqli está instalado
		echo $funcion. ", esta función ya existe";
	}else{
		echo $funcion. ", error, esta función no existe ";
	}
	echo "<br>";

	/*echo "<br><br>";

	//Esta otra función se encontró en http://stackoverflow.com/questions/16254413/php-5-installed-also-mysqli-is-installed-but-not-compiling-in-mac-lion
	echo "extension_loaded mysqli ".extension_loaded('mysqli');

	echo "<br><br>";*/
	
	//echo "<br>";
	//echo phpinfo();
?>
