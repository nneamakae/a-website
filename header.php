<!DOCTYPE html>
<html>

<head>
	<title>louisvilleitele</title>
	<meta http-equiv ="content-type" content = "text/html;charset = utf-8">
	<link rel="stylesheet" type="text/css" href="lghs.css">
	<link rel="stylesheet" type="text/css" href="admission.css">
	<link rel="stylesheet" type="text/css" href="aboutUs.css">
	<link rel="stylesheet" type="text/css" href="alumni.css">
	<link rel="stylesheet" type="text/css" href="careers.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="liturgy.css">
	<link rel="stylesheet" type="text/css" href="whatsNew.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	
</head>

<body>
	
	<div id = "wrapper">
		<div id = "header">
			<img src="pictures/logo.png" width= "142" height ="142" alt ="lghs logo here" class = "logo"/>
			<img src="pictures/name.png" width ="450" height = "48 class ="name"/>
			<div id = "head_links">
				<a href ="#">Webmail Login </a>|
				<a href ="contactUs.php"> Contact Us</a> |
				<a href = "#"> Site Map </a>
				<p id ="demo"></p>
				<script type="text/javascript">
				var d =new Date();
				document.getElementById("demo").innerHTML=d.toDateString()</script>
				
			</div>
		</div>
		<div>	
			<div id = "header_search" method="post">
				<form action="search.php" >
					<input type = "text" name = "txtSearch" id ="txtSearch" placeholder ="" value ="search..." maxlength="25" autocomplete="off" />
					<input type = "submit" id="searchBtn" value="GO!"/>
				</form>
			</div>
			<div id="nav">
				<table>
					<tr>
						<td><a href = "index.php">Home</a></td>
						<td><a href = "ABOUT US.php">About us</a></td>
						<td><a href ="Admission.php">Admission</a></td>
						<td><a href ="academics.html">Academics</a></td>
						<td><a href ="school_life.html">School Life</a></td>
						<td><a href ="Alumni.php">Alumni</a></td>
						<td><a href ="Careers.php">Careers</a></td>
						<td><a href ="Liturgy.php">Liturgy</a></td>
						<td><a href ="whatsnew.php">Whats New</a></td>
						<td><i class="fa fa-arrow-right"></i><a href ="Portal.html">EDU PORTAL</a></td>
					</tr>
				</table>
			</div>	
		</div>