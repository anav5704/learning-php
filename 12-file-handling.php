<?php
$file = "extras/users.txt";

if (file_exists($file)) {
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo "File contents:" . $contents;
} else {
    $handle = fopen($file, "w");
    $contents = "Anav" . PHP_EOL . "John" . PHP_EOL . "Sarah";
    fwrite($handle, $contents);
    fclose($handle);

    echo "Content written to file";
}
