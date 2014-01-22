<h1 style='color: yellow;';>Wow. <span style='color: blue'>Such coin.</span></h1> 

<div id="testy">
	<?php echo $this->Form->create('Trade', array('action' => 'setAddress')); ?>
	<?php echo $this->Form->input('address', array('value' => $address, 'label' => "much address")); ?>
	<?php echo $this->Form->end('Set address'); ?>
</div>

<div style='float: left'>
	<h2>such value</h2>
	<div class='ticker doge'>
		<span behavior="alternate" direction="right" scrollamount=100 style='font-size: 75px; width: 600px;'><?php echo $ticker->last." BTC"; ?> (£<?php echo round(($ticker->last * $balance) * $btc->GBP->last, 2); ?>)</span>
	</div>
</div>

<div style='float: right'>
	<h2>so difficult</h2>
	<div>
		<marquee behavior="alternate" direction="right" scrollamount=100 style="color: pink; font-size: 75px; width: 600px;"><?php echo $diff; ?> :D</marquee>
	</div>
</div>

<h2 style='clear: both;'>History</h2>

<table>
	<tr>
		<th>Type</th>
		<th>Amount</th>
		<th>Price</th>
		<th>Total</th>
		<th>Time</th>
	</tr>

	<?php $trades->data = array_reverse($trades->data); ?>
<?php foreach ($trades->data as &$trade) : ?>
	<tr>
		<td>
			<?php echo $trade->type; ?>:
		</td>
		<td><?php echo $trade->amount; ?></td>
		<td><?php echo $trade->price; ?></td>
		<td><?php echo $trade->price * $trade->amount; ?> BTC</td>
		<td><?php echo date('H:i:s', $trade->date); ?></td>
	</tr>

	<?php //pr($trade); ?>


<?php endforeach; ?>

</table>