<?php 
	$link = 0;
	$link = pg_connect(getenv("DATABASE_URL"));
	if($link == false){
		echo'Fault connection';
		return;
	}

	$sql = "select * from test_table";
	$result = pg_query($link, $sql);
	
	$res = pg_fetch_all($result);
	var_dump($res);
	print_r($result);
?>
