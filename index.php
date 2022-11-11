<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOAM Closure System</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
    <div class="global-container">
        <div class="card login-form box-shadow">
            <div class="card-body">
                <h3 class="card-title text-center"></h3>
                <div class="logo text-center">
                    <img src="./koam-logo.png" alt="" width="50%" />
                    <br />
                </div>
                <h4 class="card-title text-center">Content Managment System</h4>

                <div class="card-text">

                    <form action="login.php" method="post">
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error'];  ?></p>
                        <?php } ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Username/ID</label>
                            <input name="uname" type="text" class="form-control form-control-sm has-danger"
                                id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <!-- <a
                  href="#"
                  style="float: right; font-size: 12px; text-decoration: none"
                  >Forgot password?</a
                > -->
                            <input type="password" name="pword" class="form-control form-control-sm"
                                id="exampleInputPassword1" />
                        </div>
                        <div class="sign-in-button text-center">
                            <button style="
                    background-color: rgb(255, 174, 0);
                    border: 1px solid rgb(255, 252, 252);
                    color: white; ;
                  " type="submit" class="btn btn-orange btn-block">
                                Sign in
                            </button>
                        </div>

                        <!-- <div class="sign-up">
                Don't have an account? <a href="#">Create One</a>
              </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>