<?php

	//check input
	if(!isset($_POST['par'],$_POST['val']))
	{
		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		die("<b>Error!</b><br>
			$url &rarr; variables POST: par,val<br>
			<ul>
				<li>par: nom paràmetre 
				<li>val: valor paràmetre
			</ul>
		");
	}

	//input
	$par=$_POST=['par'];
	$val=$_POST=['val'];

	//comprova si estan en blanc
	if($par==""){die("El paràmetre 'par' està en blanc");}
	if($val==""){die("El paràmetre 'val' està en blanc");}

	//resultat
	echo "
		Has enviat correctament els valors $par:$val
		<br>
		En un futur els guardarem a la base de dades
	";

?>
