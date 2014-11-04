<html>
<head>
	<script src="extensions/export/bootstrap-table-export.js"></script>
	<style type="text/css">
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
	</style>
	<title></title>
</head>
<body style="">
<?php
	
	if(!isset($_GET['user_name']))
	{
		die();
	}

		$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
		if (mysqli_connect_errno()) {
			echo "connection failed".mysqli_connect_errno();
		}

		$sql="SELECT *
				FROM company
				LEFT OUTER JOIN hr ON company.c_name = hr.company_name 
				LEFT OUTER JOIN response ON hr.company_name = response.com_name
				LEFT OUTER JOIN student ON student.roll_no = response.stud_id ORDER BY r_time ASC ";
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
			<th>Time of COMPANY Uploaded</th>
			<th>HR NAME</th>
			<th>Time of HR Uploaded</th>
			<th>Status</th>
			<th>Response</th>
			<th>Time of Response</th>
			<th>Student</th>
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
				
				$table=$table."<tr><td>".$row['c_name']."</td><td>".$row['c_time']."</td><td>". $row['hr_name'] ."</td><td>".$row['hr_time'] ."</td><td>". $status ."</td><td>". $row['response'] ."</td><td>". $row['r_time'] ."</td><td>". $row['name'] ."</td></tr>";
			}
			$table=$table."</table>";
		}
		echo $table;

?>
	
</body>
</html>