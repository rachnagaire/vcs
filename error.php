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
                <div class="container">
                    <div class="row">
                        <div class="empty-state text-center">
                            <img src="assets/img/error.svg" alt="empty state">
                            <h3>404 Error Page</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <a href="index.html" class="btn mt-5"><i class="fas fa-angle-left"></i> Go to Dashboard</a>
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