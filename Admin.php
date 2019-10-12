<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin::Login: Tornado Super Shop </title>
<link rel="stylesheet" href ="bootstrap.min.css">
<style>
body{background-color : #ffffff;}

.head1 {
    display: inline-block;    
    text-align: center;
    width: 123px;
    border-radius: 4px 4px 4px 4px;
	margin: 10px;
    height: 220px;
    vertical-align: middle;
	padding-left: 500px;
	font-family: Brush Script MT ;
	
}

h1 {color:#8C1C73;
	text-transform : Uppercase;
	vertical-align: middle;
}

h2 {color:#CCEB29;
    font-style : italic; 
	padding-left:350px;
	font-family: Papyrus;
	background-color:#00ADD6;
	margin: 30px;
}



.back{font-style : bold; 
	padding-left:1100px;
	font-family: Papyrus;}
	
		.catmail {
    width: 50%;
    height: 200px;
    font-family: Papyrus;
    margin: 100px;
    padding-left:350px;
	
}

.panel{
    width: 50%;
    height: 200px;
    font-family: Papyrus;
    margin: 100px;
    padding-left:250px;
	
}

.panelpic{
    width: 50%;
    height: 200px;
    margin: 100px;
    padding-left:290px;
	
}



</style>

</head>
<body0>
<div class="head1">
<h1> ⚡ Tornado Super Shop ⚡ </h1>
</div>
<h2> Your online one stop to shop the WORLD! 🌎 </h2>
</body0>

<body01>
<div class="back">
<a href = "Tornado Super Shop.php">Back to Home </a>
</div>
</body01>

<body2>

<div class="panelpic">
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="DN_BKVzU8AABqhx.jpg" alt="Avatar" >
  </div>
  </div>
  
  <div class="panel">
  <div class="container" style="background-color:#f1f1f1">
  <h3> Enter Your Credentials to Access Admin </h3>
  <form>
    <input type="text" placeholder="Enter Admin Username" id="text1" /><br /> 
	<input type="password" placeholder="Enter Admin Password" id="text2" /><br />
    <input type="button" value="Login"  onclick="javascript:validate()" class="btn btn-primary"" />
	
</form>
<script type="text/javascript">
function validate()
{
    if(   document.getElementById("text1").value == "Tornado"
       && document.getElementById("text2").value == "TSS123" )
    {
        alert( "Welcome, Admin" );
        location.href="PostLogin.php";
    }
    else
    {
        alert( "Validation Failed. Incorrect Username/Password. Please Retry" );
        location.href="Admin.php";
    }
}
</script>
</div>


  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw"> <a href="mailto:sakib2131@gmail.com?subject=Admin Forgot Password
&body=Your Name:
           Phone:                 
		   HR will check Your details and will then e-Mail you the password.">Forgot Password?</a></span>
	
  </div>
  </div>
  </div>
</form>
</body2>





</html>