<?php
$conn = new mysqli('localhost' , 'root' , '' , 'myform');

if (!$conn) {
    die(mysqli_error($conn));
}

?>