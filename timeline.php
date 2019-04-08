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
                    <!-- page head starts -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-none p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Timeline-Y</h3>
                    </div>
                    <!-- page head ends -->

                    <div class="timeline-y">
                        <div class="timeline-y-item clearfix">
                            <div class="timeline-y-anchor"></div>
                            <div class="timeline-y-databox left">
                                <div class="box p-5">
                                    <h5>Launched New Website - 2018</h5>
                                    <p>Quisque pharetra ut purus vitae congue. Donec ut auctor nisl, nec dignissim diam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-y-item clearfix">
                                <div class="timeline-y-anchor"></div>
                                <div class="timeline-y-databox right">
                                    <div class="box p-5">
                                        <h5>Launched New Website - 2017</h5>
                                        <p>Quisque pharetra ut purus vitae congue. Donec ut auctor nisl, nec dignissim diam.</p>
                                    </div>
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