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

                        <?php 
                        if(isset($_GET['source'])){
                            $source = $GET['source'];                                                                   
                        }
                        else {
                            $source = '';
                        }
                        switch($source ){
                            case '100';
                            echo "NICE 100";
                            break;

                            case '300';
                            echo "NICE 300";
                            break;

                            case '500';
                            echo "NICE 500";
                            break;

                            case '10000000';
                            echo "NICE 1000000";
                            break;

                            default:

                            include "view_all_post.php"; 

                            break;
                        }    
                        ?>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php include "include/admin_footer.php";?>