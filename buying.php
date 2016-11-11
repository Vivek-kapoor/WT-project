<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buying Page</title>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/buying.css">
    <link rel="shortcut icon" href="assets/images/logoEdit.png">
</head>
<style>
    ul.products li{
    max-width: 180px;
    max-height: 180px;
    display: inline-block;
    vertical-align: top;
}

    ul.products li img{
    max-width: 180px;
    max-height: 180px;
}

</style>
<body>
<p align="center" style="color:#000066; font-size:60px; padding-bottom:5px; margin-bottom:0;margin-top:1px"><img style="margin-top: 20px;margin-left: 35px;" src="assets/images/logoEdit.png" align="left"></img>
    <b>PES</b><span style="color:red; font-size:60px;"> UNIVERSITY</span></p>
    
    <ul id="nav" style="align:center;margin: 0px;margin-left: 200px;">
       <li><a href="home.php">Home</a></li>
       <li><a href="event.php">Events</a></li>
       <li><a onclick="myFunction1()" href="javascript:void(0)" id ='htl' class="dropbtn">Hostel</a>
        <div class="dropdown-content" id="myDropdown">
          <a href="mess_coupons_reg.php">Mess Coupons Registration</a>
          <a href="complaints.php">Complaints</a>
        </div>
       </li>
       <li><a href="buying.php">Campus Mart</a></li>
       <li><a href="contact_us.php">Contact Us</a></li>
    </ul>

    
    <div id="hi" class="myButton" style = 'display:none'>
      <p> <?php if(isset($_SESSION['usn'])){ echo "Welcome".$_SESSION['usn'];}?> </p>
      <button value ="Logout"><a href="logout.php">Logout</a></button>
    </div>

    <div id="Box" class="modal">
      <button id="mainButL" onclick="login1()">LOGIN</button>
      <button id="mainButS" onclick="signup1()">SIGN UP</button>
      <span onclick="document.getElementById('Box').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br>
      <br>
      <div id="login" class="modal-content,inputBox">
        <form >
          <br>
          <br>
          <input type="text" class="inputBox" name="USN" placeholder="Enter your USN" >
          <br>
          <br>
          <input type="password" name="pass" placeholder="Enter your password"  > 
          <br>
          <br>
          <input type="submit" name="add">
        </form>
      </div>

      <div class="inputBox1" id="signup">
        <form >
          <br>
          <input type="text" placeholder="Enter your first name ">
          <input placeholder="Enter your last name ">
          <br>
          <br>

          <select style="margin-left:150px;background-color: #006;" required>
            <option value=""> Select your year</option>1
              <option value="1year">1st Year</option>
              <option value="2year">2nd Year</option>
              <option value="3year">3rd Year</option>
              <option value="4year">4th Year</option>
            </select>
            <select style="background-color: #006;" required>
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
            <input type="text" placeholder="Enter your USN ">
            <select id="hostel_check" style="background-color: #006;" onclick="hiddenform()" required>
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
          <input type="password" placeholder="Enter your password">
          <input placeholder="Enter your password again">
          <br>
          <br>
          <input type="submit" style="background-color: #006;">
        </form>
        <br/>
        <br/> 
      </div>
    </div> 
    <br>
    <br>
    <br>
    <br>
<a href="selling1.html" class="myButton">Click here to post an ad</a>
<ul class="products">
    <li>
        <a href="#">
            <img src="assets/images/stationery.jpg">
            <h4>3rd Semester CS Books</h4>
            <p> &#8377; 2500</p>
            <p> Contact Number:9804218552</p>
          </a>
    </li>
    <li>
        <a href="#">
            <img src="assets/images/book.jpg">
            <h4>Campus Mart Notes for ECE</h4>
            <p>&#8377; 1000</p>
            <p> Contact Number:9896432247</p>
            </a>
    </li>
     <li>
        <a href="#">
            <img src="assets/images/complain.png">
            <h4>1st Semester(Physics Cycle Notes</h4>
            <p>&#8377; 200</p>
        </a>
    </li><!-- more list items -->
    <footer class="footer">
            © Copyright 2016, All Rights Reserved
        </footer>



</ul>
 <footer class="footer">
      © Copyright 2016, All Rights Reserved
    </footer>
    </div>

</body>
<script src="mainjs.js"> </script>
<script type="text/javascript">
  var b = "<?php echo isset($_SESSION['usn']) ?>";
  var a ="<?php echo $_SESSION['hostel'] ?>";
  
  document.getElementById("htl").style.display = "none";
  if(a !='')
    document.getElementById("hi").style.display = "block";
  if( a=='no')
    document.getElementById("htl").style.display = "none";  
  if(a == 'yes')
    document.getElementById("htl").style.display = "block";
  
  var s = "<?php echo isset($_SESSION['register']); ?>";
  if(s == true)
    alert("Your event is registered");

</script>
</html>