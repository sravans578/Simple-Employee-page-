<?php
session_start();
 
include('connection.php');
 
$e_id=$_POST['e_id'];
$e_name=$_POST['e_name'];
$designation=$_POST['designation'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$t_address=$_POST['t_address'];
$t_address=$_POST['p_address'];
$m_contact=$_POST['m_contact'];
$l_contact=$_POST['l_contact'];
 
mysqli_query($bd, "INSERT INTO member2(e_id,e_name,age,gender,designation,p_address,t_address,l_contact,m_contact)VALUES('$e_id', '$e_name', '$age', '$gender', '$designation', '$p_address', '$t_address', '$l_contact','$m_contact')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>