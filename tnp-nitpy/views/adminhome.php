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
	else if (argument==4)
	{
		 frame.src = "frames/addStudent.php?user_name=<?php echo $_SESSION['user_name'];?>";
		 frame.reload();
	}
	else if (argument==5)
	{
		 frame.src = "frames/selectEditStudent.php?user_name=<?php echo $_SESSION['user_name'];?>";
		 frame.reload();
	}
	else if (argument==6)
	{
		 frame.src = "frames/placed.php?user_name=<?php echo $_SESSION['user_name'];?>";
		 frame.reload();
	}
	else if (argument==7)
	{
		 frame.src = "frames/addAdmin.php?user_name=<?php echo $_SESSION['user_name'];?>";
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
     1.1* the_height;
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
         <li><a href="javascript:loadframe(4)">ADD STUDENT</a></li>
         <li><a href="javascript:loadframe(5)">EDIT STUDENT DETAILS</a></li>
         		<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
               MORE
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:loadframe(6)">ENTER PLACED DETAILS</a></li>
         		<li><a href="javascript:loadframe(7)">REGISTER ADMIN</a></li>
         		
               <!--<li><a href="#">jmeter</a></li>
               <li><a href="#">EJB</a></li>
               <li><a href="#">Jasper Report</a></li>
               <li class="divider"> </li>
               <li><a href="#">Separated link</a></li>
               <li class="divider"> </li>
               <li><a href="#">One more separated link</a></li> -->
            </ul>
         </li> 
      </ul>
   </div>
</nav>
	<iframe id="frame" frameborder="0" scrolling="no"src="frames/status.php?user_name=<?php echo $_SESSION['user_name'];?>" width="100%" height="1" onLoad="calcHeight()"></iframe>

</body>
</html>