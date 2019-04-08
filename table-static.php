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
                            <li class="breadcrumb-item active" aria-current="page">Normal Table</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Table Layout</h3>
                        <div class="page-actionbtns">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add New</a>
                        </div>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="box-header">
                                    <div class="filter p-4">
                                        <form>
                                            <div class="form-row align-items-center">
                                                <div class="col-sm-2 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Filter By</label>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>Choose...</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-sm-4 my-1">
                                                    <label class="sr-only" for="inlineFormInputName">Name</label>
                                                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                                                </div>


                                                <div class="col-auto my-1">
                                                    <button type="submit" class="btn btn-default">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="box-body p-4">
                                    <table class="table table-hover table-responsive-sm table-custom table-lg">
                                        <colgroup>
                                            <col width="30px">
                                        </colgroup>

                                        <thead>
                                            <th>
                                                <input type="checkbox">
                                            </th>
                                            <th>Consectetur</th>
                                            <th>Suspendisse </th>
                                            <th>Sed </th>
                                            <th>Vestibulum </th>
                                            <th></th>
                                        </thead>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <a href="#">Consectetur</a>
                                            </td>
                                            <td>Suspendisse sit amet tellus nisi. In condimentum</td>
                                            <td>2 hours ago</td>
                                            <td>23/05/2018</td>
                                            <td>
                                                <div class="td-controls d-flex justify-content-between">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>

                                <div class="box-footer p-4 d-flex justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="" class="mr-3">view</label>
                                        <select name="" class="form-control" id="">
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">
                                                    <i class="fas fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2
                                                    <span class="sr-only">(current)</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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