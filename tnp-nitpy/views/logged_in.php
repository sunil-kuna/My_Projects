<?php include('_header.php'); ?>
<div style="float:right;height:10%"> Welcome 
	<?php
// 002E74if you need the user's information, just put them into the $_SESSION variable and output them here
	$isAdmin=false;
	if($login->isAdmin($_SESSION['user_name'])==true)
	{
		$isAdmin=true;
		$name=$_SESSION['user_name'];
	}
	else
	{
	$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
	  if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$result = mysqli_query($con,"SELECT * FROM student WHERE roll_no='{$_SESSION['user_name']}' ");
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	}
echo  $name ;
?>&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>&nbsp&nbsp
    <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
</div>


<?php 
include('views/banner.php'); 
if($isAdmin==true)
include("views/adminhome.php");
else
include('views/home.php'); ?>
	
<?php include('_footer.php'); ?>
 