<html>
<head>
	<link rel="stylesheet" href="css/main.css"></link>


<title>
TnP Cell - NIT Py
</title>
<style type="text/css">
p.navigation
{
	float:left;
	padding:15px;
}
p.navigation:hover
{
	background-color: #002E74;
	color: #fff; 
}
</style>
<script type="text/javascript">
function loadframe (argument) {

	var frame=document.getElementById('frame');
	if(argument==0)
	{
	 		frame.src="frames/status.php";
	 		frame.reload();
	}
	else if (argument==1)
	{
		 frame.src = "frames/addCompany.php";
		 frame.reload();
	}
	else if (argument==2)
	{
		 frame.src = "frames/addHR.php";
		 frame.reload();
	}
	else if (argument==3)
	{
		 frame.src = "frames/enterResponse.php";
		 frame.reload();
	}
	var the_height=
		document.getElementById('frame').contentWindow.
		document.body.scrollHeight;

		document.getElementById('frame').height=
		the_height;
	

}
function calcHeight()
{
  //find the height of the internal page
  document.getElementById('frame').height=1;
   
  var the_height=
    document.getElementById('frame').contentWindow.
      document.body.scrollHeight;

  document.getElementById('frame').height=
      the_height;
}

</script>

</head>
<body>
<section id="header"  style="padding-bottom:50px;width:100%" >

	<div id="name" style="width:100%" >
		<img src="images/logo.png" width="8%" height="16%"style="float:left;padding:25px"/>
		<font color="#002E74" size="6" face="verdana" style="float:left; padding-top:2%">
			<h4>TRAINING AND PLACEMENT CELL NIT PUDUCHERRY</h4>

		</font>

	</div>

</section>
<section id="nav" width="100%" style="text-align : center">
	
	<font color="#002E74" size="2" face="verdana">
	<b>
	<p class="navigation" style="width:16%;padding-left:30px" onclick="loadframe(0)">
		STATUS
	</p>
	<p  class="navigation" style="width:20%" onclick="loadframe(1)">
		ADD NEW COMPANY
	</p>
	<p  class="navigation" style="width:25%" onclick="loadframe(2)">
		ENTER HR DETAILS
	</p>
	<p  class="navigation" style="width:25%"  onclick="loadframe(3)">
		ENTER RESPONSE OF HR
	</p>
	</b>
	</font>

</section>
	<iframe id="frame" frameborder="0" scrolling="no"src="frames/status.php" width="100%" height="1" onLoad="calcHeight()"></iframe>

</body>
</html>