<?php include "include/admin_header.php"; ?>
<body>
    <div id="wrapper">
    <?php include "include/admin_navigation.php"; ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO THE ADMIN
                            <small>LORDDY </small>
                        </h1>
                        <div class="col-xs-6">
                        <?php insert_categories(); ?>
                        

                        <form action="" method="post">
                        <div class="form-group">
                        <label for="cat-title">Add Categories</label>
                        <input type="text" class="form-control" name="cat-title">
                        </div>
                        <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                        </div>
                        </form>
                        <?php // update and include query....
                        if(isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];
                            
                            include "include/update_categories.php";
                        }
                        ?>    
                        </div>
                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php          //FIND ALL CATEGORIES QUERY.......   
                            FindAllcategories();  ?>

                            <?php  //DELETE QUERY,,,,,,,,,,,,,,
                               DeleteCategories();
                            ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php include "include/admin_footer.php";?>