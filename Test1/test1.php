<?php 

$input = array(1,2,3,4,5);
$num = 3;

$output = moving($input, $num);
print_r($output);

function moving($input, $num){
	$result = array();
	
	$count = count($input);
	
	for($i=0; $i<$count; $i++){
		$index = $i - ($num-1);
		
		if($index < 0){
			$newindex = $index+$count;
			$result[$i] = $input[$newindex];
		}else{
		    $newindex = $index;
			$result[$i] = $input[$newindex];
		}
		
	}

	return $result;
}



