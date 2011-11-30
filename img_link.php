<!-- CakePHP 1.3.x -->
<?php echo 
	$html->link(
		$html->image('foo.png', array('alt'=> __('foo', true))),
		'/projects/',
		array('class'=>'var', 'target' => '_self', 'escape' => false),
		false,
		false
	);
?>
