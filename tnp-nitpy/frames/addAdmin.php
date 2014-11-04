<html>
<head>
	<title></title>
	<script src="js/jquery.js"></script>
	<script src="js/validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/label.css">
	<script type="text/javascript">
	$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
		$.validator.addMethod("username", 
                    function(value, element) {
                         return /^[a-z\d]{2,64}$/i.test(value);
                        }, 
                        "Not a Username"
      );
	$(".form1").validate({
				rules: {
					name: {
					required: true,
					minlength: 5,
					username : true
					},
					email_id: {
					required: true,
					email:true,
					maxlength: 50,

					},
				},
				messages: {
					name: "Enter the name of ADMIN",
					email_id:"Enter a Valid email",
				}
		  });
	});	

	</script>
	

	<style type="text/css">
			.wrap {
			width: 100%;
			background-color: #0000ff;
			    
			}

			.login-form {
				width: 100%;
			    float:left;
			    height :auto;
			    background-color: #ff0000;
			}
			.floatright {
			    float:left;
			    width: 100%;
			    background-color: #00ff00;
			    height: auto;
			}

			select {
		    padding:3px;
		    margin: 0;
		    -webkit-border-radius:4px;
		    -moz-border-radius:4px;
		    border-radius:4px;
		    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
		    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
		    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
		    background: #f8f8f8;
		    color:#888;
		    border:none;
		    outline:none;
		    display: inline-block;
		    -webkit-appearance:none;
		    -moz-appearance:none;
		    appearance:none;
		    cursor:pointer;
		}

		/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
		@media screen and (-webkit-min-device-pixel-ratio:0) {
		    select {padding-right:18px}
		}

		.login-form {
		width: 100%;
		margin: 0 auto;
		position: relative;
		
		background: #f3f3f3;
		border: 1px solid #fff;
		border-radius: 5px;
		
		box-shadow: 0 1px 3px rgba(0,0,0,0.5);
		-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
		-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	}
	.login-form .header {
		padding: 40px 30px 30px 30px;
		}

		.login-form .header h1 {
			font-family: 'Bree Serif', serif;
			font-weight: 300;
			font-size: 28px;
			line-height:34px;
			color: #414848;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
			margin-bottom: 10px;
		}

		.login-form .header span {
			font-size: 11px;
			line-height: 16px;
			color: #678889;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
		}

		/*******************
		CONTENT
		*******************/

		.login-form .content {
			padding: 0 30px 25px 30px;
		}

		/* Input field */
		.login-form .content .input {
			width: 188px;
			padding: 15px 25px;
			
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
			font-weight: 400;
			font-size: 14px;
			color: #9d9e9e;
			text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
			
			background: #fff;
			border: 1px solid #fff;
			border-radius: 5px;
			
			box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
			-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
			-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
		}

		/* Second input field */
		.login-form .content .password, .login-form .content .pass-icon {
			margin-top: 25px;
		}

		.login-form .content .input:hover {
			background: #dfe9ec;
			color: #414848;
		}

		.login-form .content .input:focus {
			background: #dfe9ec;
			color: #414848;
			
			box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
			-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
			-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
		}

	table {
			font-family:Arial, Helvetica, sans-serif;
			color:#666;
			font-size:14px;
			text-shadow: 1px 1px 0px #fff;
			background:#eaebec;
			margin:20px;
			border:#ccc 1px solid;
			text-align: center;
			horizontal-align:center;
			-moz-border-radius:3px;
			-webkit-border-radius:3px;
			border-radius:3px;

			-moz-box-shadow: 0 1px 2px #d1d1d1;
			-webkit-box-shadow: 0 1px 2px #d1d1d1;
			box-shadow: 0 1px 2px #d1d1d1;
		}
		table th {
			padding:21px 25px 22px 25px;
			border-top:1px solid #fafafa;
			border-bottom:1px solid #e0e0e0;

			background: #ededed;
			background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
			background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
		}
		table th:first-child {
			text-align: left;
			padding-left:20px;
		}
		table tr:first-child th:first-child {
			-moz-border-radius-topleft:3px;
			-webkit-border-top-left-radius:3px;
			border-top-left-radius:3px;
		}
		table tr:first-child th:last-child {
			-moz-border-radius-topright:3px;
			-webkit-border-top-right-radius:3px;
			border-top-right-radius:3px;
		}
		table tr {
			text-align: center;
			padding-left:20px;
		}
		table td:first-child {
			text-align: left;
			padding-left:20px;
			border-left: 0;
		}
		table td {
			padding:18px;
			border-top: 1px solid #ffffff;
			border-bottom:1px solid #e0e0e0;
			border-left: 1px solid #e0e0e0;

			background: #fafafa;
			background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
			background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
		}
		table tr.even td {
			background: #f6f6f6;
			background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
			background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
		}
		table tr:last-child td {
			border-bottom:0;
		}
		table tr:last-child td:first-child {
			-moz-border-radius-bottomleft:3px;
			-webkit-border-bottom-left-radius:3px;
			border-bottom-left-radius:3px;
		}
		table tr:last-child td:last-child {
			-moz-border-radius-bottomright:3px;
			-webkit-border-bottom-right-radius:3px;
			border-bottom-right-radius:3px;
		}
		table tr:hover td {
			background: #f2f2f2;
			background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
			background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
		}
		.submit
		{
			padding: 10px;
			margin-right: 20px;
			padding-left: 15%;
			background: none;
			border: none;
			cursor: pointer;

			font-family: 'Bree Serif', serif;
			font-weight: 300;
			font-size: 22px;
			color: #414848;
			text-shadow: 0px 1px 0 rgba(256,256,256,0.5);
		}

		.submit:hover {
			color: #3f9db8;
		}

		.submit .footer .register:focus {
			position: relative;
			bottom: -1px;
		}
	</style>
