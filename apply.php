<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lemon's Website</title>
	<?php include '/template/css-rqmts/link.php'; ?>
	<link rel="stylesheet" href="/apply.css" type="text/css"/>
</head>
<body>
	<?php include '/template/base.php'; ?>
	<?php include '/template/header.php'; ?>
	<div id="wrapper">
		<form>
			<?php
				include 'apply-info.php';
				$array = FormInfo::getFormInfo();
				foreach($array as $key => $value){
					if(is_array($value)){
						echo $key . ': </br>';
						asort($value);
						$prevValue = null;
						foreach($value as $key2 => $value2){
							if(is_int($key2)){
								echo $value2 . ': ';
								echo '<input type="checkbox" name="' . $value2 . '">';
							}else{
								if($prevValue!=$value2){
									if($prevValue!=null){
										echo '</br>';
									}
									$prevValue = $value2;
									echo $prevValue . ': ';
									echo '</br>';
								}
								echo $key2 . ': ';
								echo '<input type="checkbox" name="' . $key2 . '">';
							}
						}
						echo '</br>';
					}else{
						echo $key . ':';
						echo '<input type="' . $value . '" name="' . $key . '">';
						echo '</br>';
					}
				}
			?>
		</form>
	</div>
	<?php include '/template/footer.php'; ?>
</body>
</html>