<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin: Add Items: Tornado Super Shop </title>
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

.click{font-family: Papyrus;
       padding-left:300px;
	   margin: 100px;
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
<a href = "Admin.php">Log Out</a>
</div>
</body01>

<body2>
<form action="Add Items.php" method="post">
SL : <input type="INT" name="SL">
<br/>
Name : <input type="text" name="Name">
<br/>
Code : <input type="text" name="Code">
<br/>
Price : <input type="REAL" name="Price">
<br/>
Measure : <input type="text" name="Measure">
<br/>
In_Stock : <input type="text" name="In Stock">
<br/>
Image : <input type="text" name="Add Image">
<br/>
</form>
</body2>

</html>