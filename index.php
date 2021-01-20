<?php



$xml = simplexml_load_file("https://byrontosh.github.io/POKEMON-SOA/ejemplo2.xml");

//MAPEAR TODOS LOS HIJOS

foreach ($xml->nodo_hijo as $nodo) 
	{
	echo $nodo->valor."<br>";
	
		foreach ($nodo->datos as $d)
			{
				
			  echo $d->nombre." ";
			  echo $d->apellido;
			  echo "<br>";

			}
	}




/*

$xml = simplexml_load_file("http://demo2.kubxy.com/xml/ejemplo2.xml");

//MAPEAR TODOS LOS HIJOS

foreach ($xml->nodo_hijo as $nodo) 
	{
	echo $nodo->valor."<br>";
	
		foreach ($nodo->datos as $d)
			{
				
			  echo $d->nombre." ";
			  echo $d->apellido;
			  echo "<br>";
			  
//CADENA DE CONEXIÓN A LA BSE DE DATOS	  
        $db_host      = "localhost";
        $db_nombrebdd = "registro";
        $db_usuario   = "root";
        $db_contra    = "";
        $conexion     = mysqli_connect($db_host, $db_usuario, $db_contra);
        if (mysqli_connect_errno()) 
		{
            echo "COMPRUEBA LA CONEXIÓN A LA BDD";
            exit();
        }
        mysqli_set_charset($conexion, "utf8");
		
        mysqli_select_db($conexion, $db_nombrebdd)or die("LA BDD NO SE ENCUENTRA");
		
        $consulta  = "INSERT INTO valores (nombre, apellido) VALUES ('$d->nombre', '$d->apellido');";
        
		$resultado = mysqli_query($conexion, $consulta);      
    }  
}
if ($resultado == true) {
    echo "<br>";
    echo "REGISTRO GUARDADO CON ÉXITO";
    
} else {
    echo "REGISTRO NO GUARDADO";
}

mysqli_close($conexion);
*/
?>
