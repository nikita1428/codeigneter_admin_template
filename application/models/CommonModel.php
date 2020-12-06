<?php

	Class CommonModel extends CI_Model
		{

			function __construct()
				{
					parent::__construct();
				}

			public function getassetseater()
				{
					$i = 0;
						$array = array();
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Seater';  	$array[$i]['id']= $i;
						return $array;
				}
				
				public function getassetstatus()
				{
					$i = 0;
						$array = array();
					$array[$i]['title'] = $i.' Disable';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Active';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = $i.' Sold';  	$array[$i]['id']= $i;
					
						return $array;
				}
				
			public function getassetstypes()
				{
					$i = 0;
						$array = array();
					$array[++$i]['title'] = 'Cabin';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Virtual';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Desk';  	$array[$i]['id']= $i;
						return $array;
				}
				
			public function getamenities()
				{
					$i = 0;
						$array = array();
					$array[++$i]['title'] = 'Conference';  	$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Food'; 		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'LCD'; 			$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Parking'; 		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Reception';	$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Wifi';			$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Courier';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'IVR';			$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Meeting';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Printer';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Storage';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Elevator';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Lounge';		$array[$i]['id']= $i;
					$array[++$i]['title'] = 'MIC';			$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Projector';	$array[$i]['id']= $i;
					$array[++$i]['title'] = 'Tea Coffee';	$array[$i]['id']= $i;
					return $array;
				}

		}
?>