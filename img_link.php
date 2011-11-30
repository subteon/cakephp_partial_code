<!-- CakePHP 1.3.x -->
<?php echo 
	$html->link(
		$html->image('foo.png', array('alt'=> __('foo', true), 'class'=>'var')),
		'/projects/',
		array('target' => '_self', 'escape' => false),
		false,
		false
	);
?>
