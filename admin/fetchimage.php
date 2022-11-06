
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Fetch Images</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<form action="" method='post'>
   <h2 class="text-center">Total Post is  <?php  echo  $_SESSION['total_rows']; ?> </h2>
       <table class="table table-striped w-auto table-bordered table-hover">

        
       <?php

       $sql =  "  SELECT  * FROM tblgallery ";
       $query = mysqli_query($conn, $sql);
       $row = mysqli_num_rows($query);

    //    echo $row;

    $_SESSION['total_rows'] = $row;


       ?>

           <div class="row">

              
               <thead>
                   <tr>

                       <th><input type="checkbox" id="selectAllBoxes"></th>
                       <th>ID</th>
                       <th>Category</th>
                       <th>title</th>
                       <th>Author</th>
                       <th>Image</th>
                       <th>Date</th>
                  
                       
                       <th>Delete</th>
                       <th>Edit</th>
                   </tr>
               </thead>
               <tbody>
                
              <?php
 
              
              while ($rows = mysqli_fetch_array($query)) {
                
                echo "<tr>";
                echo "<td><input class='checkBoxes' type='checkbox'></td>";
                echo "<td>$rows[id]</td>";
                echo "<td>$rows[post_category]</td>";
                echo "<td>$rows[title]</td>";
                echo "<td>$rows[author]</td>";
                echo "<td><img src='upload/$rows[image]' alt='alit' width='50px'</td>";

                echo "<td> $rows[date]</td>";
               echo "<td><a  href='deletePost.php?delete=$rows[id]' class='btn btn-delete'>Delete</a></td>";
               echo "<td><a  href='updateGallery.php?edit=$rows[id]' class='btn btn-delete'>Edit</a></td>";


               

                echo "</tr>";
              }
           

 
                ?>




                <!-- <td>1</td>
                <td>Name</td>
                <td><div class="btn-btn-delete">Delete</div></td>
                <td><div class="btn-btn-secondary">Edit</div></td> -->
                
                 
               </tbody>
       </table>

   </form>
   </form>

   </div>
<!-- /.container-fluid -->

</div>


<?php include("includes/footer.php"); ?>