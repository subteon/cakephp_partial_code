<!-- CakePHP 1.3.x -->
<?php echo 
	// link(string $title, string $href, array $options, string $confirm, boolean $escapeTitle)
	$html->link(
		'Link String.',
		'/projects/',
		array('alt'=> __('foo', true), 'class'=>'var', 'target' => '_self', 'escape' => false),
		false,
		false
	);
?>
