	var getlogin = document.getElementById("login");
	var getsignup = document.getElementById("signup");
	signup.style.display = "none";
	document.getElementById('mainButL').style.backgroundColor="#f00";
	
	function signup1()
	{
		getsignup.style.display="block";
		getlogin.style.display="none";
		document.getElementById('mainButS').style.backgroundColor="#f00";
		document.getElementById('mainButL').style.backgroundColor="#006";		
	}

	function login1()
	{
		getsignup.style.display="none";
		getlogin.style.display="block";
		document.getElementById('mainButS').style.backgroundColor="#006";
		document.getElementById('mainButL').style.backgroundColor="#f00";
		
	}	
	function myFunction1() 
	{
    document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(e) 
	{
  		if (!e.target.matches('.dropbtn')) 
  		{
		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    for (var d = 0; d < dropdowns.length; d++)
     		{
    			var openDropdown = dropdowns[d];
    			if (openDropdown.classList.contains('show')) 
    	  		{
        			openDropdown.classList.remove('show');
      	  		}
     		}
  		}
	}

	function hiddenform() {
    if (document.getElementById("hostel_check").value == "yes") {
        document.getElementById("hblock").style.display = "inline-block";
        document.getElementById("hblock1").style.display = "inline-block";
    } else {
        document.getElementById("hblock").style.display = "none";
        document.getElementById("hblock1").style.display = "none";
    }
}

function foo()
{
	document.getElementById('Box').style.display='inline-block';
}