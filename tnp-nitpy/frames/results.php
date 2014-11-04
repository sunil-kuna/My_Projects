<?php
$filename="ADMIN";
$csv_filename = $filename."_".date("Y-m-d_H-i",time()).".csv";
$con=mysqli_connect("localhost","TNPAdmin","TNPadmin","tnp");
if (mysqli_connect_errno()) {
	echo "connection failed".mysqli_connect_errno();
}

header("Content-Type: application/vnd.ms-excel");


 $result = mysqli_query($con,"SELECT * FROM users WHERE admin_student=1");
if (!$result)
  {
  echo mysqli_error($con);
  }
  else
  {
  $table="Username,Email Id\n";

	while($row = mysqli_fetch_array($result))
	  {  $table=$table. $row['user_name'] . ",";
	  $table=$table . $row['user_email'] ;
	   $table=$table."\n";
	  }
  }




$fileContent=str_replace("\n\n","\n",$table);
    echo $fileContent;

header("content-disposition: attachment;filename=$csv_filename"); ?>