<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){

    fwrite($handle, "asdflajsdf;lkjasdf;lkjasdf ;lkajsdf ;lksdf lkjlfsljfsls kdkjlfs");

} else {

    echo "Something messed up, idk.";

}


if($handle = fopen($file, 'r')){

  echo $content = fread($handle, filesize($file)); //each bite equals a char.

} else {

    echo "Something messed up, idk.";

}

fclose($handle);



?>