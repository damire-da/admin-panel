<?php
function db_connect(){

    $link = mysqli_connect('localhost', 'root', '', 'test');

    if(!$link)
        die('No db connection' . mysqli_connect_error());
    
    return $link;
}

?>