<?php
	$blizz_url = 'http://us.battle.net/api/wow/character/malganis/Weslo';
	
	$curl = curl_init($blizz_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	$blizz_string = curl_exec($curl);
	curl_close($curl);
	
	$blizz_json = json_decode($blizz_string, true);
?>
