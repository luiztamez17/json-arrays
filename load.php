<?php
	
	$getpage = $_POST['page'];
	
	$return = array(
				'home' => 'Welcome to Petshop demo home page',
				'details' => 'We live in the city of Adelaide',
				'shop' => 'Dogs = $100<br>Cats = $35<br>Brids = $15'
					);
	
	$colour = array(
				'home' => '#FFF',
				'details' => '#F9F',
				'shop' => '#FC3',
	
					);

if($_POST){
	
	
	if($getpage == 'home'){
		
		echo json_encode(array('content'=>$return['home'], 'colour'=>$colour['home']));
		
	}elseif($getpage == 'details'){
		
		echo json_encode(array('content'=>$return['details'], 'colour'=>$colour['details']));
		
	}elseif($getpage == 'shop'){
		
		echo json_encode(array('content'=>$return['shop'], 'colour'=>$colour['shop']));
		
	};
	
};
?>