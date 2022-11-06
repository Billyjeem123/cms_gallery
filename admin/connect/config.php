<?php

$conn = mysqli_connect("localhost", 'root', '' , 'project_gallery');

if($conn == true){
    // echo "Connection Estsblished";
}else{


    echo "failed". mysqli_error($conn);
}




