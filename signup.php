<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "yaystyle.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Maple Inn</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
@import url(https://fonts.googleapis.com/css?family=Raleway+Dots);
@import url(https://fonts.googleapis.com/css?family=Advent+Pro:400,200,700);
@import url(http://weloveiconfonts.com/api/?family=entypo);
/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}
section #services {
  float: right;
  margin-right: 310px;
  margin-bottom: 20px;
  text-align: center;
  transform: translatez(0);
}
section #services li {
  width: 50px;
  height: 12px;
  display: inline-block;
  margin: 0px;
  list-style: none;
}
section #services li div {
  width: 50px;
  height: 50px;
  color: #2c3e50;
  font-size: 2.0em;
  text-align: center;
  line-height: 50px;
  background-color: #ecf0f1;
  transition: all 0.5s ease;
}
section #services li div:hover {
  transform: rotate(360deg);
  border-radius: 70px;
}
section #services li a:hover {
  text-decoration: none;
}
.form1 {
	margin-left: 60px;
	border: 2px;
	border-color: black;
}
</style>
</head>
<body>
	<h1 style="text-align:center; color:#ecf0f1; font-style:italic; background-color:#e67e22; height:50px; margin:0px;">REGISTRATION</h1> 
	
<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	}
?>

<br><br><br>

<?php
	if(isset($_SESSION['id'])) {
		echo "You are already logged in!";
	} else {
		echo "<div class='form1'><form action='http://localhost/dist/Hotel/includes/signup.inc.php' method='POST'>
			<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
			<div class='col-sm-4'>
			<input type='text' name='first' placeholder='Firstname'>
			</div>
			</div><br>
			<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
			<div class='col-sm-4'>
			<input type='text' name='last' placeholder='Lastname'>
			</div>
			</div><br>
			<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
			<div class='col-sm-4'>
			<input type='text' name='uid' placeholder='Username'>
			</div>
			</div><br>
			<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
			<div class='col-sm-4'>
			<input type='password' name='pwd' placeholder='Password'>
			</div>
			</div><br>
			<button class='btn btn-primary' type='submit'>SIGN UP</button>
			</form></div>" ;
	}
?>
<br><br><br>

	<div id="footer" class="container-fluid">
 <div class="row">
    <div class="foot">
	  <h6 class="headfoot" style="font-size:25px; color:#f1c40f;"><q><em>PLACE WHERE YOU FEEL LIKE HOME</em></q></h6>
	  <div class="bottom">
	  <h4 style="color: white;">Sign Up</h4>
	  <p style="color: white;">Subscribe to our mailing list to receive updates and promotional offers.</p> 
	  <input type="email" placeholder="Enter email address">
	  <button class="btn btn-default"><strong>GO</strong></button>
	  </div>
	  <p><h5 style="color: white;"><strong>CONTACT</strong></h5></p>
	<p style="color: white;"><b>  Tel: +91 11 4766 8888<br>
Fax: +91 11 4383 7777<br>
Reservations Hotline: 1800 103 9977<br></p>
<a href="mailto:paridhigupta1996.pg@gmail.com">Email a query to naturelapviewhotel@gmail.com</a>
	  <section>
		<ul id='services'>
		<p style="color: white; font-size: 18px;">Find Us On</p>
		<li>
		 <a href="https://www.facebook.com/login/"><div class='entypo-facebook'></div></a>
		</li>
		<li>
		 <a href="https://twitter.com/"><div class='entypo-twitter'></div></a>
		</li>
		<li>
		 <a href="https://plus.google.com/discover"><div class='entypo-gplus'></div></a>
		</li>
		</ul>
	  </section>
	  <br><br>
		<p class="copyright">Copyright © 2017 <a href="http://zine.bg/" target="_blank"></a>
			<span class="second-line">All Rights Reserved.</span>
		</p>
		</div>
      </div> 
</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="javascript.js"></script>
	
</body>
</html>