<!DOCTYPE html>
<html>
	<head>
		
		<style>
div {background-color: white;}

div a {
    text-decoration: none;
    color: white;
    font-size: 10px;
    padding: 5px;
    display:inline-block;
	margin: 0px;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 7px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 2px;
    cursor: pointer;
	border-radius: 12px;
}



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
	
		<title>MEDICAL QUERY</title>
	</head>
	
	
	<body>
		<div align="right" class="1">
		<font color="#5D6D7E"> <span style="float:left; font-size:25px"> ZIVOT.COM </span></font>
		<a href="Map.html"><input type="button" name="nearby" id="nearby" value="Nearby" class="button"></a>
		<a href="FreqSearch.php"><input type="button" name="fq" id="fq" value="Freqent Searches" class="button"></a>
		<a><input type="button" name="Contact" id="contact" value="Contact Us" class="button"></a>
		
		<a href="QueryPage.php"><input type="button" name="home" id="home" value="Home" class="button"></a>
		</div>
		
		<p>
		<h1 class="head" style="font-family:Times New Roman; color:White; font-size:50px">ZIVOT
		<hr>
		<font size="5px" color="#FFB300"><center>Be your own doctor! </font> 
		</h1>
		</p>

	<?php
		if(isset($_POST['more']))
		{
			echo $_POST['more'];
		}
	?>

</body>
</html>	