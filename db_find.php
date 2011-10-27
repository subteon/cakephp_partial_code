<?php

var $uses = array('Model');

$db_field_id = 1;
$db_field_flg = 0;

$conditions = array(
    'Model.id' => $db_field_id,
    'Model.flg' => $db_field_flg,
);

$params = array(
    'conditions' => $conditions, //条件
    'recursive' => 1, //modelから取得する際の階層の深さ
	'fields' => array('Model.id', 'Model.name'), //フィールド名
	'order' => array('Model.created', 'Model.name DESC'), //文字列か配列でのorder定義
	'group' => array('Model.id'), //GROUP BYするためのフィールド
	'limit' => 10, //int
	'page' => 1, //int
	'offset' => 1, //int
	'callbacks' => true //false, 'before', 'after'
);

pr($this->Reservations->find('all', $params));

?>