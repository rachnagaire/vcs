<!doctype html>
<html lang="en">

<head>
<?php include 'inc/head.php'; ?>
</head>

<body>
    <h1 class="sr-only">Vesuvio Admin Template</h1>
    <div class="wrapper">
        <!-- aside navigation starts -->
        <?php include 'inc/aside.php'; ?> 
        <!-- aside navigation ends -->

        <!-- main starts -->
        <main role="main" class="main">
            <!-- topbar starts -->
            <?php include 'inc/top-sticky.php'; ?>
            <!-- topbar ends -->

            <!-- main content starts -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- page head starts -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-none p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Estimate</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Estimate</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="container">
                        <div class="row">
                            <div class="empty-state text-center">
                                <img src="assets/img/addnew-emptystate.svg" alt="empty state">
                                <h3>Vestibulum et libero</h3>
                                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor
                                    magna. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                <a href="index.html" class="btn btn-primary btn-md mt-5">Add New Vestibulum</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- main content ends -->
        </main>
        <!-- main ends -->
    </div>

    <!-- all js goes here -->
    <?php include 'inc/themejs.php'; ?>


</body>

</html>