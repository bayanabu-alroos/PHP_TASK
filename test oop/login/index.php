<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="index-login-singup">
                <h4>SIGN UP</h4>
                <p>Dont have an account yet ? Signup here !</p>
                <form action="includes/singup.inc.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name= "uid" placeholder ="Username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
                    <input type="text" name= "uid" placeholder ="Username">
                    <input type="password" name= "pwd" placeholder ="Password">
                    <input type="password" name= "pwdrepeat" placeholder ="Repeat Password">
                    <input type="text" name= "email" placeholder ="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP </button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Dont have an account yet ? Signup here !</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name= "uid" placeholder ="Username">
                    <input type="password" name= "pwd" placeholder ="Password">
                    <br>
                    <button type="submit" name="submit">SIGN UP </button>
                </form>
            </div>


        </div>
    </section>
</body>
</html>