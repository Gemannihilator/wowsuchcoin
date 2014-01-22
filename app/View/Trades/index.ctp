<h1 style='color: yellow; background-color: orange;';>Wow. <span style='color: blue'>Such coin.</span></h1> 

<div id="testy" style="width: 50%; height: 180; float: left;">
	<?php echo $this->Form->create('Trade', array('action' => 'setAddress')); ?>
	<?php echo $this->Form->input('address', array('value' => $address, 'label' => " address")); ?>
	<?php echo $this->Form->end('Set address'); ?>
</div>

<div id="balance" style="width: 50%; height: 180px; float: right;">
	<h2 style='color: pink;'>much balance</h2>
	<span style='font-size: 75px;'><?php echo $balance ?> </span>
</div>
<div style='clear: both;' />
<div style='float: left; width: 50%; height: 180px;'>
	<h2>such value</h2>
	<div class='ticker doge'>
		<marquee behavior="scroll" direction="left" scrollamount=15 style='font-size: 75px;'><?php echo $ticker->last?> BTC (£<?php echo round(($ticker->last * $balance) * $btc->GBP->last, 2); ?>)</marquee>
	</div>
</div>

<div style='float: right; width: 50%; height: 180px;'>
	<h2>so difficult</h2>
	<div>
		<marquee behavior="scroll" direction="left" scrollamount=15 style="font-size: 75px;"><?php echo $diff; ?></marquee>
	</div>
</div>

<h2 style='clear: both; color: green;'>many trades</h2>

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