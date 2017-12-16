<?php

function get_link_name($file_name){
    $link_name = explode('_', $file_name)[1];
    $link_name = str_replace('.md', '', $link_name);
    preg_match_all('/((?:^|[A-Z])[a-z]+)/',$link_name,$matches);
    $link_name = implode(' ', $matches[0]);
    $link_name = ucfirst($link_name);

    return $link_name;
}

function get_short_link($file_name){
    $link_name = explode('_', $file_name)[1];
    $link_name = str_replace('.md', '', $link_name);
    $link_name = ucfirst($link_name);

    return $link_name;
}


?>