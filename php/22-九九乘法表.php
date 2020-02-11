<!DOCTYPE html>
<html>
<head>
	<title>我是九九乘法表</title>
</head>
<body>
	<p>下面是九九乘法表:</p>
	<?php for ($i=1; $i < 10; $i++): ?>
		<?php for ($j=1; $j <= $i; $j++):?>
			<p>这是一行<?php echo $j."*".$i."=".$j*$i; ?></p>
		<?php endfor; ?>
	<? endfor; ?>
</body>
</html>

<?php for ($i=1; $i < 10; $i++): ?>
	<?php for ($j=1; $j <= $i; $j++):?>
		<?php echo $j."*".$i."=".$j*$i; ?>
	<?php endfor; ?>
	<?php echo "\n"; ?>
<? endfor; ?>
