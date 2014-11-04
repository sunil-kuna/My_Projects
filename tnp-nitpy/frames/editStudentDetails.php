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
	$(".login-form").validate({
				rules: {
					name: {
					required: true,
					nourl: true
					},
					email_id: {
					required: true,
					email:true,
					nourl: true
					},
					phone_no: {
					required: true,
					maxlength:11,
					minlength:10,
					digits:true,
					nourl: true
					},
					tenth: {
					required: true,
					number:true,
					nourl: true
					},
					twelveth: {
					required: true,
					number:true,
					nourl: true
					},
					average: {
					number:true,
					required: true,
					nourl: true
					}
				},
				messages: {
					name: "Enter the Student Name",
					email_id:"Enter a Valid email",
					phone_no:"Enter a Valid Phone No",
					tenth:"Enter Tenth %",
					twelveth:"Enter twelveth %",
					average:"Enter CGPA",
					source: "Enter the source of your information"
				}
		  });
});	

	</script>
	
	<style type="text/css">
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
			font-size:12px;
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
</style>

</head>
<body>
	<?php

	if(!isset($_POST['roll_no']))
	{
		die();
	}

	if(!isset($_SERVER['HTTP_REFERER']))
	{//9000554716

		header("Location: block.php");
		die();
	}
	if(strpos($_SERVER['HTTP_REFERER'], 'frames/selectEditStudent.php')===false)
	{
		header("Location: block.php");
		die();
	}
	$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
	  if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$roll_no=$_POST['roll_no'];
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
	$batch=mysqli_query($con,"SELECT * FROM batch WHERE 1");
		$batchcount=0;
		while($row = mysqli_fetch_array($batch))
		{
			$bat[$batchcount]= $row['batch'];
			$batchcount++;
		}

	$dept=mysqli_query($con,"SELECT * FROM department  WHERE 1");
		$deptcount=0;
		while($row = mysqli_fetch_array($dept))
		{
			$dep[$deptcount]= $row['dept'];
			$depname[$deptcount]=$row['dept_name'];
			$deptcount++;
		}


	?>
<FORM method="POST" action="selectEditStudent.php" class="login-form"style="float:center;text-align:center;" >
	<div class="header">
	<b><h1>EDIT THE DETAILS OF <?php echo $name; ?></h1></b>
	<span>Please be sure of the Information entering</span>
	</div>
	<div style="width:100%; padding-left:40%;float:center;text-align:left;">
	Roll Number : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $roll_no; ?><br><br>
	Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="name" id="name" value="<?php echo $name; ?>" /><br><br>
	<div  >
		 BATCH&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
		<select name="batchsd" id="batchsd">
		
		</select>
	</div>
	<br>
	<div  >
		 DEPARTMENT&nbsp&nbsp
		<select name="deptsd" id="deptsd">
		
		</select>
	</div>
	<br>
	Email Id : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="email_id" id="email_id" value="<?php echo $email_id; ?>" /><br><br>
	Phone Number : &nbsp&nbsp&nbsp<input name="phone_no" id="phone_no" value="<?php echo $phone_no; ?>" /><br><br>
    Tenth :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="tenth" id="tenth" value="<?php echo $tenth; ?>" /><br><br>
	Twelveth : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="twelveth" id="twelveth" value="<?php echo $twelveth; ?>" /><br><br>
	CGPA : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="average" id="average" value="<?php echo $average; ?>" /><br><br>
	</div>
<input name="submit" type="submit" class="submit" style="padding-left:40%"value="Edit Student Details"/>
<input name="roll_no" id="roll_no" value="<?php echo $roll_no; ?>" style="visibility:hidden;" />

</FORM>
<script type="text/javascript">

	var bat=<?php echo json_encode($bat); ?>;
var count=<?php echo $batchcount; ?>;
var x=document.getElementById("batchsd");
for(var i=0;i<count;i++)
{ option=document.createElement("option");
option.text=bat[i];
option.value=bat[i];
try
  {
  // for IE earlier than version 8
  x.add(x.options[null]);
  }
catch (e)
  {
  x.add(option,null);
  }
}

var dept=<?php echo json_encode($dep); ?>;
var dname=<?php echo json_encode($depname); ?>;
var deptcount=<?php echo $deptcount; ?>;

 x=document.getElementById("deptsd");
for(var i=0;i<deptcount;i++)
{ option=document.createElement("option");
option.text=dname[i];
option.value=dept[i];
try
  {
  // for IE earlier than version 8
  x.add(x.options[null]);
  }
catch (e)
  {
  x.add(option,null);
  }
}


</script>
</body>
</html>