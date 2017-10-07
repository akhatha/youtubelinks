<?php
include('/function.php');
include('/config.php');

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$userExist=user_exist($email,$password);//cheking user already exist or not
	$mess=null;
 
	
	if($userExist)
	{
		session_start();
                $data=user_data($email,$password);
             // echo "hi";  print_r($data);
                //exit;
                
                $_SESSION['user_id']=$data;
		
		$_SESSION['username'] = $_POST['email'];
		header('Location:home.php');//if user exist it redirects to dashboard
		
	}
	else
	{
		$mess='user doesnot exist';
	}

	
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Post – Video Sharing HTML Template</title>
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Author - Personal Blog Wordpress Template">
        <meta name="author" content="Rabie Elkheir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="log_in_page">
      <!--======= log_in_page =======-->
      <div id="log-in" class="site-form log-in-form">
      
      	<div id="log-in-head">
        	<h1>Log in</h1>
            <div id="logo"><a href="01-home.html"><img src="images/logo.png" alt=""></a></div>
        </div>
        
        <div class="form-output">
        	<form method="POST" action="">
				<div class="form-group label-floating">
					<label class="control-label">Your Email</label>
					<input class="form-control" placeholder="" type="text" name="email">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Your Password</label>
					<input class="form-control" placeholder="" type="password" name="password">
				</div>
                
				<div class="remember">
					<div class="checkbox">
						<label>
							<input name="optionsCheckboxes" type="checkbox">
								Remember Me
						</label>
					</div>
					<a href="#" class="forgot">Forgot my Password</a>
				</div>
                
				<!--<a href="01-home.html" class="btn btn-lg btn-primary full-width">Login</a>-->
<input class="btn btn-lg btn-primary full-width" type="submit" name="submit" value="Login" required>

				<p>Don't you have an account? <a href="sign_up_page.php">Register Now!</a> </p>
            </form>
        </div>
      </div>
      <!--======= // log_in_page =======-->
	</body>


</html>
