<?php
	session_start();
	//session_destroy();
	$connect =  mysqli_connect("localhost","root","","college");
	//$time = NOW();
	//echo "$time";
	if(isset($_POST['regis']))
	{
		$sql = "INSERT INTO complain_box (Mobile,Block,Room,Choice,Description,Day) VALUES ('$_POST[contact]','$_POST[block]','$_POST[room]','$_POST[choice]','$_POST[complian]',NOW())";
		/*if($connect->query($sql))
			echo "hi";
		else
			echo "bye";
		*/
			$_SESSION['register'] = 1;
			$connect->query($sql);
			//$sql = "SELECT * FROM complan_box ORDER BY Choice ASC";
			//mysqli_query("$connect",$sql);
	}
//s	mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/stylesheets/complain.css">
<link rel="shortcut icon" href="assets/images/logoEdit.png">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body>
		<p align="center" style="color:#000066; font-size:60px; padding-bottom:5px; margin-bottom:0;margin-top:1px"><img style="margin-top: 20px;margin-left: 35px;" src="assets/images/logoEdit.png" align="left"></img>
	<b>PES</b><span style="color:red; font-size:60px;"> UNIVERSITY</span></p>
	<ul id="nav" style="align:center;margin: 0px;margin-left: 200px;">
		<li><a href="home.php">HOME</a></li>
		<li><a href="event.php">EVENTS</a></li>
		<li><a onclick="myFunction1()" class="dropbtn" id ="htl">HOSTEL</a>
			 <div class="dropdown-content" id="myDropdown">
				<a href="mess_coupons_reg.php">MESS COUPONS REGISTRATION</a>
				<a href="complaints.php">COMPLAINTS</a>
			</div>
				</li>
				<li><a href="buying.php">CAMPUS MART</a></li>
				<li><a href="contact_us.php">ABOUT US</a></li>
	</ul>  
<!--	<div>
		<div id="hi" class="myButton">
			<p> <?php// if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
			<a href="logout.php">Logout</a>
		</div>
		<div id = 'butt' class="myButton">
			<button onclick ="foo()"><?php// echo 'click here for login/signup';?> </button> 
		</div>

	</div>
-->
		<div id="hi" class="myButton">
			<p> <?php if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
			<button value ="Logout"><a href="logout.php">Logout</a></button>
		</div>
	<br>
	<br>

	<div class="mess" style="height:600px;">
		<p><h1 style="text-decoration:underline;color:red;"><span style="color:#000066;">COMPLAIN BOX</span></h1></p>
		<br/>
	<div>
		<form action="" method="post">
			<b>Name</b><br/><br/><input type="text" name="name"placeholder="Enter your name" class="common" maxlength="30"><br/><br/>
			<b>Mobile No.</b><br/><br/>
			<input type="text" value="+91" readonly="readonly" style="width:25px;">
			<input type="text" name="contact"placeholder="Enter Your Mobile Number" class="common" maxlength="10"><br/><br/>
	
			<b>ROOM.NO:</b><br/><br/> 
			<select name="block" class="common" placeholder="select your block" required="required">
				<option value="">Please Choose...</option>
				<option value="NB">NB</option>
				<option value="MESS">MESS</option>
				<option value="MM">MM</option>
				<option ptvalue="NBX">NBX</option>
				<option value="IT">IT</option>
				<option value="IH">IH</option>
			</select>
			&nbsp &nbsp<input type="text" name="room" maxlength="3" placeholder="enter your room no." class="common"><br/><br/><br/>

			<select name="choice" class="inputBox" required="required">
				<option value="">Select your complaint type</option>
				<option value="plumber">Plumber</option>
				<option value="Electrician">Electrician</option>
				<option value="House Keeping">House Keeping</option>
				<option value="Carpenter">Carpenter</option>
			</select>
			</div><br/>

			<textarea name="complian" cols="30" rows="6" required="required" placeholder="Enter your complain" style="color:white;background-color: #006;margin-left: 25px;"></textarea><br/>
			<button type="submit" value="submit" name = "regis">Submit</button>
	</div>
		</form>
	</div>
<script type="text/javascript">
	function myFunction1() 
	{
    document.getElementById("myDropdown").classList.toggle("show");
	}
	var a = "<?php echo isset($_SESSION['register']); ?>";
	if(a == true)
		alert("Your complain is registered");
</script>
<script src = 'mainjs.js'></script>
 <footer class="footer">
      © Copyright 2016, All Rights Reserved
    </footer>

</body>
</html>