<!DOCTYPE html>
<html>
<body>



</body>
</html>
<meta charset="utf-8">
<title>Fruits: Tornado Super Shop </title>
<link rel="stylesheet" href ="bootstrap.min.css">
<style>
body{background-color : #ffffff;}

.head1 {
    display: inline-block;    
    text-align: center;
    width: 123px;
    border-radius: 4px 4px 4px 4px;
    height: 220px;
	margin: 10px;
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

h5 {font-size = 32;}

.main_block {
    width: 1200px;
	font-family: Papyrus;
    
}

.one{padding-left:550px;
	font-family: Papyrus;
	font-size: 350%;
	}
	




.main_block {
    width: 1200px;
	font-family: Papyrus;
    
}



.inner_block {
    
    float: left;
    width: 50%;
	display:inline-block;
  margin-right:5px;
}

.inner_block img {
    width: 100%;
    height: auto;
    hor-align: middle;
	
}
ul.image-gallery {
  list-style: none;
  display: block;
  margin: 0;
  padding: 0;
  background-color: #ffffff;
}

ul.image-gallery:after {
  content: '';
  display: block;
  clear: both;
}

ul.image-gallery li {
  list-style: none;
  display: block;
  float: left;
}

ul.image-gallery li img {
  display: block;
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
	
	.pics{
		width:200px;
	}
	
	.catmail {
    width: 50%;
    height: 50px;
    font-family: Papyrus;
    margin: 50px;
    padding-left:490px;
	
}

.content{
	
	width: 100%;
	margin: 100px;
	background-color:#ffffff;
    
	
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

<body1>
<div class = one>
<h3> Fruits </h3>
</div>
</body1>
<body3>
<section class ="catmail">


<figure>
<img src = "email.jpg" alt = "e-Mail">
<figcaption>

<a href="mailto:sakib2131@gmail.com?subject=Tornado Super Shop, Product Order
&body=Your Name:
           Phone:                 
		   Order: ">Email Your Order!</a>
</figcaption>
</figure>

</section>
</body3>

<body2>
<div class="main_block">

<div class = "inner_block">


 <table>
	    <tr>
    	    <td>
    	    
<?php 
$mysqli = new mysqli('localhost','root','','tornado super shop'); 

$result = $mysqli->query 

        //SELECT queries are always return as mysqli result objects
        ("SELECT * FROM fruits_final") 
        or die($mysqli->error); 
		?> <div class='main-container'> <?php
		while ($row = $result->fetch_assoc()): ?> 
        <div class='row-container'>
            <div class='content'>
            <div class='itempic'>
			<img  src='<?= $row['image'] ?>' "style="float: right; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
			 <p style="clear: both;">
			 <div class='details'>
            <text>---<?= $row['Name'] ?>---</text>
			<text> TK:<?= $row['Price'] ?></text>
			<text> <?= $row['Measure'] ?>---</text>
			<text> In Stock:<?= $row['In_Stock'] ?>---</text>
			
			
			<?php endwhile; ?>
			</div>
			</div>
			</div>
			</div>
           
		    
			</td>
        </tr>
    </table>
</body2>


</html>
