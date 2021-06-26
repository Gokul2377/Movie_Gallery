<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device=width, initial-scale=1.0">	
</head>
<style type="text/css">
.block {
  display: block;
  width: 250px;
  padding: 14px 28px;
  margin-bottom: 3px;
  cursor: pointer;
}
.blocked {
  width: 250px;
  padding: 14px 28px;
  margin-bottom: 3px;
  cursor: pointer;
}
body
{
	background-image: url('clou.jpeg');
}
h3
{
  font-family: Arial, Helvetica, sans-serif;
}	
button
{
	border-radius: 10px;
	font-family:Cambria;
	font-size: 16px;
}
button:hover
{
	transform: scale(1.02);
	background-color: #E3E3E3;
}
</style>
<body>
	<form method="post">
		<h3>Welcome to Next-Flix!(Working Title)</h3>
		<h3 style="margin-top: -10px;">A place where you share your creations to the world!</h3>
		<button name="admin" class="block">ADMINISTATOR</button>
		<button name="creator" class="block">CREATOR</button>
		<button name="customer" class="block">CUSTOMER</button>
	</form>
<?php
if(isset($_POST['admin']))
{
  header('location: ADMin.php');
}
if(isset($_POST['creator']))
{
  header('location: creator_login.php');
}
if(isset($_POST['customer']))
{
  header('location: customer_login.php');
}
?>
</body>

</html>
