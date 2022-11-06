<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>


 
<?php

if (isset($_POST['insert'])) {




    $post_category_id =   escape_data($_POST['post_category_id']);
    $post_title =   escape_data($_POST['post_title']);
    $post_author =   escape_data($_POST['post_author']);


    $post_name =   $_FILES['post_image']['name'];
    $post_tmpname =   $_FILES['post_image']['tmp_name'];
    $filestore = "upload/" . $post_name;

    $post_content =   escape_data($_POST['post_content']);

    $confirm =    move_uploaded_file($post_tmpname, $filestore);

  
    if ($confirm) {

        $sql = "INSERT INTO tblgallery (post_category, title, author, image, content) ";
        $sql .= " VALUES( '$post_category_id', '$post_title', '$post_author', '$post_name', '$post_content') ";
        $query = mysqli_query($conn, $sql);

if($query){                                             

            echo "Image uploaded";
        }else{

                echo   "error while uploading ".mysqli_error($conn);

        }

    } else {

        echo "error while moving";
    }
}








?>


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
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
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
                    <input type="text" class="form-control" name="post_title">
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="post_author">

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
                    <textarea name="post_content" id="editor" cols="30" class="form-control" rows="10"></textarea>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="upload" name="insert">
            </div>
        </form>
    </div>


</div>
<!-- /.container-fluid -->

</div>


<?php include("includes/footer.php"); ?>

<?php




