<?php
session_start();
include ("connect/config.php");


    $delete =   $_GET['delete'];


  $sql = " DELETE FROM tblgallery WHERE id =  '$delete' ";
  $query = mysqli_query($conn, $sql);

  if($query){

    // echo "Deleted";
    header("Location: fetchimage.php");
  }else{ 


    echo "error while processing".mysqli_error($conn);
  }


//Cfreate a table tblcategory
// 2 columns)   id      name

//Create a code to onsert anything inside tblcategory
// fetch Category...
//      DeleteCategory



