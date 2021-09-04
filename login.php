<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <?php include "includes/head_resources.php"; ?>
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <section class="login-content">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-5 col-sm-12 col-12 align-self-center">
                    <div class="sign-user_card">
                        <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                        <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
                        <h3 class="mb-3">Sign In</h3>
                        <p>Login to stay connected.</p>
                        <form action="home" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" placeholder=" ">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" placeholder=" ">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox mb-3 text-left">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                            <p class="mt-3">
                                Create an Account <a href="./register" class="text-primary">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/script_resources.php"; ?>

</body>

</html>
<script>
    $('#registerForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'ajax/logout.php',
            type: 'POST',
            data : $(this).serialize(),
            cache: false,
            beforeSend: function() {
                $('#spinner').show();
                $('#result').hide();
                $('#btnText').hide();
            },
            success: function(data){
                if (data == 1) {
                    location.href = 'home';
                }
                else{
                    $('#result').html(data);
                    $('#result').fadeIn();
                    $('#spinner').hide();
                    $('#btnText').show();
                }
            }
        })
    })
</script>