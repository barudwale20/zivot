<?php
		$str = file_get_contents('example.json');
		//$json = json_decode($str, true);
		//echo '<pre>' . print_r($json, true) . '</pre>';
		$arr = json_decode($str);
		foreach ($arr as $obj) {
		foreach ($obj->profile->networks as $network) {
        echo $network->site_url;
    }
}
?>