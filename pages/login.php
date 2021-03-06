<?php
require_once '../conn.php';
session_start();
 
if(isset($_SESSION["success"]) && $_SESSION["success"] === true){
    header("location: home.php");
    exit;
}
$login_err = '';
$username_err = '';
$password_err = '';
$username = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(empty($_POST['username'])){
		$username_err = 'Enter your username';
	}
	else{
		$username = $_POST['username'];
	}
	if(empty($_POST['password'])){
		$password_err = 'Enter your password';
	}
	else{
		$password = $_POST['password'];
	}
	if(empty($username_err) && empty($password_err)){
			$sql = "SELECT Member_ID, First_Name, Other_Name, Last_Name, Username, Password FROM users WHERE Username=?";

			if($stmt = mysqli_prepare($link, $sql)){
				mysqli_stmt_bind_param($stmt,'s', $username_param);
				$username_param = $username;
				if(mysqli_stmt_execute($stmt)){
					mysqli_stmt_store_result($stmt);
					
					if(mysqli_stmt_num_rows($stmt) == 1){
						mysqli_stmt_bind_result($stmt, $id, $fname, $oname,$lname,$username_res, $password_res);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($password, $password_res)){
								session_start();
								$_SESSION['success'] = true;
								$_SESSION['username']=$username_res;
								$_SESSION['fname']= $fname;
								$_SESSION['lname']= $lname;
								$_SESSION['fullname'] = $fname." ".$lname;
								$_SESSION['ID']=$id;
								
								header("location: home.php");
							}
							else{
								$login_err = "Invalid password";
							}
						}
					}
					else{
						$login_err = "Invalid username or password";
					}
				}
				else{
					alert("Oops! Something went wrong. Please try again later.");
				}
				mysqli_stmt_close($stmt);
			}
		}
		
	mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="icon" href="../images/YPG.png" />
        <link rel="stylesheet" href="../styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../styles/login.css" />
        <link rel="stylesheet" href="../styles/fontawesome/css/all.css" />
		<meta name='viewport' content='width=device-width, inital-scale=1.0'>
    </head>

    <body>
        <div id="page">
            <div id="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="login">
					<?php 
                    	if(!empty($login_err)){
                        	echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    	}        
                	?>
					<div class="input-icons">
                        <i class="fa fa-user icon"></i>
                        <input type="text" placeholder="<?php echo (!empty($username_err)) ? $username_err: "Username"; ?>" name="username" id ="ID"  class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" />
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon"></i>
                        <input type="password" placeholder="<?php echo (!empty($username_err)) ? $password_err: "Password"; ?>" name="password" id="pass" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" />
                    </div>
                    <p><input type="submit" class="sub" value="Login" /></p>
                </form>
            </div>
		</div>
    </body>
</html>