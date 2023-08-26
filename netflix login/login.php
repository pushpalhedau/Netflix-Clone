<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="final_login_styles.css">
</head>
<body>
  <image class="bg_img" src="https://assets.nflxext.com/ffe/siteui/vlv3/ebff1e0f-5704-423f-b4c6-94914dabe25b/2e55d714-5f67-45ab-8bf5-4eac31d14722/IN-en-20220509-popsignuptwoweeks-perspective_alpha_website_large.jpg">
  <image class="logo" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input_elements"><div class="input-group">
  		<input placeholder="User Name" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<input placeholder="Password" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div></div>
  	<p class="ques">
  		Not yet a member? <a class="href" href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>