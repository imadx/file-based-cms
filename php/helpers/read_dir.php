<?php

function read_directory($directory){
    $content_list = [];

    if ($handle = opendir($directory)) {
        while (false !== ($entry = readdir($handle))) {
            if($entry !== '.' && $entry !== '..'){
                array_push($content_list, $entry);
            }
        }
    }

    sort($content_list);
    return $content_list;
}


function read_file_content($file){
    return file_get_contents($file);
}

?>