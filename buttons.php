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
                            <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Buttons</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col">
                            <div class="box p-5">
                                <h4>Normal</h4>
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-dark">Dark</button>

                                <button type="button" class="btn btn-link">Link</button>

                                <br>
                                <br>
                                <br>
                                <h4 class="mb-3">Outline</h4>
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="btn btn-outline-success">Success</button>
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <button type="button" class="btn btn-outline-light">Light</button>
                                <button type="button" class="btn btn-outline-dark">Dark</button>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h4>Dropdown</h4>
                                        <!-- Example split danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Action</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Action</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h4>Group</h4>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <i class="far fa-star"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <i class="fas fa-cog"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <i class="fas fa-list-ul"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <i class="fas fa-th-large"></i>
                                                </button>
                                            </div>
                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="fab fa-apple"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="fab fa-android"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="fab fa-amazon"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <h4>Loading</h4>
                                        <button type="button" class="btn btn-primary">
                                            <img src="assets/img/svg/loading.svg" class="img-fluid loading-sm" alt="">
                                        </button>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h4>Sizes</h4>
                                        <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                        <button type="button" class="btn btn-primary btn-md">Primary</button>
                                        <button type="button" class="btn btn-primary btn-lg">Primary</button>

                                    </div>
                                    <div class="col">
                                        <h4>Radio buttons</h4>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary active">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                                            </label>
                                        </div>

                                    </div>


                                    <div class="col">
                                        <h4>Disabled</h4>
                                        <button type="button" class="btn btn-primary" disabled>Primary button</button>
                                        <button type="button" class="btn btn-secondary" disabled>Button</button>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row">

                                    <div class="col-md-4">
                                        <h4>Block </h4>
                                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
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