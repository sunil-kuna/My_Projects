<html>
<head>
	<?php  
		
	if(!isset($_GET['user_name']) && !isset($_POST['submit']))
	{
		die();
	}

		$j=0;
		$companies=array();
		$hrs=array();
		$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno()) 
		{
			echo "connection failed".mysqli_connect_errno();
		}
		if(isset($_GET['user_name']))
		{
			$s_id=$_GET['user_name'];
		}

		if(isset($_POST['submit']))
		{
			if($_POST['submit']=="ADD RESPONSE")
			{
				$company=$_POST['company'];
				$hr_name=$_POST['hr_name'];
				
				if($_POST['status']=="Declined")
					$status=0;	
				else if($_POST['status']=="Contact Later")
					$status=1;
				else if($_POST['status']=="Accepted")
					$status=2;

				$response=$_POST['response'];
				$s_id=$_POST['s_id'];
				$mysqldate= date("Y-m-d H:i:s",time()+16200);
				
				$today=getdate();
				$year = $today['year'];
				$month=$today['mon'];
				
				if($month<6)
				$batch =($year-1)."-".$year;
				else
				$batch =($year)."-".($year+1);
				
				$sql="INSERT INTO response (com_name, h_name, response,status,stud_id,r_time,year) 
				VALUES('$company','$hr_name','$response' ,'$status','$s_id','$mysqldate','$batch')";
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo "NO RESPONSE ADDED HR NEEDS TO BE REGISTERED FIRST";
				}
			}
		}
		
		$sql="SELECT * FROM response INNER JOIN student RIGHT OUTER JOIN hr ON student.roll_no=response.stud_id AND response.h_name=hr.hr_name ORDER BY hr_time DESC,r_time DESC LIMIT 30";
		$result=mysqli_query($con,$sql);

		if(!$result)
		{
			echo mysqli_error($con);
		}
		else
		{ 
			$table="<table border='1'>
			<tr>
			<th>HR NAME</th>
			<th>Company</th>
			<th>Status</th>
			<th>Response</th>
			<th>Time of Response</th>
			<th>Student</th>
			<th>Time of HR Uploaded</th>
			</tr>";
			while($row=mysqli_fetch_array($result))
			{
				$status="";
				if($row['response']!="")
				{	
					if($row['status']==0)
						$status="Declined";
					else if($row['status']==1)
						$status="Contact Later";
					else if($row['status']==2)
						$status="Accepted";
					else if($row['status']==3)
						$status="Visited";
				}
				$table=$table."<tr><td>".$row['hr_name']."</td><td>". $row['company_name'] ."</td><td>". $status ."</td><td>". $row['response'] ."</td><td>". $row['r_time'] ."</td><td>". $row['name'] ."</td><td>".$row['hr_time']."</td></tr>";
			}
			$table=$table."</table>";
		}

		$sql="SELECT * FROM hr WHERE 1";
		$result=mysqli_query($con,$sql);

		if(!$result)
		{
			echo mysqli_error($con);
		}
		else
		{

			while($row=mysqli_fetch_array($result))
			{
				$companies[$j]=$row['company_name'];
				$hrs[$j]=$row['hr_name'];
				$hr_email_id[$j]=$row['hr_email_id'];
				$hr_phone_no[$j]=$row['hr_phone_no'];
				$j++;
			}
		}

	?>
	<title></title>
	<meta charset="utf-8">
	<title>autocomplete demo</title>
	<link rel="stylesheet" href="css/jquery-ui.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/label.css">
	<script>var $jq1 = jQuery.noConflict();</script>
	
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
					hr_name: {
					required: true,
					nourl: true
					},
					response: {
					required: true,
					minlength: 5
					},
					status: {
					required: true
					}
				},
				messages: {
					hr_name: "Enter the HR Name",
					response: "Enter the response of the HR",
					status: "Status is must"
				}
		  });
});	

	</script>
	
	<script >
		$(function() {
		var companies =<?php echo json_encode($companies); ?>;
		var hr_name =<?php echo json_encode($hrs); ?>;
		var hr_email_id =<?php echo json_encode($hr_email_id); ?>;
		var hr_phone_no =<?php echo json_encode($hr_phone_no); ?>;
		var j=<?php echo $j; ?>;
		 var hrs=[];
		 
		for(var i=0;i<j;i++)
		{
			var item={ 
					value: companies[i],
					label: hr_name[i],
					desc: hr_email_id[i],
					icon: hr_phone_no[i]
				}
				hrs.push(item);
		}
		 
		$( "#hr_name" ).autocomplete({
		minLength: 0,
		source: hrs,
		focus: function( event, ui ) {
		$( "#hr_name" ).val( ui.item.label );
		return false;
		},
		select: function( event, ui ) {
		$( "#companyp" ).html( ui.item.value );
		$( "#company" ).val( ui.item.value );
		$( "#hr_email_idp" ).html( ui.item.desc );
		$( "#hr_email_id" ).val( ui.item.desc );
		$( "#hr_phone_nop" ).html( ui.item.icon );
		$( "#hr_phone_no" ).val( ui.item.icon );
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
<form style="float:center;text-align:center;" class="login-form"action="enterResponse.php" method="post" >
	
	<div class="header">
	<b><h1>ENTER RESPONSE OF THE HR</h1></b>
	<span>Please be sure of the Information entering</span>
	</div>
	<div style="padding-left:40%;text-align:left;">
	HR Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_name" name="hr_name" > <p id="hr_namep"></p>
	COMPANY :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="hidden" id="company" name="company" >  <span id="companyp" ></span><br>
	Email Id :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="hidden" id="hr_email_id" name="hr_email_id" ><span id="hr_email_idp" ></span><br>
	Phone Number :&nbsp&nbsp<input type="hidden" id="hr_phone_no" name="hr_phone_no" > <span id="hr_phone_nop" ></span><br>
	Response :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="response" name="response"> <p id="responsep"></p>
	Status : <br>
	<div style="text-align:left;padding-left:5%">
	Declined:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="status" name="status" value="Declined"><br>
	Contact Later:&nbsp&nbsp<input type="radio" id="status" name="status" value="Contact Later"><br>
	Accepted&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="status" name="status" value="Accepted"><br>
	</div>
	<input type="hidden" id="s_id" name="s_id" value="<?php echo $s_id ?>"> <p id="s_idp"></p>
	<input class="submit" type="submit" name="submit" value="ADD RESPONSE"> <br>
	</div>
	<p id="simply"><?php  echo $table; ?></p>
</form>


</body>
</html>