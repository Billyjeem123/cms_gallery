<?php


$connect =    mysqli_connect('localhost', 'root', '', 'cms_gallery' );
if($connect){

   echo "connection established";
}else{

   echo "Unable to establish connection";
}


   ?>