<?php
session_start();
?>
<html>
<head>

	<link rel="shortcut icon" href="assets/images/logoEdit.png">
	
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<link rel="stylesheet" href="assets/stylesheets/contact.css">
<title> About Us </title>
</head>
<body>
<p align="center" style="color:#000066; font-size:60px; padding-bottom:5px; margin-bottom:0;margin-top:1px"><img style="margin-top: 20px;margin-left: 35px;" src="assets/images/logoEdit.png" align="left"></img>
	<b>PES</b><span style="color:red; font-size:60px;"> UNIVERSITY</span></p>
	<ul id="nav" style="align:center;margin: 0px;margin-left: 200px;">
		<li><a href="home.php">HOME</a></li>
		<li><a href="event.php">EVENTS</a></li>
		<li><a onclick="myFunction1()" class="dropbtn" id ='htl'>HOSTEL</a>
			 <div class="dropdown-content" id="myDropdown">
				<a href="mess_coupons_reg.php">MESS COUPONS REGISTRATION</a>
				<a href="complaints.php">COMPLAINTS</a>
			</div>
				</li>
				<li><a href="buying.php">CAMPUS MART</a></li>
				<li><a href="contact_us.html">ABOUT US</a></li>
	</ul>

    <div id="hi" class="myButton" style = 'display:none'>
      <p> <?php if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
      <button value ="Logout"><a href="logout.php">Logout</a></button>
    </div>



<br/><br/><br/><br/>
<h1 align=  'center'>About Us</h1>
<h3>Who are we? </h3>
<div id = 'sf'>
We are students at PES University pursuing our B-tech.<br/>
We are pursuing Computer Science at PES University<br/>
</div>

<div id = 'vivek'><div><img src="assets/images/IMG_2137.jpg" style="float: left;max-width:80%;max-height:80%;"><h2 style="text-align:center;">Vivek</h2>
</div>From Varanasi</div>
 <div id = 'yash'><div><img src="asa.jpg" style="float: left;"><h2 style="text-align:center;">Yash</h2>
</div></div>
<div id = 'vedanth'><div><img src="asa.jpg" style="float: left;"><h2 style="text-align:center;">Vedant</h2>
</div></div>
</div>  
  <footer class="footer">
      © Copyright 2016, All Rights Reserved
    </footer>

</body>
<script src="mainjs.js"></script>
<script type="text/javascript">
  function myFunction1() 
  {
    document.getElementById("myDropdown").classList.toggle("show");
  }
 
  var b = "<?php echo isset($_SESSION['usn']) ?>";
  var a ="<?php echo $_SESSION['hostel'] ?>";
  
  document.getElementById("htl").style.display = "none";
  if(a !='')
    document.getElementById("hi").style.display = "block";
  if( a=='no')
    document.getElementById("htl").style.display = "none";  
  if(a == 'yes')
    document.getElementById("htl").style.display = "block";
</script>
</html>