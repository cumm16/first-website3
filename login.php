<!DOCTYPE html>
<?php
    session_start();
    session_destroy();
    session_unset();
    session_start();

    $_SESSION["userDisplayName"] = "Not yet logged in!"; 

    /*
    $_SESSION["userName"] = "user";
    $_SESSION["userDisplayName"] = "Sam"; 
    $userDisplayName = $_SESSION["userDisplayName"]; 
    */

    $message = "Please Login."; 
    $method = $_SERVER["REQUEST_METHOD"];

    IF ($method=="POST") {
        $userName = $_POST["userName"];
        $password = $_POST["password"]; 

        IF ($userName != "admin")  {
            $message = "Invalid User name"; 
        } ELSE IF ($password != "password") {
            $message = "Invalid Password"; 
        } ELSE {
            $userDisplayName = "Sam"; 
            $message = "Successfully logged in.";
            $_SESSION["userDisplayName"] = $userDisplayName; 
            $_SESSION["userName"] = $userName;
        }
    }

   

?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cats Collective</title>
		<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
<?php 	require('header.php'); 
		require('nav.php')
?>
		<maincontent>
			<h1>
                Login   
            </h1>   
            <form action="" name="login" id="login" method="POST">
                <table>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="userName" required></input></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></input></td>
                    </tr>
                    
                    <tr>
                        <td><button type="reset" name="reset">Reset</button></td>
                        <td><button type="submit" name="submit">Submit</button></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <?php echo($message);?>
                        </td>
                    </tr>
                </table>
            </form>
		</maincontent>
<?php   require('footer.php');
?>
	</body>
</html>

