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
					roll_no: {
					required: true,
					minlength: 7,
					nourl: true,
					username: true,
					maxlength: 30

					},
					name: {
					required: true,
					minlength: 5
					},
					email_id: {
					required: true,
					email:true,
					maxlength: 50,

					},
					phone_no:
					{
					required:true,
					minlength:10,
					maxlength:11,
					digits:true
					}
				},
				messages: {
					roll_no: "Enter the Valid Roll No",
					name: "Enter the name of Student",
					email_id:"Enter a Valid email",
					phone_no:"Enter a Valid Phone No"
				}
		  });
	$(".form2").validate({
				rules: {
					deptname: {
					required: true,
					minlength: 7,
					nourl: true
					},
					deptcode: {
					required: true,
					maxlength: 5
					}
				},
				messages: {
					deptname: "Enter the Department Name",
					deptcode: "Enter the Department Code"
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
	$Student_Registered=0;
	$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $today = getdate();
		$year = $today['year'];
		$month=$today['mon'];
		
	$dept="CSE";
		if($month<6)
			$batch =($year-1)."-".$year;
		else
			$batch =($year)."-".($year+1);
			

if(isset($_POST['submit']))
{
	
	if($_POST['submit']=="ADD BATCH")
	{
		
		$highest=mysqli_query($con,"SELECT MAX(batch) AS HighestPrice FROM batch");
		$diff=0;
		$row = mysqli_fetch_array($highest);
		$max=$row['HighestPrice'];
		if($month<6)
			$diff=2;
		else
			$diff=3;
		$num=substr($max, 0, 4);
		if($year+$diff>$num)
		{
			$num++;
				$max =($num)."-".($num+1);

			mysqli_query($con,"INSERT INTO batch (batch) VALUES ('$max')");
		}
		else
			echo "Cannot Add More Batches";
			
		

	}
	else if($_POST['submit']=="Add Department")
	{
		$deptcode=$_POST["deptcode"];
		$deptname=$_POST["deptname"];
		$result = mysqli_query($con,"INSERT INTO department (dept, dept_name) VALUES ('$deptcode','$deptname')");
		if (!$result)
		 {
		  echo mysqli_error($con);
		 }	
	}
	else if($_POST['submit']=="Add Student")
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

	
		$dept=$_POST["dept"];
		$roll_no=$_POST["roll_no"];
		$batch=$_POST["batch"];
		$email_id=$_POST["email_id"];
		$phone_no=$_POST["phone_no"];
		$name=strtoupper($_POST["name"]);
		$result = mysqli_query($con,"INSERT INTO student 
			(roll_no , name , batch , email_id , phone_no , dept )
		 VALUES ('$roll_no','$name','$batch','$email_id','$phone_no','$dept')");
		if (!$result)
		 {
		  $Student_Registered=-1;
		 }
		 else
		 	$Student_Registered=1;
		 	
	}
	else if($_POST['submit']=="Get Students Details")
	{
		$dept=$_POST["deptsd"];
		$batch=$_POST["batchsd"];
		
	}
	else
	{
		$result = mysqli_query($con,"DELETE FROM student WHERE roll_no='{$_POST['submit']}'");
		if (!$result)
		 {
		  echo mysqli_error($con);
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


}

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
<th>Delete Student</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
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
  $table=$table."<td>" ."<input name='submit' class='delbutton' type='submit' value='{$row['roll_no']}'/>". "</td>";
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
			<FORM  method="POST" action="addStudent.php" class="form1" onSubmit="return addStudent()" style="text-align:center;float:top" >
					<div class="header">

						<b><h5>
						<?php

								if($Student_Registered==1)
									echo $name." is Registered ";
								else if($Student_Registered==-1)
									echo $name." is not Registered ";


						 ?></h5>
							<h1>REGISTER A STUDENT IN TNP</h1>
						</b>
						<span>Please be sure of the Information entering</span>
					</div>
					<div style="float:left; padding-left:40%" >
						 BATCH : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<select name="batch" id="batch">
						
						</select>
					</div>
					<br>
					<br>
					<div style="float:left; padding-left:40%" >
						 DEPARTMENT : &nbsp&nbsp
						<select name="dept" id="dept">
						
						</select>
					</div>
					<br><br>
					<br><br>
					<div style="float:left; padding-left:40%;text-align:left" >
					Roll Number : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="roll_no" id="roll_no"/><br><br>
					Name :   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name" /><br><br>
					Email Id :  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email_id" id="email_id"/><br><br>
					Phone Number : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="phone_no" id="phone_no"/><br><br>
					<input type="submit" style="padding-left:50%;float:left"name="submit" class="submit" value="Add Student"/>
					</div>
					
			</FORM>
			<div style="float:right;position:relative;right:0px;" id="dep" class="submit" onclick="tment()">
			 ADD A DEPARTMENT<br><br>
			</div>
			<form method="POST" action="addStudent.php" style="float:right;position:absolute;top:400px;right:0px;">
			<input type="submit" name="submit" class="submit" value="ADD BATCH" />
			</form>
			
			<p id="para"></p>
		
	</div>

<br>
<div id="secondhalf" style="text-align:center;" class="login-form">
<FORM method="POST" action="addStudent.php?username=<?php $_GET['user_name'] ?>" style="text-align:center;float:top" >
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
	<p><?php echo $table;?> </p>
</FORM>
</div>
</div>
<script type="text/javascript">



$(".delbutton").live('click', function() {
    return confirm("Do you wanna Delete "+$(this).val());
});
var bat=<?php echo json_encode($bat); ?>;
var count=<?php echo $batchcount; ?>;
var x=document.getElementById("batch");
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

 x=document.getElementById("dept");
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
function handledeptClick()
{
	var oForm = document.forms[1];
	var code = oForm.elements["deptcode"].value;
	var name= oForm.elements["deptname"].value;
	

	
	if(code=="")
	{
		document.getElementById("para").innerHTML="Please enter the Department Code";
		return false;
	}
	if(name=="")
	{
		document.getElementById("para").innerHTML="Please enter the Department Name";
		return false;
	}
	
			
}

function addStudent()
{

	var oForm = document.forms[0];
	var roll_no = oForm.elements["roll_no"].value;
	var name= oForm.elements["name"].value;
	var email_id = oForm.elements["email_id"].value;
	var phone_no= oForm.elements["phone_no"].value;
	
if(roll_no=="")
{
	document.getElementById("addStudentp").innerHTML="Please Enter Roll Number of Student";
	return false;
}

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
if(phone_no=="")
{
	document.getElementById("addStudentp").innerHTML="Please Enter Phone Number of Student";
	return false;
}
return true;
}
var deptment=document.getElementById("dep");

function tment()
{
	
	var form=document.createElement("form");
	form.setAttribute("method","POST");
	form.setAttribute("id","oForm");
	form.setAttribute("class","form2");
	form.setAttribute("action","addStudent.php");
	form.setAttribute("onSubmit","return handledeptClick()");
	form.setAttribute("style","float:right;");
	
	theText=document.createTextNode("DEPARTMENT CODE  : ");
	form.appendChild(theText);

	var inp = document.createElement("input");
	inp.setAttribute("type","text");
	inp.setAttribute("name","deptcode");
	inp.setAttribute("id","deptcode");
	form.appendChild(inp);
	
	var br=document.createElement("br");
	form.appendChild(br);
	var br=document.createElement("br");
	form.appendChild(br);
	
	theText=document.createTextNode("DEPARTMENT NAME : ");
	form.appendChild(theText);

	var inp = document.createElement("input");
	inp.setAttribute("type","text");
	inp.setAttribute("name","deptname");
	inp.setAttribute("id","deptname");
	form.appendChild(inp);
	
	var inp = document.createElement("input");
	inp.setAttribute("type","submit");
	inp.setAttribute("name","submit");
	inp.setAttribute("class","submit");
	inp.setAttribute("id","deptname");
	inp.setAttribute("value","Add Department");
	form.appendChild(inp);
	
	var p=document.createElement("p");
	p.setAttribute("id","para");
	p.setAttribute("style","color:RED");
	form.appendChild(p);

	var inp = document.createElement("button");
	inp.setAttribute("class","submit");
	inp.setAttribute("style","font-size:14px");
	inp.setAttribute("onclick","removedep()");
	inp.setAttribute("id","close");
	inp.innerHTML="Close";

	var dep=document.getElementById("dep");
	dep.innerHTML="";
	dep.appendChild(inp);
	dep.setAttribute("class","");
	dep.setAttribute("onclick","");
	dep.appendChild(form);
}
function removedep()
{
	var dep=document.getElementById("dep");
	dep.setAttribute("class","submit");
	dep.innerHTML="";
	var p=document.createElement("p");
	p.innerHTML="ADD DEPARTMENT";
	p.setAttribute("onclick","tment()");
	dep.appendChild(p);
}

</script>

</body>
</html>