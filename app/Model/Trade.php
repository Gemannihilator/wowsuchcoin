<?php
App::uses('AppModel', 'Model');
App::uses('HttpSocket', 'Network/Http');
/**
 * Trade Model
 *
 */
class Trade extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * Returns the trade history from the Bter api
 *
 */
	public function dogeTrade() {
		return $this->getFromApi('http://bter.com/api/1/trade/doge_btc');
	}


/**
 * Returns the ticker price from the Bter api
 *
 */
	public function dogeTicker() {
		return $this->getFromApi('http://bter.com/api/1/ticker/doge_btc');
	}

	public function dogeDiff() {
		return $this->getFromApi('http://dogechain.info/chain/Dogecoin/q/getdifficulty');
	}


	public function getBTCPrice() {
		return $this->getFromApi('https://api.bitcoinaverage.com/ticker/global/all');
	}

	public function getMyBalance($address = null) {
		return $this->getFromApi('http://dogechain.info/chain/Dogecoin/q/addressbalance/' . $address);
	}


	private function getFromApi($url = null) {
		$HttpSocket = new HttpSocket();
		$request = $HttpSocket->get($url);
		return json_decode($request->body);		
	}
}
