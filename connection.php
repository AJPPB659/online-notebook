<?php
$link = mysqli_connect("localhost", "uvidmthe_notes", "iq4Wd7QBA7.r", "uvidmthe_onlinenotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>