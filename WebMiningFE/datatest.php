<?php
$str = file_get_contents('F:\WebMiningBE\datatest.json');
$json = json_decode($str, true);

$inp11='red';
$inp21='fever';
$inp31='Rash';
$xx=1;
if(is_($json))
{
	echo 'haha';
	foreach($json as $x)
		{
			foreach($x as $y)	
			{
				if(sizeof($y)==1)
					continue;
				foreach($y as $z)
				{
					echo $z."<br>";
					
					//if((strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false) || (strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false) || (strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false))
					if(strpos($z,$inp11)!==false || strpos($z,$inp12)!==false || strpos($z,$inp13)!==false || strpos($z,$inp14)!==false)
						$c++;
						//echo $c."<br>";
					if(strpos($z,$inp21)!==false || strpos($z,$inp22)!==false || strpos($z,$inp23)!==false || strpos($z,$inp24)!==false)
						$c++;
						//echo $c."<br>";
					if(strpos($z,$inp31)!==false || strpos($z,$inp32)!==false || strpos($z,$inp33)!==false || strpos($z,$inp34)!==false)
						$c++;
						//echo $c."<br>";
				
					if($c==3)
					{
						echo $y;
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
?>	