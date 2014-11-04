<html>
<head>
	<title></title>
	<style type="text/css">
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
</style>
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
	$(".form").validate({
				rules: {
					roll_no: {
					required: true,
					minlength:7,
					nourl: true
					}
				},
				messages: {
					roll_no: "Enter Valid Roll No"					
				}
		  });
});	

</script>
	
</head>
<body>
	<?php
		
	if(!isset($_GET['user_name']) && !isset($_POST['submit']))
	{
		die();
	}

		$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $today = getdate();
		$year = $today['year'];
		$month=$today['mon'];
		
		$batch=$year;
		$dept="CSE";
		if($month>=6)
		$batch++;

	if(isset($_POST['submit']))
	{
		if($_POST['submit']=="Get Students Details")
		{
			$dept=$_POST["deptsd"];
			$batch=$_POST["batchsd"];
		}
		if($_POST['submit']=="Edit Student Details")
		{
			$roll_no=$_POST['roll_no'];
			$name=$_POST['name'];
			$dept=$_POST["deptsd"];
			$batch=$_POST["batchsd"];
			$email_id=$_POST['email_id'];
			$phone_no=$_POST['phone_no'];
			$tenth=$_POST['tenth'];
			$twelveth=$_POST['twelveth'];
			$average=$_POST['average'];
			$result = mysqli_query($con,"UPDATE users  SET  user_email='$email_id' WHERE user_name='$roll_no'");
		 	if (!$result)
			 {		 	
			  echo mysqli_error($con);
			 }
			$result = mysqli_query($con,"UPDATE student SET name='$name', 
				batch='$batch',phone_no='$phone_no', 
				dept='$dept', tenth='$tenth',twelveth='$twelveth', average='$average' 
				WHERE roll_no='$roll_no' ");
			if (!$result)
			  {
			  echo mysqli_error($con);
			  }
		}
		
		
	}
	$isthere=false;
	 $result = mysqli_query($con,"SELECT * FROM student WHERE dept='$dept' AND batch='$batch'");
	if (!$result)
	  {
	  echo mysqli_error($con);
	  }
	  else
	  {
	  	  $table="<form method='POST' action='addStudent.php'>
		<table border='1'>
		<tr>
		<th>Roll No</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Phone Number</th>
		<th>Dept</th>
		<th>Batch</th>
		<th>CGPA</th>
		<th>12 th</th>
		<th>10 th</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		  {
		  	$isthere=true;
		
		  $table=$table."<tr>";
		  $table=$table."<td>" . $row['roll_no'] . "</td>";
		  $table=$table."<td>" . $row['name'] . "</td>";
		  $table=$table."<td>" . $row['email_id'] . "</td>";
		  $table=$table."<td>" . $row['phone_no'] . "</td>";
		  $table=$table."<td>" . $row['dept'] . "</td>";
		  $table=$table."<td>" . $row['batch'] . "</td>";
		  $table=$table."<td>" . $row['average'] . "</td>";
		  $table=$table."<td>" . $row['twelveth'] . "</td>";
		  $table=$table."<td>" . $row['tenth'] . "</td>";
		  $table=$table."</tr>";
		  }
		  $table=$table."</table></form>";
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
<div id="wrap" class="wrap" >
	<div id="firsthalf"  class="login-form" >
		<FORM method="POST" action="editStudentDetails.php" class="form" onSubmit="return roll()" style="text-align:center;float:top">
		<div class="header">
			<b><h1>EDIT DETAILS OF STUDENTS</h1></b>
			<span>Modify details of students by entering their Roll Number below</span>
		</div>
		ENTER STUDENT ROLL NUMBER : <input type="text" id-"roll_no" name="roll_no"/>
		<br>
		<input type="submit" name="submit" class="submit" value="Edit Student Details" style="padding-left:20%" />
		</FORM>
	</div>
	<div id="secondhalf" style="text-align:center;" class="login-form">
		<FORM method="POST" action="selectEditStudent.php">
			<div class="header">
		<b><h1>GET DETAILS OF STUDENTS OF ANY BATCH</h1></b>
		<span>USE THE RECORDS FOR REGISTERING STUDENTS</span>
	</div>
	<div  style="float:left; padding-left:40%">
		 BATCH&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
		<select name="batchsd" id="batchsd">
		
		</select>
	</div>
	<br><br>
	<div  style="float:left; padding-left:40%">
		 DEPARTMENT&nbsp&nbsp
		<select name="deptsd" id="deptsd">
		
		</select>
	</div>

		<input type="submit" name="submit"class="submit" value="Get Students Details" style="float:left; padding-left:60%;text-align:left"/>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	<p><?php if($isthere) echo $table;?> </p>
		</FORM>
	</div>
</div>

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

function roll()
{
	var oForm = document.forms[0];
	var roll_no = oForm.elements["roll_no"].value;
	if(roll_no=="")
		return false;
	return true;
}
</script>
</body>
</html>