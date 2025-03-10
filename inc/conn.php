<?php
$conn = mysqli_connect('localhost','aziz', 'aziz','abdulaziz mohammed almuallim');
if (!$conn){
    echo 'Error:' . mysqli_connect_error();
}