<?php

// $num = 56;

/* function warm_card($num){
	$card = $tmp = array();
	for($i = 0; $i < $num; $i++){
		$tmp[$i] = $i;
	}
	
	for($i = 0; $i < $num; $i++){
		$index = rand(0, $num - $i - 1);
		$card[$i] = $tmp[$index];
		
		unset($tmp[$index]);
		$tmp = array_values($tmp);
	}
	return $card;
}
 */
// print_r(warm_card($num));




/* function maopao($arr){
    $count = count($arr);
	if($count == 0) return false;
	for($i = 0; $i <= $count; $i++){
		for($j = $count - 1; $j > $i; $j--){
			if($arr[$j] < $arr[$j-1]){
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $tmp;
			}
		}
	}
	return $arr;
}
$arr = array(1,9,7,8,6,5,0,10,100,19,18,29);
print_r(maopao($arr)); */




function quick_sort($arr){
	$count = count($arr);
	if($count <= 1){
		return $arr;
	}
	$base_num = $arr[0];
	$left_arr = array();
	$right_arr = array();
	for($i = 1; $i < $count; $i++){
		if( $base_num > $arr[$i]){
			$left_arr[] = $arr[$i];
		}else{
			$right_arr[] = $arr[$i];
		}
	}
	print_r($left_arr);
	$left_arr = quick_sort($left_arr);
	$right_arr = quick_sort($right_arr);
	return array_merge($left_arr,array($base_num),$right_arr);
}

$arr = array(1,9,7);
print_r(quick_sort($arr));