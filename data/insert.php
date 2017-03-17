<?php

	//check input
	if(!isset($_GET['param'],$_GET['value']))
	{
		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		die("<b>Error!</b><br>
			$url?param=xxx&value=xxx
			<ul>
				<li>par: nom paràmetre 
				<li>val: valor paràmetre
			</ul>
		");
	}

	//input
	$param=$_GET['param'];
	$value=$_GET['value'];

	//comprova si estan en blanc
	if($param==""){die("El paràmetre 'param' està en blanc");}
	if($value==""){die("El paràmetre 'value' està en blanc");}

	//resultat
	echo "
		Has enviat correctament els valors '$param'=$value
		<br> <br>
		En un futur els guardarem a la base de dades
	";

?>
