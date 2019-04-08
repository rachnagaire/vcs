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
                                <a href="#">Estimate</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add New</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Form Layout</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col">
                            <div class="box p-5 mb-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="box-header mb-4">
                                            <h4>Section Heading</h4>
                                            <p>More info goes here: Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Nam non vulputate ipsum, eu </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="box-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword4"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Address 2</label>
                                                    <input type="text" class="form-control" id="inputAddress2"
                                                        placeholder="Apartment, studio, or floor">
                                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                                        Help text goes here:Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nam non vulputate ipsum, eu auctor magna.
                                                    </small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                        placeholder="1234 Main St">
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
                                                            <input type="text" class="form-control" id="datepicker"
                                                                placeholder="MM/DD/YYYY">


                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="validationCustomUsername">Gender</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                                value="option3" disabled>
                                                            <label class="form-check-label" for="inlineCheckbox3">Others
                                                                (disabled)</label>
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
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">Custom select</label>
                                                        <!-- custom select s -->
                                                        <div class="btn-group d-block">
                                                            <a class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                                href="#">Select a
                                                                Country <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-item"><a href="#">Item
                                                                        I</a></li>
                                                                <li class="dropdown-item"><a href="#">Item
                                                                        II</a></li>
                                                                <li class="dropdown-item"><a href="#">Item
                                                                        III</a></li>
                                                                <li class="dropdown-item"><a href="#"><span class="badge badge-primary badge-pill float-right mt-1">new</span>
                                                                        Item IV</a></li>
                                                                <li class="dropdown-item"><a href="#">Item
                                                                        V</a></li>
                                                                <li class="dropdown-item"><a href="#">Other</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- custom select e -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        &nbsp;
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
                                            <p>This is an example of form validation. You can click on the "Submit
                                                form" button
                                                to check how validation works.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="box-body">
                                            <form class="needs-validation" novalidate>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="First name" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02"
                                                            placeholder="Last name" value="Otto" required>
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
                                                            <input type="text" class="form-control" id="validationCustomUsername"
                                                                placeholder="Username" aria-describedby="inputGroupPrepend"
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
                                                        <input type="text" class="form-control" id="validationCustom03"
                                                            placeholder="City" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="validationCustom04">State</label>
                                                        <input type="text" class="form-control" id="validationCustom04"
                                                            placeholder="State" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="validationCustom05">Zip</label>
                                                        <input type="text" class="form-control" id="validationCustom05"
                                                            placeholder="Zip" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                            required>&nbsp;
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
                                                        var validation = Array.prototype.filter.call(forms,
                                                            function (form) {
                                                                form.addEventListener('submit',
                                                                    function (event) {
                                                                        if (form.checkValidity() ===
                                                                            false) {
                                                                            event.preventDefault();
                                                                            event.stopPropagation();
                                                                        }
                                                                        form.classList.add(
                                                                            'was-validated');
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
                                            <h4>Compare</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non
                                                vulputate ipsum, eu auctor magna. Pellentesque habitant morbi tristique
                                                senectus et netus </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="box-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Reference ID</label>
                                                        <input type="text" class="form-control" id="" placeholder="eg. sent-received">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="panel rounded p-5 mb-3">
                                                            <h5>Left Side</h5>
                                                            <div class="form-group form-check mt-4">
                                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                <label class="form-check-label pl-2" for="exampleCheck1">Show
                                                                    this Queue navigation in Tenant/Admin</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Queue Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="eg. Received">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tenant can switch from this Queue to:</label>
                                                                <div class="box px-4 py-3" id="leftMultipleSelect">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck2">
                                                                        <label class="form-check-label pl-2" for="exampleCheck2">Queue 1</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck3">
                                                                        <label class="form-check-label pl-2" for="exampleCheck3">Queue 2</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck4">
                                                                        <label class="form-check-label pl-2" for="exampleCheck4">Queue 3</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="Settled">
                                                                        <label class="form-check-label pl-2" for="Settled">Queue 4</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="process">
                                                                        <label class="form-check-label pl-2" for="process">Queue 5</label>
                                                                    </div>

                                                                </div>
                                                                <div class="form-check mt-4">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                                    <label class="form-check-label pl-2" for="exampleCheck5">Notify
                                                                        User when state is changed</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                                    <label class="form-check-label pl-2" for="exampleCheck6">Required
                                                                        reason to change in this state</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="panel rounded p-5">
                                                            <h5>Right Side</h5>
                                                            <div class="form-group form-check mt-4">
                                                                <input type="checkbox" class="form-check-input" id="exampleCheck7">
                                                                <label class="form-check-label pl-2" for="exampleCheck7">Enable
                                                                    Queue navigation in CCL User</label>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-11">
                                                                    <label for="">Queue Name</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        placeholder="eg. Sent">
                                                                    <small id="emailHelp" class="form-text text-muted">*You
                                                                        can choose color to denote Queue in the website</small>
                                                                </div>
                                                                <div class="form-group col-md-1">
                                                                    <label for="">Color</label>
                                                                    <!-- color selection s -->
                                                                    <div class="btn-group color-pick d-block">
                                                                        <span class="btn w-100 btn-primary dropdown-toggle selectedCol"
                                                                            data-toggle="dropdown" href="#"></span>
                                                                        <ul class="dropdown-menu dropdown-menu-right dropdown-md">
                                                                            <li class="dropdown-item"><span class="color berryred"
                                                                                    id="#EF3A53"></span></li>
                                                                            <li class="dropdown-item"><span class="color blue"
                                                                                    id="#44A4F8"></span></li>
                                                                            <li class="dropdown-item"><span class="color neon"
                                                                                    id="#3BD593"></span></li>
                                                                            <li class="dropdown-item"><span class="color dullpurple"
                                                                                    id="#CF92DE"></span></li>
                                                                            <li class="dropdown-item"><span class="color brightred"
                                                                                    id="#FF6D4F"></span></li>

                                                                            <li class="dropdown-item"><span class="color yellow"
                                                                                    id="#FFB636"></span></li>
                                                                            <li class="dropdown-item"><span class="color gold"
                                                                                    id="#A88240"></span></li>
                                                                            <li class="dropdown-item"><span class="color pink"
                                                                                    id="#F66DAD"></span></li>
                                                                            <li class="dropdown-item"><span class="color darkblue"
                                                                                    id="#0C9CBA"></span></li>
                                                                            <li class="dropdown-item"><span class="color green"
                                                                                    id="#93D549"></span></li>

                                                                            <li class="dropdown-item"><span class="color purlple"
                                                                                    id="#9869E8"></span></li>
                                                                            <li class="dropdown-item"><span class="color grey"
                                                                                    id="#68655F"></span></li>
                                                                            <li class="dropdown-item"><span class="color darkestblue"
                                                                                    id="#3C598B"></span></li>
                                                                            <li class="dropdown-item"><span class="color darkgreen"
                                                                                    id="#5E8B3C"></span></li>
                                                                            <li class="dropdown-item"><span class="color lightpink"
                                                                                    id="#FB85F7"></span></li>

                                                                            <li class="dropdown-item"><span class="color black"
                                                                                    id="#000000"></span></li>
                                                                            <li class="dropdown-item"><span class="color satpurple"
                                                                                    id="#5D44C2"></span></li>
                                                                            <li class="dropdown-item"><span class="color lightblue"
                                                                                    id="#13BDF2"></span></li>
                                                                            <li class="dropdown-item"><span class="color dullgreen"
                                                                                    id="#9AA591"></span></li>
                                                                            <li class="dropdown-item"><span class="color orange"
                                                                                    id="#F97F22"></span></li>

                                                                        </ul>
                                                                    </div>
                                                                    <!-- color selection e -->
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">User can switch claim from this state to:</label>
                                                                <div class="box px-4 py-3" id="rightMultipleSelect">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck8">
                                                                        <label class="form-check-label pl-2" for="exampleCheck8">Queue
                                                                            1</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck9">
                                                                        <label class="form-check-label pl-2" for="exampleCheck9">Queue
                                                                            2</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck10">
                                                                        <label class="form-check-label pl-2" for="exampleCheck10">Queue
                                                                            3</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck22">
                                                                        <label class="form-check-label pl-2" for="exampleCheck22">Queue
                                                                            4</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck21">
                                                                        <label class="form-check-label pl-2" for="exampleCheck21">Queue
                                                                            5</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check mt-4">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck11">
                                                                    <label class="form-check-label pl-2" for="exampleCheck11">Notify
                                                                        Tenant/Admin when state is changed</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck12">
                                                                    <label class="form-check-label pl-2" for="exampleCheck12">Required
                                                                        reason to change in this state</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck13">
                                                                    <label class="form-check-label pl-2" for="exampleCheck13">Enable
                                                                        Edit option</label>
                                                                </div>
                                                                <div class="form-check mt-2">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck14">
                                                                    <label class="form-check-label pl-2" for="exampleCheck14">Enable
                                                                        Delete option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-action-controls">
                            <div class="container">
                                <div class=" d-flex flex-row-reverse">
                                    <button class="btn btn-primary" type="submit">Save all</button>
                                    <button class="btn btn-link" type="submit">Cancel</button>
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
    <script>       
            $('#leftMultipleSelect').slimScroll({
                height: '100px',
                size: '5px',
                alwaysVisible: false
            });
            $('#rightMultipleSelect').slimScroll({
                height: '100px',
                size: '5px',
                alwaysVisible: false
            });
        });
    </script>

    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker();

        // submenu
        $('.sidelist').on('click', function (event) {
            // alert('asdf');
            $target = $(event.target);
            $('.sidelist').removeClass('active');
            $target.parent().addClass('active');
        });

        // custom select js
        $(".dropdown-menu li a").click(function () {
            var selText = $(this).text();
            $(this).parents('.btn-group').find('.dropdown-toggle').html(selText +
                ' <span class="caret"></span>');
        });

        // custom colorpicker js
        $(".color").click(function () {
            var selCol = $(this).attr('id');
            console.log(selCol);
            $('.selectedCol').css('background', selCol);

        });
    </script>



</body>

</html>