<html>
<head>
	<?php  
		$j=0;
		$k=0;
		$companies=array();
		$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno()) {
			echo "connection failed".mysqli_connect_errno();
		}
		if(isset($_POST['submit']))
		{
			$hr_name=$_POST['hr_name'];
			$hr_email_id=$_POST['hr_email_id'];
			$hr_phone_no=$_POST['hr_phone_no'];
			$response=$_POST['response'];

			if($_POST['submit']=="ADD PLACED STUDENTS")
			{
				$company=$_POST['company'];
				$len = count($_POST['s_id']);
				$student=$_POST['s_id'][0];
				$sql="INSERT INTO placed (comp_name,st_id) VALUES ('$company','$student')";
					for ($i=1; $i < $len; $i++)
					{
						if($_POST['s_id'][$i]!==""){

							$student=$_POST['s_id'][$i];
							$sql=$sql." ,('$company','$student') ";
							
						}
					}
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo mysqli_error($con);
				}
				else
				{
				
				$mysqldate= date("Y-m-d H:i:s",time()+16200);
				
				$today=getdate();
				$year = $today['year'];
				$month=$today['mon'];
				
				if($month<6)
				$batch =($year-1)."-".$year;
				else
				$batch =($year)."-".($year+1);
				
				$sql="INSERT INTO response (com_name, h_name, response,status,stud_id,r_time,year) 
				VALUES('$company','$hr_name','$response' ,'3','ADMIN','$mysqldate','$batch')";
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo mysqli_error($con);
				}
				else
				{
					$mysqldate= date("Y-m-d H:i:s",time()+16200);
				
					$sql="INSERT INTO hr (company_name, hr_name, hr_email_id, hr_phone_no, source,s_id,hr_time,c_v) 
					VALUES('$company','$hr_name','$hr_email_id','$hr_phone_no','VISITED CAMPUS','ADMIN','$mysqldate','1')";
					$result = mysqli_query($con,$sql);
					if(!$result)
					{
						echo mysqli_error($con);
					}
				}
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
			$j=0;
			while($row=mysqli_fetch_array($result))
			{
				$companies[$j]=$row['c_name'];
				$j++;
			}
		}
				$today=getdate();
				$year = $today['year'];
				$month=$today['mon'];
				
				if($month<6)
				$batch =($year-1)."-".$year;
				else
				$batch =($year)."-".($year+1);
						
		$sql="SELECT name,roll_no FROM student WHERE batch='$batch'";
		$result=mysqli_query($con,$sql);

		if(!$result)
		{
			echo mysqli_error($con);
		}
		else
		{
			$k=0;
			while($row=mysqli_fetch_array($result))
			{
				$students[$k]=$row['name'];
				$student_id[$k]=$row['roll_no'];
				$k++;
			}
		}
		$sql="SELECT * FROM placed INNER JOIN student WHERE student.roll_no=placed.st_id AND student.batch='$batch'";
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
			<th>Placed Students</th>
			</tr>";
			while($row=mysqli_fetch_array($result))
			{
				$table=$table."<tr><td>".$row['comp_name']."</td><td>". $row['name'] ."</td></tr>";
			}
			$table=$table."</table>";
		}


	?>
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

	<title></title>
	
	<script src="js/jquery.js"></script>
	<script src="js/validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/label.css">
	<script>var $jq1 = jQuery.noConflict();</script>
	

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
					nourl: true,
					minlength:2
					},

					hr_name: {
					required: true,
					nourl: true,
					minlength:2
					},
					hr_email_id: {
					required: true,
					nourl: true,
					email: true
					},

					hr_phone_no: {
					required: true,
					nourl: true,
					minlength: 10,
					maxlength: 11,
					digits: true
					},
					response: {
					required: true
					}
					
					
				},
				messages: {
					company: "Enter the Company Name",
					hr_name: "Enter the HR Name",
					response: "Enter the response of the HR",
					hr_email_id: "Enter valid email id",
					hr_phone_no: "Enter valid Phone No"
					
				}
		  });
	});	

	</script>
	

	<script >

		$(function() {
		var companies =<?php echo json_encode($companies); ?>;
		var j=<?php echo $j; ?>;
		var hrs=[];
		 
		for(var i=0;i<j;i++)
		{
			var item={ 
					value: companies[i],
					label: companies[i]
				}
				hrs.push(item);
		}
		$( "#company" ).autocomplete({
		minLength: 0,
		source: hrs,
		focus: function( event, ui ) {
		$( "#company" ).val( ui.item.label );
		return false;
		},
		select: function( event, ui ) {
		$( "#company" ).val( ui.item.label );
		 
		return false;
		}
		})

		var students =<?php echo json_encode($students); ?>;
		var student_id =<?php echo json_encode($student_id); ?>;
		var k=<?php echo $k; ?>;
		var hrs=[];
		 
		for(var i=0;i<k;i++)
		{
			var item={ 
					value: student_id[i],
					label: students[i]
				}
				hrs.push(item);
		}
		var selector = 'input.student_field';
		$(document).on('keydown.autocomplete', selector, function() {
		    $(this).autocomplete({
		minLength: 0,
		source: hrs,
		focus: function( event, ui ) {
		$( this ).val( ui.item.label );
		return false;
		},
		select: function( event, ui ) {
		$( this ).val( ui.item.value );
		return false;
		}
		});
		    });
		
		
		});
	</script>
</head>
<body>
<form action="placed.php" method="post" class="login-form" style="float:center;text-align:center;">
	<div class="header">
	<b><h1>ENTER DETAILS OF THE COMPANY VISITED</h1></b>
	<span>Please be sure of the Information entering</span>
	</div>
	<div style="width:100%; padding-left:40%;float:center;text-align:left;">
	COMPANY : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="company" name="company" /> <p id="companyp"></p>
	HR Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_name" name="hr_name" > <p id="hr_namep"></p>
	Email Id :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_email_id" name="hr_email_id" > <p id="hr_email_idp"></p>
	Phone Number :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="hr_phone_no" name="hr_phone_no" > <p id="hr_phone_nop"></p>
	Response :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="response" name="response"> <p id="responsep"></p>
	<div id="students" >
	<div id="student" >
	Student Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="s_id" name="s_id[]" class="student_field"> <p id="s_idp"></p>
	</div>
	</div>
	</div>
	<a href="javascript:add_Student_field()" style="font-size:15px;padding-left:20%" class="submit">Add Another Student </a><br>
	<input type="submit" name="submit" value="ADD PLACED STUDENTS" class="submit"> <br>
	
	
	<p id="simply"><?php  echo $table; ?></p>
</form>

<script type="text/javascript">

function add_Student_field()
{
	
	var inp = document.createElement('div');
	// Get template data
	inp.innerHTML = document.getElementById('student').innerHTML;
	// append to our form, so that template data
	//become part of form
	document.getElementById('students').appendChild(inp);
}

</script>
</body>
</html>