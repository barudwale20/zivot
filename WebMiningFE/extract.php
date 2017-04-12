	<?php
		$str = file_get_contents('data.json');
		$json = json_decode($str, true);
		//$jsona=json_encode($json);
		//echo '<pre>' . print_r($jsona, true) . '</pre>';
		//$a='one';
		foreach($json as $x)
			foreach($x as $y)	
			{
				if(sizeof($y)==1)
					continue;
				foreach($y as $z)
				{//echo $z." " ;
					if($z=="one")
					{
						echo $x['topic'];
					}
				
				}
				
			}		
		
		?>