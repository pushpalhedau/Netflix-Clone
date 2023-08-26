<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<image class="bg_img" src="https://assets.nflxext.com/ffe/siteui/vlv3/ebff1e0f-5704-423f-b4c6-94914dabe25b/2e55d714-5f67-45ab-8bf5-4eac31d14722/IN-en-20220509-popsignuptwoweeks-perspective_alpha_website_large.jpg">
	<image class="img-logo" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">
  <div class="header">
  	<h2 class="signup">Sign Up</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input placeholder="Username" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input placeholder="Email" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <input placeholder="Password" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <input placeholder="Confirm Password" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="ques">
  		Already a member? <a class="href" href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>