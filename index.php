<?php include("includes/header.php"); ?>
<?php include("admin/connect/config.php")   ?>



<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">
 

    <?php

    $sql = " SELECT  * FROM tblgallery";
    $query =    mysqli_query($conn,  $sql);
    if (mysqli_num_rows($query) > 0) {

      while ($row = mysqli_fetch_assoc($query)) {


        // $id = ;
    ?>
        <h2>
          <?php echo $row['title']; ?>
        </h2>
        <p class="lead">
          By <a href="author_post.php?get_name="><?php echo $row['author']; ?>
        </p></a>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['date']; ?></p>
        <hr>


        <hr>

        <a href=""> <img class="img-responsive" src="admin/upload/<?php echo  $row['image']  ?>" alt="cc"></a>
        <hr>

        <p><?php  // echo $row['content']; ?>.</p>
        <a class="btn btn-default" href='photo.php?posts=<?php echo $row['id']; ?>'>Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

          <hr>

    <?php
      }
    } else {

      echo "<h1>No Post Available</h1>";
    }




    ?>






  </div>




  <!-- Blog Sidebar Widgets Column -->
  <div class="col-md-4">


    <?php include("includes/sidebar.php"); ?>



  </div>
  <!-- /.row -->

  <?php include("includes/footer.php"); ?>