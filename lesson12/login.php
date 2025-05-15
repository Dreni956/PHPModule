<?php include("header.php")?>
<form class="form-signin" action="loginLogic.php" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
  <small>Don't have account ? <a href="signup.php">Sign Up</a></small>

<p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>


<?php include("footer.php")?>