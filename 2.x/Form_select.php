<?php

	$list = array('apple', 'banana', 'cherry');

	$default = 'banana';

	echo $this->Form->select(
		'select_item',
		$list,
		array(
			'value' => $default,
			'empty' => false	//ブランクなしに設定
		)
	);
	
?>
