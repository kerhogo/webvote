<?php
	$file = 'scrutin.json';
	$jsonString = file_get_contents($file);
	$data = json_decode($jsonString, true);

	$creator =$_POST['creator'];
	$scrutin =$_POST['scrutin'];
	$voters =$_POST['voters'];
	$procurations =$_POST['procurations'];
	$question =$_POST['question'];
	$options =$_POST['options'];

	$data [] = array(
		'creator' => $creator,
		'num_scrutin' => $scrutin,
		'question' => $question,
		'options' => $options,
		'electeurs'=> 
		array(
			"electeur" => $voters,
			"nbr_procuration" => $procurations
		)
	);

	$json = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents("scrutin.json", $json);
?>