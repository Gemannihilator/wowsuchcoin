<h2>DOGE/BTC</h2> 


<?php echo $this->Form->create('Trade', array('action' => 'setAddress')); ?>
<?php echo $this->Form->input('address', array('value' => $address)); ?>
<?php echo $this->Form->end('Set address'); ?>

<h2>TO THE MO0N!: <?php echo $balance; ?></h2>
<div class='ticker doge'>
	<span><?php echo $ticker->last; ?> (£<?php echo round(($ticker->last * $balance) * $btc->GBP->last, 2); ?>)</span>
</div>

<h2>OMg teh diff!</h2>
<span ></span>

<div style='width: 700px;'>
	<marquee behavior="alternate" direction="right" scrollamount=100 style="color: pink; font-size: 100px; width: 600px;"><?php echo $diff; ?> :D</marquee>
</div>

<h2>History</h2>

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