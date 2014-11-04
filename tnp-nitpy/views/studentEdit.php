<?php include('_header.php'); ?>
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

<div style="float:right;height:10%"> Welcome 
<a href="index.php" >
<?php
// 002E74if you need the user's information, just put them into the $_SESSION variable and output them here
    $con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $roll_no=$_SESSION['user_name'];
    if(isset($_POST['submit']))
    {
        
        if($_POST['submit']=="Edit Student Details")
        {
            $phone_no=$_POST['phone_no'];
            $tenth=$_POST['tenth'];
            $twelveth=$_POST['twelveth'];
            $average=$_POST['average'];
            
            $result = mysqli_query($con,"UPDATE student SET phone_no='$phone_no', 
                tenth='$tenth',twelveth='$twelveth', average='$average' 
                WHERE roll_no='$roll_no' ");
            if (!$result)
              {
              echo mysqli_error($con);
              }
        }
    }
    
    $result = mysqli_query($con,"SELECT * FROM student WHERE roll_no='$roll_no' ");
    $row=mysqli_fetch_array($result);
    $name=$row['name'];
    if($name=="")
    {
        header("Location: rollexist.php");
        die();
    }
    else
    {
        $name=$row['name'];
        $batch=$row['batch'];
        $email_id=$row['email_id'];
        $phone_no=$row['phone_no'];
        $dept=$row['dept'];
        $tenth=$row['tenth'];
        $twelveth=$row['twelveth'];
        $average=$row['average'];
    }
    
echo  $name ; ?> </a>
&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="edit.php"> <?php echo WORDING_EDIT_USER_DATA; ?> </a>&nbsp&nbsp
    <a href="index.php?logout"> <?php echo WORDING_LOGOUT; ?> </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
</div>
<?php include('banner_out.php'); ?>
<!-- clean separation of HTML and PHP -->

<form  class="login-form"  method="post" action="edit.php" name="user_edit_form_email" style="float:center;text-align:center;">
    <div class="header">
    <b><h1>CHANGE EMAIL</h1></b>
    <span></span>
    </div>
    <div style="width:100%; padding-left:40%;float:center;text-align:left;">
    <span> <?php echo WORDING_NEW_EMAIL; ?> </span><input id="user_email" type="email" name="user_email" required > 
    <span>( <?php echo WORDING_CURRENTLY;  echo $_SESSION['user_email']; ?> )</span>
    <input class="submit" type="submit" name="user_edit_submit_email" value=" <?php echo WORDING_CHANGE_EMAIL; ?>"> 
    </div>
</form>


<form  class="login-form" method="post" action="edit.php" name="user_edit_form_password" style="float:center;text-align:center;">
    <div class="header">
    <b><h1>CHANGE PASSWORD </h1></b>
    <span></span>
    </div>
    <div style="width:100%; padding-left:40%;float:center;text-align:left;">
    <span> <?php echo WORDING_OLD_PASSWORD; ?> </span><input id="user_password_old" type="password" name="user_password_old" autocomplete="off" >
    <span> <?php echo WORDING_NEW_PASSWORD; ?> </span><input id="user_password_new" type="password" name="user_password_new" autocomplete="off"> 
    <span> <?php echo WORDING_NEW_PASSWORD_REPEAT; ?> </span><input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off"> 
    <input type="submit" class="submit" name="user_edit_submit_password" value=" <?php echo WORDING_CHANGE_PASSWORD; ?> ">
    </div>
</form>


<FORM method="POST" action="edit.php" class="login-form"style="float:center;text-align:center;" >
    
    <div class="header">
    <b><h1>EDIT YOUR DETAILS </h1></b>
    <span>Please be sure of the Information entering</span>
    </div>

    <div style="width:100%; padding-left:40%;float:center;text-align:left;">
    Phone Number : &nbsp&nbsp&nbsp<input name="phone_no" id="phone_no" value=" <?php echo $phone_no; ?> " /><br><br>
    Tenth :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="tenth" id="tenth" value=" <?php echo $tenth; ?> " /><br><br>
    Twelveth : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="twelveth" id="twelveth" value=" <?php echo $twelveth; ?> " /><br><br>
    CGPA : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="average" id="average" value=" <?php echo $average; ?> " /><br><br>
    </div>

<input name="submit" type="submit" class="submit" style="padding-left:40%" value="Edit Your Details"/>
<input name="roll_no" id="roll_no" value=" <?php echo $roll_no; ?> " style="visibility:hidden;" />

</FORM>

<?php include('_footer.php'); ?>