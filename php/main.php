<?php

require 'helpers/read_dir.php';
require 'helpers/string_manipulation.php';

$content_list = read_directory('./data');

// Side bar
echo '<div class="sidebar"><ul>';
$shorter_links = [];
foreach ($content_list as $index => $file) {
    $link = get_short_link($file);
    echo '<li><a href="#'. $link . '">'. get_link_name($file) . '</a></li>';
    $short_links[$file] = $link;
}
echo '</ul></div>';

// Content
echo '<div class="mainContent">';
foreach ($content_list as $index => $file) {
    $id =  $short_links[$file];
    echo '<div class="content" id="' . $id .  '"></div>';
    echo '<script>document.getElementById("'. $id . '").innerHTML = marked(`'. read_file_content('./data/' . $file) . '`);</script>';
}
echo '</div>';

?>