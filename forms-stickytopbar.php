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
            <nav class="navbar-top sticky-suppertop d-flex justify-content-between">

                <!-- search starts -->
                <div class="d-flex">
                    <!-- brand and breadcrumb handheld -->
                    <button class="navbar-toggler handheld-on" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                    <a class="navbar-brand handheld-on" href="#">
                        <img src="assets/img/site-logo.png" alt="Vesuvio Admin Template">
                    </a>
                    <div class="goto d-none d-md-block d-lg-block d-xl-block">
                        <div class="d-flex dropdown">
                            <button class="btn dropdown-toggle goto-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Organisations
                            </button>
                            <div class="dropdown-menu goto-list dropdown-menu-animated" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">ABC Corp</a>
                                <a class="dropdown-item" href="#">Ballactic Labs</a>
                                <a class="dropdown-item" href="#">Somel Rar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- search ends -->

                <!-- user control starts -->
                <ul class="user d-flex flex-row align-items-center m-0 py-3">
                    <li class="dropdown notification px-4">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-md notification-content" aria-labelledby="dropdownMenuLink">
                            <div class="notification-head d-flex justify-content-between">
                                <h6>Messages</h6>
                                <a href="#">clear all</a>
                            </div>
                            <div class="notification-body" id="message">
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>



                            </div>
                            <div class="notification-foot text-right">
                                <a href="#">view all</a>
                            </div>

                        </div>

                    </li>
                    <li class="dropdown notification px-4">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-md notification-content" aria-labelledby="dropdownMenuLink">
                            <div class="notification-head d-flex justify-content-between">
                                <h6>Notification</h6>
                                <a href="#">clear all</a>
                            </div>
                            <div class="notification-body" id="notification">
                                <a href="#">
                                    <div class="media">
                                        <div class="media-img circle">
                                            <img class="align-self-start mr-3 img-fluid" src="assets/img/profile-1.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-img circle">
                                            <img class="align-self-start mr-3 img-fluid" src="assets/img/profile-2.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-img circle">
                                            <img class="align-self-start mr-3 img-fluid" src="assets/img/profile-3.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-img circle">
                                            <img class="align-self-start mr-3 img-fluid" src="assets/img/profile-4.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-img circle">
                                            <img class="align-self-start mr-3 img-fluid" src="assets/img/profile-1.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin.
                                            </p>
                                        </div>
                                    </div>
                                </a>



                            </div>
                            <div class="notification-foot text-right">
                                <a href="#">view all</a>
                            </div>

                        </div>

                    </li>
                    <li class="dropdown user-content pr-4 pl-3">
                        <a class="dropdown-toggle user-item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="assets/img/profile-1.png" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated text-right p-3" aria-labelledby="dropdownMenuLink">
                            <p class="px-3">Jarvis@vesuviois.com</p>
                            <a class="dropdown-item" href="#">Profile Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                    <!-- user control ends -->
                </ul>
            </nav>
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
                                <a href="#">Estimate</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add New</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between" id="myHeader">
                        <div class="container p-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="mb-5">Form Layout</h3>
                                <div>
                                    <button class="btn btn-link" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save all</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page head ends -->

                    <!-- page-body starts -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col">
                                <div class="box p-5 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="box-header mb-4">
                                                <h4>Section Heading</h4>
                                                <p>More info goes here: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Nam non vulputate ipsum, eu </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="box-body">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                                            Help text goes here:Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna.
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="form-row align-items-center">
                                                        <div class="form-group col-md-4">
                                                            <label for="validationCustomUsername">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">
                                                                        <i class="fas fa-calendar-alt"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY">


                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="validationCustomUsername">Gender</label>
                                                            <br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                                                <label class="form-check-label" for="inlineCheckbox3">Others (disabled)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputZip">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck"> &nbsp;
                                                            <label class="form-check-label" for="gridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="box p-5 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="box-header mb-4">
                                                <h4>Form Validation</h4>
                                                <p>This is an example of form validation. You can click on the "Submit form"
                                                    button to check how validation works.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="box-body">
                                                <form class="needs-validation" novalidate>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="validationCustom01">First name</label>
                                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="validationCustom02">Last name</label>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="validationCustomUsername">Username</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"
                                                                    required>
                                                                <div class="invalid-feedback">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="validationCustom03">City</label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="validationCustom04">State</label>
                                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="validationCustom05">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>&nbsp;
                                                            <label class="form-check-label" for="invalidCheck">
                                                                Agree to terms and conditions
                                                            </label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </form>

                                                <script>
                                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                    (function () {
                                                        'use strict';
                                                        window.addEventListener('load', function () {
                                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                            var forms = document.getElementsByClassName(
                                                                'needs-validation');
                                                            // Loop over them and prevent submission
                                                            var validation = Array.prototype.filter.call(
                                                                forms,
                                                                function (form) {
                                                                    form.addEventListener('submit',
                                                                        function (event) {
                                                                            if (form.checkValidity() ===
                                                                                false) {
                                                                                event.preventDefault();
                                                                                event.stopPropagation();
                                                                            }
                                                                            form.classList.add(
                                                                                'was-validated'
                                                                            );
                                                                        }, false);
                                                                });
                                                        }, false);
                                                    })();
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="box p-5 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="box-header mb-4">
                                                <h4>Section Heading</h4>
                                                <p>More info goes here: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Nam non vulputate ipsum, eu </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="box-body">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                                            Help text goes here:Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna.
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="form-row align-items-center">
                                                        <div class="form-group col-md-4">
                                                            <label for="validationCustomUsername">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">
                                                                        <i class="fas fa-calendar-alt"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY">


                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="validationCustomUsername">Gender</label>
                                                            <br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                                                <label class="form-check-label" for="inlineCheckbox3">Others (disabled)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputZip">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck"> &nbsp;
                                                            <label class="form-check-label" for="gridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- page-body ends -->
                </div>

            </div>
            <!-- main content ends -->
        </main>
        <!-- main ends -->
    </div>

     <!-- all js goes here -->
     <?php include 'inc/themejs.php'; ?>
     
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker();        
        // sticky element starts

        // When the user scrolls the page, execute myFunction 
        window.onscroll = function () {
            myFunction()
        };

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        // var sticky = header.offsetTop;
        var sticky = 80;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
        // sticky element ends
    </script>



</body>

</html>