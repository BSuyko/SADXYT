<?php include('connection.php')?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>XYT Inc. Log In</title>
    <link rel="icon" href="/images/XYT Icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    </head>
  <body class="text-center">
<main class="form-signin">
  <form action="index.php" method="post">

    <img class="mb-2" src="../images/XYT logo.png" alt="Company Logo">
    <h1 class="h4 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="Email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button id="signinbutton" class=" w-100 btn btn-lg btn-outline-dark mb-3 mt-2" type="submit" name="sign_in">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2000–2021</p>
  </form>

</main>

  </body>
</html>
