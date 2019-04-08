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
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Accordian</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="card-header-item mb-0 d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="accordion-hdtext"> Collapsible Group Item #1 </span>
                                                <span class="accordion-indicator">
                                                    <i class="fas fa-plus"></i>
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="card-header-item mb-0 d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="accordion-hdtext"> Collapsible Group Item #2 </span>
                                                <span class="accordion-indicator">
                                                    <i class="fas fa-plus"></i>
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="card-header-item mb-0 d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="accordion-hdtext"> Collapsible Group Item #3 </span>
                                                <span class="accordion-indicator">
                                                    <i class="fas fa-plus"></i>
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
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