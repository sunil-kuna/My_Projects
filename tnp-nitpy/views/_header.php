<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php-login-advanced</title>
    <style type="text/css">
        /* just for the demo */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 10px;
        }
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
        }
    </style>
    <link rel="stylesheet" href="css/main.css"></link>


<title>
TnP Cell - NIT Py
</title>

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

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
           // echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
