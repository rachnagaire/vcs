
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
                            <li class="breadcrumb-item active" aria-current="page">Modal</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Modal</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Modal normal</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus.


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Modal Large Size</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                    Launch modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus.


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Modal Small Size</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                                    Launch modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-sm" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus.


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Modal Vertically Center</h5>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                    Launch modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus.


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
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