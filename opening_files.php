<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){

    fwrite($handle, "writing something else");

} else {

    echo "Something messed up, idk.";

}


fclose($handle);



?>