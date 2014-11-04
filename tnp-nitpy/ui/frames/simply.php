<html>
<head>
	<title></title>
	<script src="Admin/js/jquery-1.10.2.js"></script>
	<script src="Admin/js/validation.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
	$(".form.d").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					phone: {
					required: true,
					digits:true,
					maxlength:11,
					minlength:10
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					phone: "Valid Phone No Required",
					comments: "Required Field + No URL's"
				}
		  });
});	

	</script>
	<style type="text/css">
h1, h2 {
text-align:center;
line-height:20px;
}
/* ----------------- Form ----------------- */
.form {
width:310px;
margin:50px auto;
border:1px solid #333;
padding:15px 70px 45px;
position:relative;
background:#C8E8FB;
}
* html .form {
padding-top:45px;
}
*+html .form {
padding-top:45px;
}
.form h3 {
position:absolute;
top:-11px;
left:35px;
padding:0 8px;
background:#fff;
margin:0;
border:1px solid #333;
}
.form input {
display:block;
padding:6px 4px;
width:300px;
outline:0;
border:1px solid #333;
background:#fff;
}
.form label {
display:block;
margin:30px 0 4px;
}
.form textarea {
display:block;
width:308px;
height:100px;
outline:0;
border:1px solid #333;
overflow:auto;
}
.form input.submit {
width:100px;
cursor:pointer;
margin:40px 0 0;
}

.form.d p {
position:relative;
margin:0;
width:310px; /* IE6 Fix */
}
.form.d label.error {
position:absolute;
top:-48px;
right:-60px;
margin:0;
background:red;
opacity:.7;
filter:alpha(opacity=70);
color:#fff;
-moz-border-radius:7px;
-webkit-border-radius:7px;
border-radius:7px;
-moz-box-shadow:0 0 7px #000;
-webkit-box-shadow:0 0 7px #000;
box-shadow:0 0 7px #000;
border:2px solid #fff;
padding:5px 10px;
}
.form.d label.error:before {
content:url(../images/triangle.png);
position:absolute;
bottom:-36px;
height:36px;
}
	</style>
</head>
<body>
<form class="form d" method="post" action="">
	<h3>Form D</h3>
	<label for="name">Name</label>
	<p>
		<input id="name" name="name" type="text">
	</p>
	<label for="email">Email</label>
	<p>
		<input id="email" name="email" type="text">
	</p>
	<label for="phone">Phone</label>
	<p>
		<input id="phone" name="phone" type="text">
	</p>
	<label for="comments">Comments</label>
	<p>
		<textarea id="comments" name="comments" rows="3" cols="35"></textarea>
	</p>
	<input class="submit" value="Submit" type="submit">
</form>



</body>
</html>