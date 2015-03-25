<?php

define('KEY', 1);

if(isset($_GET['encrypt'])){
	for($i=0;$i<strlen(trim($_GET['encrypt']));$i++){
		if((ord($_GET['encrypt'][$i]) >= 65 AND ord($_GET['encrypt'][$i] <= 90)) || (ord($_GET['encrypt'][$i] >= 97) AND ord($_GET['encrypt'][$i] <= 122)))
			print chr(ord($_GET['encrypt'][$i])+KEY);
		else
			print $_GET['encrypt'][$i];
	}
}elseif(isset($_GET['decrypt'])){
	for($i=0;$i<strlen(trim($_GET['decrypt']));$i++){
		if((ord($_GET['decrypt'][$i]) >= 65 AND ord($_GET['decrypt'][$i] <= 90)) || (ord($_GET['decrypt'][$i] >= 97) AND ord($_GET['decrypt'][$i] <= 122)))
			print chr(ord($_GET['decrypt'][$i])-KEY);
		else
			print $_GET['decrypt'][$i];
	}
}
