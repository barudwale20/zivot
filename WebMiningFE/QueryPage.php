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
		<font color="#5D6D7E"> <span style="float:left; font-size:25px"> HEALTHCARE.COM </span></font>
		<a href="FreqSearch.php"><input type="button" name="fq" id="fq" value="Freqent Searches" class="button"></a>
		<a><input type="button" name="Contact" id="contact" value="Contact Us" class="button"></a>
		<a href="QueryPage.php"><input type="button" name="home" id="home" value="Home" class="button"></a>
		</div>

<p>
<h1 class="head" style="font-family:Times New Roman; color:White; font-size:50px">HEALHCARE
<hr>
<font size="5px" color="#FFB300"><center>You don't need a doctor! </font> 
</h1>
</p>
<form name="querypage" method="POST" action="WebMining.php">
		<table border="0" align="center" cellpadding="10px">
			<tr>
				<th colspan="2" align="center"><b><font color="red" size="5">MEDICAL QUERY</font></b></th>
			</tr>
			
			<tr><th colspan="2" align="center"><b><font color="blue" size="4">Enter Symptoms Here</font></b></th></tr>
			
			<tr>
				<td height="50"><label><b><font size="4">Symptom-1:</font></b></label></td>
				<td><input name="s1" type="text" size="25" required/></td>
			</tr>
			<tr>
                   	<td height="50"><label><b><font size="4">Symptom-2:</font></b></label></td>
				<td><input name="s2" type="text" size="25"/></td>
			</tr>
			
			<tr>
                <td height="50"><label><b><font size="4">Symptom-3:</font></b></label></td>
				<td><input name="s3" type="text" size="25"/></td>
			</tr>
			
			<tr>
				<td colspan="2" height="50" align="center"><input class="button" type="submit" name="Submit" value="Confirm"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>
