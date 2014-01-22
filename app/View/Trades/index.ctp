<div style='background-color: orange;'>
	<h1 style='background-color: rgba(0, 0, 0, 0); color: yellow; display: inline;'>wow. <span style='color: blue'>such coin.</span></h1>
	<?php echo $this->Html->image("dogecoin.png", array('style' => 'height: 84px; vertical-align: top; float: right;', 'title' => "such image. wow.")); ?>
</div>

<div id="testy" style="width: 50%; height: 180; float: left;">
	<h2 style='color: fuchsia;'>very address</h2>
	<?php echo $this->Form->create('Trade', array('action' => 'setAddress')); ?>
	<?php echo $this->Form->input('address', array('value' => $address, 'label' => "", 'style' => 'font-size: 50px')); ?>
	<?php echo $this->Form->end('Set address'); ?>
</div>

<div id="balance" style="width: 50%; height: 180px; float: right;">	
	<h2 style='color: lime;'>much balance</h2>
	<span style='font-size: 75px;'><?php echo $balance ?> </span>
</div>

<div style='clear: both;' />

<div style='float: left; width: 50%; height: 180px;'>
	<h2 style='color: cyan;'>such value</h2>
	<div class='ticker doge'>
		<!--<marquee behavior="scroll" direction="left" scrollamount=15 style='font-size: 75px;'><?php echo $ticker->last?> BTC (£<?php echo round(($ticker->last * $balance) * $btc->GBP->last, 2); ?>)</marquee>-->
		<span style='font-size: 75px;'><?php echo $ticker->last?> BTC (£<?php echo round(($ticker->last * $balance) * $btc->GBP->last, 2); ?>) </span>
	</div>
</div>

<div style='float: right; width: 50%; height: 180px;'>
	<h2 style='color: red'>so difficult</h2>
	<div>
		<!-- <marquee behavior="scroll" direction="left" scrollamount=15 style="font-size: 75px;"><?php echo $diff; ?></marquee> -->
		<span style="font-size: 75px;"><?php echo $diff; ?></spa>
	</div>
</div>

<h2 style='clear: both; color: green;'>many trades</h2>

<div>
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
</div>