<?php  
	session_start();
	if(isset($_SESSION['loggedIN']))
	{
		header('location:admin.php');
		exit();
	}
    if (isset($_POST['login'])) 
	{
		$connection = new mysqli('localhost', 'root', '', 'admin');
		//$connection = new mysqli(host: 'localhost', username: 'root', passwd: '', dbname:'logintutorial');
		$email = $connection->real_escape_string($_POST['emailPHP']); 
		$password = md5($connection->real_escape_string($_POST['passwordPHP'])); 
		
		$data = $connection->query("select id from admininfo where email='$email' AND password='$password'");
		if($data->num_rows > 0)
		{
			$_SESSION['loggedIN']= '1';
			$_SESSION['email'] = $email;
			exit('<font color="green">Login Success..</font>');
		}
		else
		{
			exit('<font color="red">Please Enter Valid Credentials..</font>');
		}
		//exit($email . " = " . $password);
	}	                 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Kumbh Sans', sans-serif;
            background: #131313;
        }
        .box{
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #141414;
            text-align: center;
        }
        .box h2{
            color: #ff8177;
            text-transform: uppercase;
            font-weight: 550;
        }
        .box input[type = "email"],.box input[type = "password"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            border: 2px solid gray;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 20px;
            transform: 0.25s;
        }
        .box input[type = "email"]:focus,.box input[type = "password"]:focus{
            width: 260px;
            border-color: #ff0844;
        }
        .box input[type ="button"]{
            border: 0;
            background: #f77062;
            display: block;
            margin: 20px auto;
            text-lign: center;
            border: 2px solid #131313;
            padding: 14px 40px;
            width: 150px;
            outline: none;
            color: white;
            border-radius: 20px;
            transform: 0.25s;
            cursor: pointer;
        }
        .box input a{
            text-decorayion: none;
        }
        .box input[type ="button"]:hover{
            background: royalblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <form  class="box" action="login.php" method="post" name="login">
        <h2>Login</h2>

                        <input type="email" class="input" placeholder="Email" name="email" id="email" required>
    
                        <input type="password" class="input" placeholder="Password" name="password" id="password" required>

                        <input type="button" value="Login" class="btn" id="login">
                        <a href="http://localhost/Project3/"><input type="button" value="Back" class="btn" id="login"></a>
    </div>
    </form>
    </div>
    </div>
    <p id="response"> </p>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*if the button type is submit and you click on button, it will not execute the below
            code,  you need to change the input type to button for this button*/
            $("#login").on('click', function() {
                var email = $("#email").val();
                var password = $("#password").val();
                //console.log(email);
                //console.log(password);
                if (email == "" || password == "") {
                    alert('Please check your inputs');
                } else {
                    $.ajax({
                        url: 'login.php',
                        method: 'POST',
                        data: {
                            login: 1,
                            emailPHP: email,
                            passwordPHP: password
                        },
                        success: function(response) {
                            //console.log(response);
                            // $("#response").html(response);
                            if (response.indexOf('Success') >= 0) {
                                //alert('if statement is true');
                                window.location = 'admin.php';
                            }
                        },
                        datatype: 'text'
                    });
                }
            });

        });
    </script>

</body>

</html>