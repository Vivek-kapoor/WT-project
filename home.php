<?php
				session_start();
				//session_destroy();
				//var_dump($_SESSION);
				$connect =  mysqli_connect("localhost","root","","college");
					if(!isset($_SESSION['message']))
						$_SESSION['message']='';
					if(!isset($_SESSION['hostel']))
						$_SESSION['hostel'] ='';
					if(isset($_POST['signin']))
					{	
						/*$sql = "SELECT count(*) FROM user WHERE usn = '$_POST[usn]'";
						$result = mysqli_query($connect,$sql);
						$vari = mysqli_fetch_array($result);
						$vi = $vari['usn'];
						if($vi != 0)*/							
						$sql = "SELECT * FROM user WHERE usn = '$_POST[usn]'";
						$result = mysqli_query($connect,$sql);
						$vari = mysqli_fetch_array($result);
						$vi = $vari[0];
						if($vi != 0)
							$_SESSION['message'] = "The USN is already registerd";
						else if($_POST['pass1'] == $_POST['pass2'])
						{
							//$pass = md5($_POST['pass1']);
							$sql = "INSERT INTO user (first,last,year,branch,usn,hostel,password) VALUES ('$_POST[first]','$_POST[last]','$_POST[year]','$_POST[branch]','$_POST[usn]','$_POST[hostel]','$_POST[pass1]')";
							mysqli_query($connect,$sql);
							unset($_SESSION["check"]);
							$_SESSION['hostel'] = $_POST['hostel'];
							$_SESSION['usn'] = $_POST['usn'];
							$_SESSION['message'] = "You are logged in";
							header("location:home.php");
						}
						else
						{
							$_SESSION["check"] = 1;
							$_SESSION['message'] = "The two password do not match";
						}
					}		
					else if(isset($_POST['login']))
					{	
						$sql = "SELECT count(*) FROM user WHERE usn = '$_POST[usn]' AND password ='$_POST[pass1]'";
						$sql1="SELECT * FROM user where usn = '$_POST[usn]'";
						
						$result = mysqli_query($connect,$sql);
						$vari = mysqli_fetch_array($result);
						$vi = $vari[0];
						
						$var = mysqli_query($connect,$sql1);
						$var = mysqli_fetch_array($var);
						$v = $var['hostel'];
						
						if($vi == 1 )
						{	echo "rows: ".$rows." "."hostel ".$v; 
							unset($_SESSION["check"]);
							$_SESSION['hostel'] = $v;
							$_SESSION['usn'] = $_POST['usn'];
							$_SESSION['message'] = "login successful";
							header("location:home.php");
						}
						else
						{
							$_SESSION["check"] = 1;
							$_SESSION['message'] = "Username or Password is incorrect";
						}
					}
//				mysqli_close($connect);
?>
<!DOCTYPE html>
<html>

<head>
	
	<link rel="shortcut icon" href="assets/images/logoEdit.png">
	<link rel="stylesheet" href="assets/stylesheets/main.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

</head>

<title>
	Home Page
