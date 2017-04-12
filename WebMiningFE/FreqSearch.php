<html>
<head>
<style>



.head{
	text-align: center;
	background-color:powderblue;
	padding: 20px 10px;
	background-color:#1A5276;
}





table {
    border-collapse: collapse;
    border: 1px solid black;
	box-shadow: 10px 10px 5px #888888;
}


input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	
}

input[type=text]:focus {
    border: 3px solid #555;
	box-shadow: 5px 5px 5px #888888;
}
 
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=password]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}

input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=email]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}

		
</style>
</head>
<body>

<div align="right" class="1">
		<font color="#5D6D7E"> <span style="float:left; font-size:25px"> HEALTHCARE.COM </span></font>
		<a href="FreqQuery.php"><input type="button" name="fq" id="fq" value="Freqent Searches" class="button"></a>
		<a><input type="button" name="Contact" id="contact" value="Contact Us" class="button"></a>
		<a href="QueryPage.php"><input type="button" name="home" id="home" value="Home" class="button"></a>
		</div>

<p>
<h1 class="head" style="font-family:Times New Roman; color:White; font-size:50px">HEALHCARE
<hr>
<font size="5px" color="#FFB300"><center>You don't need a doctor! </font> 
</h1>
</p>

<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'WebMining'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD','');
	

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	
	$query = "SELECT Symptoms FROM Query ORDER BY Count DESC LIMIT 7"; 
	$data = mysql_query ($query)or die(mysql_error());
	
	if($data)
	{	$ck=1;
		?><h3><font face="Ariel" color="#6C3483" size="6"><center>FREQUENTLY SEARCHED SYMPTOMS IN LAST 15 DAYS</center><br></font></h3><?php
		while ($row=mysql_fetch_array($data))
		{
			echo '<center><font size="5"><b>'.$row['Symptoms'].'</b></font></center>'.'<br>';
			$ck++;
		}
	}

?>

</body>
</html>