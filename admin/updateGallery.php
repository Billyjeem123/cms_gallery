<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>



<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Update Gallery
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <?php
        $update = $_GET['edit'];
        $sql = " SELECT * FROM tblgallery WHERE id = '$update'";
        $query = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_array($query);

        //Update infomormation
        if (isset($_POST['submit'])) {



              $post_title =  $_POST['post_title'];
            $post_author =  $_POST['post_author'];
            $post_content =  $_POST['post_content'];


            $query = "UPDATE tblgallery SET ";
             $query .="title  = '{$post_title}', ";
             $query .="author = '{$post_author}', ";
             $query .="content= '{$post_content}' ";
             $query .= "WHERE id = {$update} ";


            $query = mysqli_query($conn, $query);

            if ($query) {

                // echo "updated";
                // header("location:fetchimage.php");

                echo "null";

            } else {

                echo "not working" . mysqli_error($conn);
            }
        } else {


            echo "";
        }






        ?>
        <form action="" method="post" enctype="multipart/form-data">=
            <div class="modal-body">
                <div class="form-group">
                    <label>Post-category</label>
                    <select name="post_category_id" id="post_category_id">
                        <option value="Select Category">Select Category</option>
                        <option value="Politics">Politics</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Finance">Finance</option>
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="post_title" value="<?php echo $fetch['title'] ?>">
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="post_author" value="<?php echo $fetch['author'] ?>">

                </div>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label>image</label>
                    <input type="file" class="form-control" name="post_image">
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="post_content" id="editor" cols="30" class="form-control" rows="10">
                    <?php echo $fetch['content'] ?>
                    </textarea>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Update" name="submit">
            </div>
        </form>
    </div>


</div>
<!-- /.container-fluid -->

</div>


<?php include("includes/footer.php"); ?>

<?php
