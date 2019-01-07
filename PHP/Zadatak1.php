<?php
$polje1 = array("prvi" => "jedan", "drugi" => "dva");
$polje2 = array();

foreach($polje1 as $key => $value){
array_push($polje2, $value);
//prolazak kroz polje1 te kopiranje podataka u polje2
}

for($i=0; $i<count($polje2); $i++){
	echo($polje2[$i]);
	echo("<br/>");
//prolazak kroz polje2 i prikaz na ekran
}
	?>