<?php
require_once('config.php');

if(isset($_SESSION['access_token'])){
	header("Location: index.php");
	exit();
}

$redirectTo = "http://localhost/myprofile/callback.php";
$data = ['email'];
$fullURL = $handler->getLoginUrl($redirectTo, $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <link href="css/style.css" rel="stylesheet">
</head>


<body class="app flex-row align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-group">

		<form method="post" action="">
      <div class="card p-4">
        <div class="card-body">
          <h1>Login</h1>
            <p class="text-muted">Sign In to your account</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-user"></i></span>
                </div>
              <input type="text" id="txtUser" name="" class="form-control" placeholder="Username">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                </div>
              <input type="password" id="txtPass" name=""  class="form-control" placeholder="Password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" name="btn_login" class="btn btn-primary px-4">Login</button>
                </div>
                <div class="col-6 text-right">
                  <button type="button" class="btn btn-link px-0">Forgot password?</button>
                </div>
             </div>
        </div>
      </div>
	  </form>
   
    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
     <div class="card-body text-center">
      <div>
        <h2>Sign up</h2>
        <input type="button" onclick="window.location = '<?php echo $fullURL ?>'" value="Login with Facebook" class="btn btn-primary">
        <br>
        <button type="button" class="btn btn-primary active mt-3">Register Now!</button></a>
      </div>
      </div>
    </div>
       
   </div>
	</div>
  </div>
  </div>

</body>
</html>