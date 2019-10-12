<?php


$con =mysqli_connect('localhost','root','');

if(!$con)
{
	echo'Not Connected to the Server';
}

if (!mysqli_select_db($con,'tornado super shop'))
{
	echo 'Database is not selected';
}
$SL = $_POST['SL'];
$Name = $_POST['Name'];
$Code = $_POST['Code'];
$Price = $_POST['Price'];
$Measure = $_POST['Measure'];
$In_Stock = $_POST['In_Stock'];
$image = $_POST['image'];

$sql = "INSERT INTO fruits_final (SL,Name,Code,Price,Measure,In_Stock,image) VALUES ('$SL','$Name','$Code','$Price','$Measure','$In_Stock','$image')";

if (!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}

else
{
	echo 'Inserted';
}

header ("refresh:2; url=Add Items.html");

?>

