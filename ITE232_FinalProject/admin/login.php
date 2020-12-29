<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://use.fontawesome.com/092e98dd01.js"></script>

    <title> Home </title>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row justify-content-center">
       <div class="col-sm-4 col-sm-offset-4">
        <form class="form-container jumbotron" method="POST" action="./includes/loginfunction.php">
          <div class="form-group text-center">
            <img src="images/loginicon.png" class="img-responsive" width="60" height="60">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Enter your email address...</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="userPassword"e class="form-control" id="userPassword" />
                      <input type="checkbox" onchange="togglePassword(this);" style="margin-top: 15px;"> <span id="ShowHidePassword">Show Password</span>
          </div>
          <input type="submit" name="submit" class="btn btn-primary form-control" value="Login">
        </form>
       </div>
      </div>
    </div>
    <script>
      function togglePassword(x){
        var checkbox = x.checked;
        if(checkbox){
          document.getElementById("userPassword").type = "text";
          document.getElementById("ShowHidePassword").textContent = "Hide Password";
        }
        else {
          document.getElementById("userPassword").type = "password";
          document.getElementById("ShowHidePassword").textContent = "Show Password";
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>