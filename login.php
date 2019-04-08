<!doctype html>
<html lang="en">

<head>
<?php include 'inc/head.php'; ?>
</head>

<body>
    <h1 class="sr-only">Vesuvio Admin Template</h1>
    <div class="wrapper">


        <!-- main content starts -->
        <main role="main" class="login">


            <!-- main content starts -->
            <form class="form-userinput">
                <div class="brand d-flex justify-content-center align-items-center">
                    <img src="assets/img/site-logo.png" alt="Vesuvio">
                </div>
                <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mt-5 mb-4 font-weight-normal">Login</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <div class="password">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <a href="#"><i class="far fa-eye"></i></a>
                </div>
                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block btn-rounded" type="submit">Login</button>
                <p class="mt-5 mb-3 text-center text-small">
                    <a href="forgotpw.php">Forgot Password?</a>
                </p>
                <br>
                <p class="mt-5 mb-3 text-center">Don't have account?
                    <a href="register.php">Create</a> here.</p>
            </form>
            <p class="text-muted text-small text-center mt-5">Powered by Vesuvio Labs</p>
            <!-- main content ends -->
        </main>
        <!-- main content ends -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>







</body>

</html>