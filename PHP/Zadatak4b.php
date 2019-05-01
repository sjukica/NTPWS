<?php

if(isset($_POST['Submit1']))
{

    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
    {
        echo "File is image <br/>";
        echo "File type = " . $extension;

    }
    else
    {
        echo "File is not image";
    }
}


?>
