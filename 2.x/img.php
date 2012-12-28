<?php

echo $this->Html->image(
	'foo.gif',
	array(
		'width' => '100',
		'height' => '100',
		'alt' => __('test', true)
	)
);

echo $this->Html->image('foo.gif', array('width' => '100', 'height' => '100', 'alt' => __('test', true)));



?>