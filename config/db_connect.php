<?php
$conn=mysqli_connect('localhost','Cheithanya','admin@123','eventmanagement');
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
?>