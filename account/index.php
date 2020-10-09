<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/account.css">
<link rel="stylesheet" href="../assets/style.css">
</head>

<body>
  <?php include'navbar.php'?>
    <section class="login" > 
<div class="container">
 <div class="row">
 <div class="col-md-6" style="margin:auto">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<ul>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
</ul>
  </div>
  <div class="col-md-6 form">
  <div class="login_part">
<!-- <div class="social_icon float-right">
    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
</div> -->
<h3 style="color:#666;font-weight: bold;font-size:36px;padding-left: 20px;margin-top: 30px">LogIn</h3>
<hr style="border: 2px solid #666;width:100px;float:left;margin-left:30px">
<form class="px-4 mt-5" action="../LoginHandler/PageRequest.php" method="post">
   
     
      <div class="my-3">
        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="username">
        </div>
      </div>
      <div class="my-3">
        <label class="sr-only" for="inlineFormInputGroupUsername">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
          </div>
          <input type="password" class="form-control" id="inlineFormInputGroupUsername" placeholder="Password" name="pass">
        </div>
      </div>
      <!-- <div class="my-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autoSizingCheck2" style="padding:10px;">
          <label class="form-check-label" for="autoSizingCheck2" style="color: white;">
            Remember me
          </label>
        </div>
      </div> -->
      <div class="my-1 float-right">
        <button type="submit" class="btn btn-primary px-5">Login</button>
      </div>
      <div style="position:absolute; bottom:20px">
        <h5 class="text-center mt-5 px-3" style="color: #666;"> Don't Have an account? <a href="register.php" style="color:#FFB606">Register</a></h5>
      </div>
  </form>

</div>
  </div>
 </div>
</div>
    </section>
    <?php include'footer.php'?>
</body>
</html>