<html>
<head>
	<script src="frames/js/jquery.min.js"></script>
	<script src="frames/js/hover.js"></script>
	<link rel="stylesheet" type="text/css" href="frames/css/bootstrap.min.css">
	<script src="frames/js/bootstrap.min.js"></script>

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
	 		frame.src="frames/status.php?user_name=<?php echo $_SESSION['user_name'];?>";
	 		frame.reload();
	}
	else if (argument==1)
	{
		 frame.src = "frames/addCompany.php?user_name=<?php echo $_SESSION['user_name'];?>";
		 frame.reload();
	}
	else if (argument==2)
	{
		 frame.src = "frames/addHR.php?user_name=<?php echo $_SESSION['user_name'];?>";
		 frame.reload();
	}
	else if (argument==3)
	{
		 frame.src = "frames/enterResponse.php?user_name=<?php echo $_SESSION['user_name'];?>";
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
<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#"> </a>
   </div>
   <div>
      <ul class="nav navbar-nav">
         <li><a href="javascript:loadframe(0)" >STATUS</a></li>
         <li><a href="javascript:loadframe(1)">ADD NEW COMPANY</a></li>
         <li><a href="javascript:loadframe(2)">ENTER HR DETAILS</a></li>
         <li><a href="javascript:loadframe(3)">ENTER RESPONSE OF HR</a></li>
         
      </ul>
   </div>
</nav>


	<iframe id="frame" frameborder="0" scrolling="no"src="frames/status.php?user_name=<?php echo $_SESSION['user_name'];?>" width="100%" height="1" onLoad="calcHeight()"></iframe>

</body>
</html>