</title>
<body onload="myFunction()" style="margin:0;">  <!--style="background-image: url('assets/images/pes_globe1.jpg');"-->

	<div id="loader"></div>

	<div style="display:none;" id="myDiv">
	<p align="center" style="color:#000066; font-size:60px; padding-bottom:5px; margin-bottom:0;margin-top:1px"><img style="margin-top: 20px;margin-left: 35px;" src="assets/images/logoEdit.png" align="left"></img>
	<b>PES</b><span style="color:red; font-size:60px;"> UNIVERSITY</span></p>
	<ul id="nav" style="align:center;margin: 0px;margin-left: 200px;">
		<li><a href="home.php">HOME</a></li>
		<li><a href="event.php">EVENTS</a></li>
		<li><a onclick="myFunction1()" class="dropbtn" id="htl">HOSTEL</a>
			 <div class="dropdown-content" id="myDropdown">
				<a href="mess_coupons_reg.php">MESS COUPONS REGISTRATION</a>
				<a href="complaints.php">COMPLAINTS</a>
			</div>
				</li>
				<li><a href="buying.php">CAMPUS MART</a></li>
				<li><a href="contact_us.php">ABOUT US</a></li>
	</ul>
	<div>
		<div id="hi" class="myButton" style = "display: none">
			<p> <?php if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
			<button value ="Logout"><a href="logout.php">Logout</a></button>
		</div>
		<div id = 'butt'>
			<a style="margin-left: 80%;width:auto;position:relative;top:-50px;right: -10px;" onclick ="foo()" class = "myButton">Click here for login/signup</a> 
		</div>
	</div>

	<div style="color: white; margin-top:1.5vh; position: absolute; padding-left: 10px; background-color: #006; height: 43px;margin-top: 0px; line-height: 43px; padding-right: 10px;">
	CIRCULARS:
	</div>

	<div class="marquee">
	<p><b>PLEASE NOTE THAT SECOND YEAR STUDENTS HAVE THEIR REVIEW SCHEDULED ON 8 NOVEMBER 2016</b></p>
	</div>
	
	<br>
	<br>
	
	<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="assets/images/IMG_2137.jpg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/images/IMG_2138.jpg" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/images/img3.jpg" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/images/img4.jpg" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/images/pes_globe.jpg" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>




		<div id="Box" class="modal">
			<button id="mainButL" onclick="login1()">LOGIN</button>
			<button id="mainButS" onclick="signup1()">SIGN UP</button>
			<p id ="error" style = "display:none;color:red;font-weight: 4px;text-align: center;font-size:30px;"></p>

			<span onclick="document.getElementById('Box').style.display='none'" class="close" title="Close Modal">&times;</span>
			<br>
			<br>
			<div id="login" class="modal-content,inputBox">
				<form  action = "" method ="post">
					<br>
					<br>
					<input type="text" name="usn" placeholder="Enter your USN" style=" background-color: #006;border: #000 2px solid;height: 30px;width: 250px;outline: none;padding-left: 10px;font-size: 15px;margin-left: 280px;color: white;"">
					<br>
					<br>
					<input style="margin-left: 280px;" type="password" name="pass1" placeholder="Enter your password"  > 
					<br>
					<br>
					<input style="margin-left: 320px; width: 200px;" type="submit" name="login">
				</form>
			</div>

			<div class="inputBox1" id="signup">
				<form  action = "" method = "post">
					<br>
					<input type="text" placeholder="Enter your first name " name = 'first'>
					<input type ="text" placeholder="Enter your last name " name = 'last'>
					<br>
					<br>

					<select style="margin-left:150px;background-color: #006;" required name = 'year'>
						<option value=""> Select your year</option>1
  						<option value="1year">1st Year</option>
  						<option value="2year">2nd Year</option>
	  					<option value="3year">3rd Year</option>
  						<option value="4year">4th Year</option>
  					</select>
  					<select style="background-color: #006;" required name = 'branch'>
  						<option value=""> Select your branch</option>
  						<option value="CSE">Computer Science Engineering</option>
  						<option value="ECE">Electronics and Communicaton Engineering</option>
  						<option value="EEE">Electronics and Electrical Engineering</option>
  						<option value="ME">Mechanical Engineering</option>
  						<option value="CE">Civil Engineering</option>
  						<option value="BT">Biotechnology</option>
  					</select>
  					<br>
  					<br>
  					<input type="text" placeholder="Enter your USN " name = 'usn'>
  					<select id="hostel_check" style="background-color: #006;" onclick="hiddenform()" name="hostel" required>
  						<option value="">Are you a hostelite?</option>
  						<option value="yes">Yes</option>
  						<option value="no">No</option>
  					</select>
					<br>
					<br>
					<span>
					<select id="hblock" style="margin-left:150px;background-color: #006;display: none;" name="block" required="">
						<option>Select your block</option>
						<option>NB</option>
						<option>MESS</option>
						<option>MM</option>
						<option>NBX</option>
						<option>IT</option>
						<option>IH</option>
					</select>
					</span>
					<span>
					<input id="hblock1" name="Room.No" maxlength="3" style="display: none;" placeholder="Enter your room number">
					</span>
					<br>
					<br>
					<input type="password" name = 'pass1' placeholder="Enter your password">
					<input  type ='password' name = 'pass2' placeholder="Enter your password again">
					<br>
					<br>
					<input type="submit" style="background-color: #006;" name="signin">
				</form>
				<br/>
				<br/>	
			</div>
		</div>	

		</div>
 <footer class="footer">
      © Copyright 2016, All Rights Reserved
    </footer>
    </div>

</body>

<script src="mainjs.js"></script>
<script type="text/javascript">
	var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
	var a ="<?php echo $_SESSION['hostel'] ?>";
	var b ="<?php echo isset($_SESSION['check']) ?>";
	var c ="<?php echo $_SESSION['message'] ?>";
	if(c !='' )
		var f = "<?php echo $_SESSION['message'] ;?>";
	if(a =='')
		document.getElementById("htl").style.display = "none";
	else
	{	
		document.getElementById("butt").style.display = "none";
		document.getElementById("hi").style.display = "block";
		if( a=='no')
			document.getElementById("htl").style.display = "none";	
		if(a == 'yes')
			document.getElementById("htl").style.display = "block";
	}
	if(b == true)
	{
		document.getElementById('error').innerHTML = f;
		document.getElementById("error").style.display = "block";
		foo();
	}
</script>
</html>