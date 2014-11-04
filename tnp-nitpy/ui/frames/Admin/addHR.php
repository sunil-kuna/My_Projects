<html>
<head>
	<script src="js/jquery.js"></script>
	<script src="js/validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/label.css">
	<script>var $jq1 = jQuery.noConflict();</script>
	<meta charset="utf-8">
	<title>Enter HR Details</title>
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$jq1.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
	$jq1(".login-form").validate({
				rules: {
					company: {
					required: true,
					nourl: true
					},
					hr_name: {
					required: true,
					nourl: true
					},
					hr_email_id: {
					required: true,
					email: true,
					nourl: true
					},
					hr_phone_no: {
					required: true,
					digits:true,
					maxlength:11,
					minlength:10,
					nourl: true
					},
					source: {
					required: true,
					minlength: 5
					}
				},
				messages: {
					company: "Enter the Company Name",
					hr_name: "Enter the HR Name",
					hr_email_id: "Enter valid email id",
					hr_phone_no: "Enter valid Phone No",
					source: "Enter the source of your information"
				}
		  });
});	

	</script>
	

	<?php  
		$j=0;
		$companies=array();
		$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno()) {
			echo "connection failed".mysqli_connect_errno();
		}
		if(isset($_POST['submit']))
		{
			if($_POST['submit']=="ADD HR")
			{
				$company=$_POST['company'];
				$hr_name=$_POST['hr_name'];
				$hr_email_id=$_POST['hr_email_id'];
				$hr_phone_no=$_POST['hr_phone_no'];
				$source=$_POST['source'];
				$s_id=$_POST['s_id'];
				$mysqldate= date("Y-m-d H:i:s",time()+16200);
				
				$sql="INSERT INTO hr (company_name, hr_name, hr_email_id, hr_phone_no, source,s_id,hr_time) 
				VALUES('$company','$hr_name','$hr_email_id','$hr_phone_no','$source','$s_id','$mysqldate')";
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo mysqli_error($con);
				}
			}
		}
		$sql="SELECT c_name FROM company WHERE 1";
		$result=mysqli_query($con,$sql);

		if(!$result)
		{
			echo mysqli_error($con);
		}
		else
		{

			while($row=mysqli_fetch_array($result))
			{
				$companies[$j]=$row['c_name'];
				$j++;
			}
		}
		$sql="SELECT * FROM  company
				LEFT OUTER JOIN hr ON company.c_name = hr.company_name 
				LEFT OUTER JOIN student ON student.roll_no = hr.s_id  ORDER BY hr_time DESC";
		$result=mysqli_query($con,$sql);

		if(!$result)
		{
			echo mysqli_error($con);
		}
		else
		{ 
			$table="<table border='1'>
			<tr>
			<th>Company</th>
			<th>HR NAME</th>
			<th>HR Email Id</th>
			<th>HR Phone No</th>
			<th>Student</th>
			<th>Source</th>
			<th>Time Uploaded</th>
			</tr>";
			while($row=mysqli_fetch_array($result))
			{
				$table=$table."<tr><td>".$row['c_name']."</td><td>". $row['hr_name'] ."</td><td>". $row['hr_email_id'] ."</td><td>". $row['hr_phone_no'] ."</td><td>". $row['name'] ."</td><td>". $row['source'] ."</td><td>".$row['hr_time']."</td></tr>";
			}
			$table=$table."</table>";
		}


	?>
	
	<script >
		$(function() {
		var companies =<?php echo json_encode($companies); ?>;
		 
		$( "#company" ).autocomplete({
		minLength: 0,
		source: companies,
		focus: function( event, ui ) {
		$( "#company" ).val( ui.item.label );
		return false;
		},
		select: function( event, ui ) {
		$( "#company" ).val( ui.item.label );
		$( "#comvalue" ).val( ui.item.value );
		 
		return false;
		}
		})
		
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
<body style="padding:3%">
<form name="login-form" class="login-form"action="addHR.php" method="post" style="float:center;text-align:center;" >
	<div class="header">
	<b><h1>ENTER HR DETAILS</h1></b>
	<span>Please Enter Valid HR Details</span>
	</div>
	<div style="width:100%; padding-left:40%;float:center;text-align:left;">
	<label for="company"></label>
	COMPANIES :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="company" name="company" /><br><br>
	<label for="hr_name"></label>
	HR Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_name" name="hr_name" > <br><br>
	<label for="hr_email_id"></label>
	Email Id :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_email_id" name="hr_email_id" > <br><br> 
	<label for="hr_phone_no"></label>
	Phone Number :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_phone_no" name="hr_phone_no" > <br><br>
	<label for="source"></label>
	Source:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="source" name="source"> <br><br>
	Student Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="s_id" name="s_id"> <br><br>
	<b><input type="submit" name="submit" class="submit" value="ADD HR"></b> <br>
	</div>
	 <input type="hidden" name="comvalue" id="comvalue"/> 
	<p ><?php  echo $table; ?></p>
</form>


</body>
</html>