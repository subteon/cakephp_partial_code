<!-- CakePHP 2.x -->
<?php

echo $this->Html->link(
	$this->Html->image(
		'foo.gif',
		array(
			'width' => '100',
			'height' => '100',
			'alt' => __('test', true)
		)
	),
	'/projects/',
	array('class'=>'var', 'target' => '_self', 'escape' => false),
	false,
	false
);

?>
