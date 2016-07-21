<?php

$Id2=$_POST['id'];
$Password2=$_POST['password'];

$con=mysql_connect("localhost","root","498505194");
if(!$con)
{
die('Could not connect: ' . mysql_error());

}
else
{
echo 'Mysql Connect Success!';
echo '<br/>';
}

mysql_select_db("loginid",$con);
$sql="INSERT INTO loginid(id,password) values ('$_POST[id]','$_POST[password]' )";
if(!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo 'Welcome!';
echo $Id2;
echo '<br/>';
echo "You've register successfully!";


mysql_close($con);

?>
