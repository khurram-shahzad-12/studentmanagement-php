<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Login Page</title>
</head>
<body>
    <?php include('dbconnection.php')?>
    <div class="container loginpagecontainer">
    <div>
      <p class="text-danger">
        <?php
        error_reporting(0);
        session_start();
        echo $_SESSION['loginmessage'];
        session_destroy();
        ?>
        
      </p>
      
    </div>
    <form style="width: 50vw;" action="usercontroller.php" method="post">
    <p class="h2 text-center">LOGIN FORM</p>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" name="name">
      </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary" name="loginuser">Submit</button>
</div>
</form>
    </div>
    
    
</body>
</html>