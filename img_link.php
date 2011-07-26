<?php echo 
	$html->link(
		$html->image('foo.png'),
		'/projects/',
		array('alt'=> __('foo', true), 'class'=>'var', 'target' => '_self', 'escape' => false),
		false,
		false
	);
?>
