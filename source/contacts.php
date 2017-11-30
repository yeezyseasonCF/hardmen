<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<html lang="en-US">

<meta charset="UTF-8">

<title>Dream Change Coalition</title>

<head>


<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<!-- <body bgcolor="#F5F5F5"> -->


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]); }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




if (isset($_GET['submit'])) {echo "Hello {$_GET[firstname]}";
}



if(isset($_POST['firstname'])){ $name = $_POST['firstname']; }

$firstnameErr = "";
$firstname = "";
$emailErr = "";
$email = "";


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
  }

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $email = ($_POST["firstname"]);
  }


?>


<!-- <background style="color:#f0ead6;"> 
 style="color:#840B23;" align="center"

-->

<h1>Dream Change Coalition</h1>


<i>Smart, Safe Banking</i>

<div id="body">

<div id="menu">

<ul>

	
	<li><a href="htmlcopeland.html">Home</a></li>
	<li><a href="services.html">Services</a></li>
	<li><a href="contacts.php">Contact Info</a></li>

</ul>

</div>

<!-- <h2>align="center" -->

<h2>Company Employees</h2>

<table style="width:100%">
	<tr>
		<th>Postion</th>
		<th>First Name</th>
		<th>Last Name</th>
	</tr>
	<tr>
		<td>Manager</td>
		<td>Tokohira</td>
		<td>Masashi</td>
	</tr>
	<tr>
		<td>Assistant Manager</td>
		<td>Takahashi</td>
		<td>Masashi</td>
	</tr>

	<tr>
		<td>Assistant to the Assistant Manager</td>
		<td>Hideo</td>
		<td>Kojima</td>

	</tr>
</table>


<!--  <h3>align="center"-->

<h3>Contact Us</h3>





<!-- form center-->

<div id="reqform">

<p>* Indicates required section</p>

<form method="post" action="contacts.php">   

  First name: *<br>
  <input type="text" name="firstname"><br> 
  <br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  <br>
  Email: * <br>
  <input type="text" name="email"><br> <span class="error"> 
	



<br>


  <input type="submit" name="Submit" value="send"> 
  
<br><br><br>


 <?php

if (isset($_POST['firstname'])) {
 echo"Hello {$_POST["firstname"]}"; } 

 ?>
<br>
<br>


<?php

if (isset($_POST['email'])) {
 echo"Your email address is:  {$_POST["email"]}"; }

?>

<?php 

if (empty($_POST['emailErr'])) {
 trigger_error("You must input a valid email address"); }


?>
	

<br>
<br>
<br>

  <br>New or Returning Customer?


  <br><input type="radio" name="customer" value="New">New<br>
  <input type="radio" name="customer" value="Returning">Returning<br>

</form>
</div>


</body>

</div>

<br>
<br>

<?php



?>






<div class="footer">

<footer>

<i>Dream Change Coalition</i>

<br>
<br>

<a href="https://twitter.com/"> <img src="images/twitter.png" alt="Twitter" style="width: 50px; height:50px;"> </a>

<a href="https://www.facebook.com/"> <img src="images/facebook.png"  alt="Facebook" style="width: 50px; height:50px;"> </a>


<br>

<p>3750, Hanamura Drive, Hanamura Japan</p>

<p> Contact us at: <a href="mailto:Dreamchangecoalition@gmail.com">Dreamchangecoalition@gmail.com</p></a>

</p>
</footer>

</div>

</html>