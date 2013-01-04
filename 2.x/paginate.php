<?php

App::uses('AppController', 'Controller');

class PaginateSampleController extends AppController {

public $name = 'PaginateSample';

public $uses = array('Smaples');


//ページネーション初期化
public $paginate = array();

	public function index(){

		//検索条件の取得
		$params = $this->_getSample();

		//ページネーション設定
		$this->paginate = $params;
		$this->paginate['paramType'] = 'querystring';   //page=x
		$this->paginate['limit'] = 10;  //件数

		$samples = $this->paginate('Samples');

		$this->set('samples', $samples);

	}

	//Model(この例ではSamples)の条件を設定
	//汎用性を持たせる場合はModel側に持たせるメソッド
	public function _getSample(){
	
		$conditions = array(
		    'Samples.id >' => '1',
		);

		$params = array(
		    'conditions' => $conditions,
		    'recursive' => 3,

		    'fields' => array(
		        'Samples.id',
		        'Samples.date',
		    ),  //フィールド名

		    'order' => 'Schedules.id DESC',
		    //'limit' => $count, //int
		);

		return $params;
	}
}
?>
