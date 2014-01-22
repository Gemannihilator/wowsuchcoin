<?php
App::uses('AppController', 'Controller');

/**
 * Trades Controller
 *
 */
class TradesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function setAddress() {
		if ($this->request->is('post')) {
			$this->Cookie->write('address', $this->data['Trade']['address'], false, '+10 years');
			$this->redirect(array("controller" => "trades", "action" => "latest"));
		}
	}


/**
 * Shows some numbers on DOGE
 */
	public function latest() {

		$address = $this->Cookie->read('address');
		$this->set('address', $address);

		$trades = $this->Trade->dogeTrade();
		$ticker = $this->Trade->dogeTicker();
		$balance = $this->Trade->getMyBalance($address);
		$btc = $this->Trade->getBTCPrice();
		$diff = $this->Trade->dogeDiff();

		$this->set(compact('diff'));
		$this->set(compact('trades'));
		$this->set(compact('ticker'));
		$this->set(compact('balance'));
		$this->set(compact('btc'));

		$this->render('index');
	}

}
