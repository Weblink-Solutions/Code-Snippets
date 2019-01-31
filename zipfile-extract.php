<?php

// Name of the file you wish to extract. If not working in same directory put relative path. 
    $file = 'MyZipFile.zip';

// Exract Path. This will get the absolute path to $file
    $path = pathinfo(realpath($file), PATHINFO_DIRNAME);

    $zip = new ZipArchive;
    $res = $zip->open($file);
    if ($res === TRUE) {

      $zip->extractTo($path);
      $zip->close();
      echo "Success! $file extracted to $path";
    } else {
      echo "Error! Unable to open $file";
    }


?>