</head>
<body>
<?php
		
	  
	if(!isset($_GET['user_name'])&&!isset($_POST['submit']))
	{
		die();
	}
	if(isset($_GET['user_name']))
	$user_name=$_GET['user_name'];
	$Admin_Registered=0;
	$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		 

if(isset($_POST['submit']))
{
	$user_name=$_POST['user_name'];
	if($_POST['submit']=="Register Admin")
	{
		 $path = $_SERVER['DOCUMENT_ROOT'];
	   if (version_compare(PHP_VERSION, '5.3.7', '<')) {
		    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
		} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
		    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
		    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
		    require_once ($path.'/tnp-nitpy'.'/libraries/password_compatibility_library.php');
		}
		// include the config
		require_once ($path.'/tnp-nitpy'.'/config/config.php');

		// include the to-be-used language, english by default. feel free to translate your project and include something else
		require_once ($path.'/tnp-nitpy'.'/translations/en.php');

		// include the PHPMailer library
		require_once ($path.'/tnp-nitpy'.'/libraries/PHPMailer.php');

		// load the registration class
		require_once ($path.'/tnp-nitpy'.'/classes/Registration.php');
		
		$registration = new Registration();
	
	}
	else
	{
		$result = mysqli_query($con,"DELETE FROM users WHERE user_name='{$_POST['submit']}'");
	 	if (!$result)
		 {
		  echo mysqli_error($con);
		 }		 	
	}


}

 $result = mysqli_query($con,"SELECT * FROM users WHERE admin_student=1 AND user_name != '$user_name' ");
if (!$result)
  {
  echo mysqli_error($con);
  }
  else
  {
  $table="<form method='POST' action='addStudent.php'>
  <input type='hidden' name='user_name' value='<?php echo $user_name; ?>'/>
<table border='1'>
<tr>
<th>Username</th>
<th>Email Id</th>
<th>Delete Admin</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  $table=$table."<tr>";
  $table=$table."<td>" . $row['user_name'] . "</td>";
  $table=$table."<td>" . $row['user_email'] . "</td>";
  $table=$table."<td>" ."<input name='submit' class='delbutton' type='submit' value='{$row['user_name']}'/>". "</td>";
  $table=$table."</tr>";
  }
  $table=$table."</table></form>";
}

?>
<div id="wrap" class="wrap" >
	<div id="firsthalf"  class="login-form" >
			<FORM  method="POST" action="addAdmin.php?username=<?php $_GET['user_name'] ?>" class="form1" onSubmit="return addStudent()" style="text-align:center;float:top" >
					<div class="header">
						<b><h5>
						<?php

								if($Admin_Registered==1)
									echo $name." is Registered ";
								else if($Admin_Registered==-1)
									echo $name." is not Registered ";


						 ?></h5>
							<h1>REGISTER AN ADMIN</h1>
						</b>
						<span>Please be sure of the Information entering</span>
					</div>
					<br><br>
					<div style="float:left; padding-left:40%;text-align:left" >
					Name :   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name" /><br><br>
					Email Id :  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email_id" id="email_id"/><br><br>
					<input type="submit" style="padding-left:50%;float:left"name="submit" class="submit" value="Register Admin"/>
					<input type="hidden" name="user_name" value="<?php echo $user_name; ?>"/>
					</div>
					
			</FORM>		
	</div>

<br>
<div id="secondhalf" style="text-align:center;" class="login-form">
<FORM method="POST" action="addAdmin.php?username=<?php $_GET['user_name'] ?>" style="text-align:center;float:top" >
	<div class="header">
		<b><h1>LIST OF ADMINS</h1></b>
		<span>USE THE RECORDS FOR REGISTERING ADMINS</span>
	</div>
	<p><?php echo $table;?> </p>
</FORM>
</div>
</div>
<script type="text/javascript">

$(".delbutton").live('click', function() {
    return confirm("Do you wanna Delete "+$(this).val());
});

function addStudent()
{

	var oForm = document.forms[0];
	var name= oForm.elements["name"].value;
	var email_id = oForm.elements["email_id"].value;
	

if(name=="")
{
	document.getElementById("addStudentp").innerHTML="Please Enter Name of Student";
	return false;
}
if(email_id=="")
{
	document.getElementById("addStudentp").innerHTML="Please Enter Email Id of Student";
	return false;
}
return true;
}
</script>

</body>
</html>