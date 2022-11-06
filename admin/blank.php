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
                        <option value="Politics">Politics</option>
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
                    <label>Date</label>`
                    <input type="text" class="form-control" name="post_date">
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


            <div class="modal-body">
                <div class="form-group">
                    <label>Tags</label>
                    <input type="text" class="form-control" name="post_tags">
                </div>
            </div>


            <div class="modal-body">
                <label>Post Status</label>
                <select name="post_status" id="" class="form-control">

                    <option value="">Select options</option>

                    <option value="draft">Draft</option>
                    <option value="published">Published</option>


                </select>

            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add" name="insert">
            </div>
        </form>
    </div>


</div>
<!-- /.container-fluid -->

</div>


<?php include("includes/footer.php"); ?>