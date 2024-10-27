<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'waleed');
if (!$conn) { 
    echo 'Error:' . mysqli_connect_error(); 
}