<!DOCTYPE html>
<html lang="ja">

<!--Header-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" />
</head>

<!--Body-->
<body>
	<div style="text-align:center;">
		あなたは誰ですか？<br/>

		<?php if ($_POST['showme']) { ?>
			<?php echo "私は".$_POST['name']."です！"; ?>
		<?php } ?>

		<form method="post">
			名前：<input type="text" name="name" /><br/>
			<input type="submit" name="showme" value="答える" />
		</form>
	</div>
</body>

</html>
