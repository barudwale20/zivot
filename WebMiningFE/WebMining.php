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

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'WebMining'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD','');
	

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	if(isset($_POST['s1']) && $_POST['s1']!=NULL)
	{
		$s1=strtoupper($_POST['s1']);
		$search = "SELECT * FROM Query WHERE Symptoms='$s1'"; 
		$data = mysql_query($search);
		$rows = mysql_num_rows($data);
		if ($rows==1)
		{
			$nos="SELECT Count FROM Query WHERE Symptoms='$s1'";
			$res=mysql_query($nos);
			$res=mysql_fetch_array($res);
			//echo $res['Count'];
			$newc=$res['Count']+1;
			//echo $newc;
			$up="UPDATE Query SET Count='$newc' WHERE Symptoms='$s1'";
			mysql_query($up);
		}
		else
		{
			$ins="INSERT INTO Query VALUES('$s1',1)";
			mysql_query($ins);
		}
	}
	
		if(isset($_POST['s2']) && $_POST['s2']!=NULL)
	{
		$s2=strtoupper($_POST['s2']);
		$search = "SELECT * FROM Query WHERE Symptoms='$s2'"; 
		$data = mysql_query($search);
		$rows = mysql_num_rows($data);
		if ($rows==1)
		{
			$nos="SELECT Count FROM Query WHERE Symptoms='$s2'";
			$res=mysql_query($nos);
			$res=mysql_fetch_array($res);
			//echo $res['Count'];
			$newc=$res['Count']+1;
			//echo $newc;
			$up="UPDATE Query SET Count='$newc' WHERE Symptoms='$s2'";
			mysql_query($up);
		}
		else
		{
			$ins="INSERT INTO Query VALUES('$s2',1)";
			mysql_query($ins);
		}
	}
	
		if(isset($_POST['s3']) && $_POST['s3']!=NULL)
	{
		$s3=strtoupper($_POST['s3']);
		$search = "SELECT * FROM Query WHERE Symptoms='$s3'"; 
		$data = mysql_query($search);
		$rows = mysql_num_rows($data);
		if ($rows==1)
		{
			$nos="SELECT Count FROM Query WHERE Symptoms='$s3'";
			$res=mysql_query($nos);
			$res=mysql_fetch_array($res);
			//echo $res['Count'];
			$newc=$res['Count']+1;
			//echo $newc;
			$up="UPDATE Query SET Count='$newc' WHERE Symptoms='$s3'";
			mysql_query($up);
		}
		else
		{
			$ins="INSERT INTO Query VALUES('$s3',1)";
			mysql_query($ins);
		}
	}
	

		$str = file_get_contents('F:\WebMiningBE\medicaldata.json');
		$json = json_decode($str, true);
		
		echo "<center><h1><font color='#6C3483'>Possible Diseases with Given Symptoms</font></h1></center>";


		//echo '<pre>' . print_r($json, true) . '</pre>';
	if(isset($_POST['s1'] , $_POST['s2'] , $_POST['s3']) && $_POST['s3']!=NULL && $_POST['s2']!=NULL)
	{
		$inp11=$_POST['s1'];
		$inp11=strtolower($inp11);
		$inp12=ucfirst($inp11);
		$inp13=ucwords($inp11);
		$inp14=strtoupper($inp11);
		
		$inp21=$_POST['s2'];
		$inp21=strtolower($inp21);
		$inp22=ucfirst($inp21);
		$inp23=ucwords($inp21);
		$inp24=strtoupper($inp21);
		
		$inp31=$_POST['s3'];
		$inp31=strtolower($inp31);
		$inp32=ucfirst($inp31);
		$inp33=ucwords($inp31);
		$inp34=strtoupper($inp31);
		
		$c=0;
		
		
		
		foreach($json as $x)
		{
			foreach($x as $y)	
			{
				if(sizeof($y)==1)
					continue;
				foreach($y as $z)
				{
					
					//if((strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false) || (strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false) || (strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false))
					if(strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false)
						$c++;
					if(strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false)
						$c++;
					if(strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false)
						$c++;
				
					if($c==3)
					{
						echo "<center><h2><font color='red'>".$x['topic']."</font></h2></center><br>";
						
						foreach($x['symptoms'] as $v)
						{
							
							echo "<b><li><font color='#566573'>".$v."</font></li></b></br>";
						}
						
						echo"<form name='moreinfo' method='POST' action='More.php'> <input type='submit' name='more' id='more' value='".$x['topic']."' class='button'></form>";
					}
					if($c==3)
					{
						$c=0;
						break;
					}
				}	
			}
		}		
	}
	
	
		if(isset($_POST['s1'] , $_POST['s2']) && $_POST['s2']!=NULL)
	{
		$inp11=$_POST['s1'];
		$inp11=strtolower($inp11);
		$inp12=ucfirst($inp11);
		$inp13=ucwords($inp11);
		$inp14=strtoupper($inp11);
		
		$inp21=$_POST['s2'];
		$inp21=strtolower($inp21);
		$inp22=ucfirst($inp21);
		$inp23=ucwords($inp21);
		$inp24=strtoupper($inp21);
		
		
		$c=0;
		
		foreach($json as $x)
		{
			foreach($x as $y)	
			{
				if(sizeof($y)==1)
					continue;
				foreach($y as $z)
				{
					
					//if((strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false) || (strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false) || (strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false))
					if(strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false)
						$c++;
					if(strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false)
						$c++;
				
					if($c==2)
					{
						echo "<center><h2><font color='red'>".$x['topic']."</font></h2></center><br>";
						
						foreach($x['symptoms'] as $v)
						{
							
							echo "<b><li><font color='#566573'>".$v."</font></li></b></br>";
						}
						
						echo"<form name='moreinfo' method='POST' action='More.php'> <input type='submit' name='more' id='more' value='".$x['topic']."' class='button'></form>";
					}
					if($c==2)
					{
						$c=0;
						break;
					}
				}	
			}
		}		
	}
	
	
	
	
	if(isset($_POST['s1']) && $_POST['s2']==NULL && $_POST['s3']==NULL)
	{
		$inp11=$_POST['s1'];
		$inp11=strtolower($inp11);
		$inp12=ucfirst($inp11);
		$inp13=ucwords($inp11);
		$inp14=strtoupper($inp11);
		
		
		$c=0;
		
		foreach($json as $x)
		{
			foreach($x as $y)	
			{
				if(sizeof($y)==1)
					continue;
				foreach($y as $z)
				{
					
					//if((strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false) || (strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false) || (strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false))
					if(strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false)
						$c++;
				
					if($c==1)
					{
						echo "<center><h2><font color='red'>".$x['topic']."</font></h2></center><br>";
						
						foreach($x['symptoms'] as $v)
						{
							
							echo "<b><li><font color='#566573'>".$v."</font></li></b></br>";
						}
						
						echo"<form name='moreinfo' method='POST' action='More.php'> <input type='submit' name='more' id='more' value='".$x['topic']."' class='button'></form>";
						
					}
					if($c==1)
					{
						$c=0;
						break;
					}
				}
			}
		}		
	}
	
	
	
	
	
	
	
?>

</body>
</html>