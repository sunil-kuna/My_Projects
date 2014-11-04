<html>
<head>
	<title></title>
</head>
<body>
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

        .submit
        {
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

<section   style="width:100%;height:15%;float:center;text-align:center;padding-left:9%" >
<div  style="width:100%" >
	<img src="frames/images/logo.png" width="10%" style="padding:2%;float:left;"/>
			<font color="#002E74"  face="verdana" style="font-size:24px; float:left;padding-top:6%">
				<b>TRAINING AND PLACEMENT CELL NIT PUDUCHERRY</b>
			</font>
		
</div>
</section>

<section   style="width:100%;height:15%;float:center;text-align:center" >
	<?php 
	if(isset($_GET['id'])&&isset($_GET['verification_code']))
	{
	?>
<form action="register.php" name="password_form" class="login-form" method="post" onSubmit="return handleClick()" style="float:center;text-align:center;">
	<div class="header">
	<b><h1>SET YOUR PASSWORD</h1></b>
	<span> </span>
	</div>
	<div style="width:100%; padding-left:40%;float:center;text-align:left;">
	<input type='hidden' name='user_id' value='<?php echo $_GET['id']; ?>' />
    <input type='hidden' name='user_activation_hash' value='<?php echo $_GET['verification_code']; ?>' />

    <label for="user_password_new">Enter Password</label><br>
    <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br><br>

    <label for="user_password_repeat">Re-Enter Password</label><br>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br><br>
    <input type="submit" class="submit" name="submit_password" value="Submit Password and Register" />
	</div>
</form>
	<?php }
	else
	{
	include("frames/Accessforbidden.php");
	} ?>
</section>

</body>
</html>