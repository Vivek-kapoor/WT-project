<?php
session_start();
$connect =  mysqli_connect("localhost","root","","college") or die('could not connect');
if(!isset($_SESSION['count']))
		$_SESSION['count'] = '';

$sql1 = "SELECT * FROM mess_coupon WHERE first = 'FC'";
$sql2 = "SELECT * FROM mess_coupon WHERE first = 'AR'";
$sql3 = "SELECT * FROM mess_coupon WHERE first = 'HM'";


$res1 = mysqli_query($connect,$sql1);
$res2 = mysqli_query($connect,$sql2);
$res3 = mysqli_query($connect,$sql3);

$result1 = 100- (mysqli_num_rows($res1));
$result2 = 100-(mysqli_num_rows($res2));
$result3 = 100- (mysqli_num_rows($res3));
	
$sql = "SELECT * from mess_coupon where usn = '$_SESSION[usn]'";
$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result))
		$_SESSION['already'] = 'Already registered';
	if(isset($_POST['sub']))	
{	
		$name = $_POST['name'];
		$block =$_POST['block'];
		$room = $_POST['room'];
		$choice1 = $_POST['choice'];
		$sql = "INSERT INTO mess_coupon (name,block,room,first,usn) VALUES ('$name','$block','$room','$choice1','$_SESSION[usn]')";
		mysqli_query($connect,$sql) or die(mysqli_error($connect));
		$_SESSION['flag'] = 1;
}	
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/mess.css">
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
				<li><a href="contact_us.html">ABOUT US</a></li>
	</ul>  

		<div id="hi" class="myButton">
			<p> <?php if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
			<button value ="Logout"><a href="logout.php">Logout</a></button>
		</div>	
	<br>
	<br>
	
		<div class="mess" id = 'coupon'>
			<p><h1 style="text-decoration:underline;color:red;"><span style="color:#000066;">MESS COUPONS</span></h1></p>
			<br/>
		<div>
		<form action="mess_coupons_reg.php" method="POST">
			<b>Name</b><br/><br/><input type="text" name="name"placeholder="Enter your name" class="common" maxlength="30";><br/><br/>
	
			<b>ROOM.NO:</b><br/><br/> 
			<select name="block" class="common" placeholder="select your block">
				<option>Please Choose...</option>
				<option>NB</option>
				<option>MESS</option>
				<option>MM</option>
				<option>NBX</option>
				<option>IT</option>
				<option>IH</option>
			</select>
			&nbsp &nbsp<input type="text" name="room" maxlength="3" placeholder="enter your room no." class="common"><br/><br/><br/>


			<b>Select Your Mess choice</b><br/><br/>
			<div style="float:left;">
			
				<input type="radio" id="Food court" name="choice" value="FC">
				<label for="Food court">Food Court</label><br/>
			
				<input type="radio" id="Aman Rassoi" name="choice" value="AR">
				<label for="Aman Rassoi">Aman Rassoi</label><br/>
			
				<input type="radio" id="Hostel Mess" name="choice" value="HM">
				<label for="Hostel Mess">Hostel Mess</label>
			</div>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
</br></br></br>
			<p id ="value"> <?php echo "FC ".$result1." AM ".$result2." HM ".$result3?> </p>
			</br></br><input type="submit" value="submit" name = "sub">
			
	</div>
		</form>
	</div>
	<script>
/*	var flag1=0;
	var flag2=0;
	var flag3=0;

		function modify(event)
		{
			event.target = event.target || srcElement;
			//alert(event.target.innerHTML);
			if(event.target.innerHTML=="Food Court")
			{x
				if(flag1==0)
				{
					document.getElementById("Food court2").disabled=true;
					flag1=1;
					if(flag2==1 || flag3==1)
					{
						document.getElementById("Aman Rasoi2").disabled=false;
						document.getElementById("Aman Rasoi2").checked=false;
						document.getElementById("Hostel Mess2").disabled=false;
						document.getElementById("Hostel Mess2").checked=false;
						flag2=0;
						flag3=0;
					}
				}
			}
			else if(event.target.innerHTML=="Aman Rasoi")
			{
				if(flag2==0)
				{
					document.getElementById("Aman Rasoi2").disabled=true;
					flag2=1;
					if(flag1==1 || flag3==1)
					{
						document.getElementById("Food court2").disabled=false;
						document.getElementById("Food court2").checked=false;
						document.getElementById("Hostel Mess2").disabled=false;
						document.getElementById("Hostel Mess2").checked=false;
						flag1=0;
						flag3=0;
					}
				}
			}
			else if(event.target.innerHTML=="Hostel Mess")
			{
				if(flag3==0)
				{
					document.getElementById("Hostel Mess2").disabled=true;
					flag3=1;
					if(flag1=1 || flag2==1)
					{
						document.getElementById("Aman Rasoi2").disabled=false;
						document.getElementById("Aman Rasoi2").checked=false;
						document.getElementById("Food court2").disabled=false;
						document.getElementById("Food court2").checked=false;
						flag1=0;
						flag2=0;
					}
				}
			}
}*/
</script>
<script type="text/javascript">
	function myFunction1() 
	{
    document.getElementById("myDropdown").classList.toggle("show");
	}
	var p = "<?php echo $_SESSION['already'] ;?>";
	if(p = 'Already registered')
	{	
		document.getElementById('coupon').style.display = "none" ;
		alert("You have already taken your coupoun");
	}
	var q = "<?php echo isset($_SESSION['flag']) ;?>";
	if(q == '1')
	{
		alert("Your have already taken your coupon");
	}
</script>
 <footer class="footer">
      © Copyright 2016, All Rights Reserved
    </footer>
</body>
</html>