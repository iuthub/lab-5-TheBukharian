<?php 
	$check1=$_REQUEST["sucker_name"] && $_REQUEST["sucker_ccard_code"];
	$check2=$_REQUEST["sucker_name"]!="" && $_REQUEST["sucker_ccard_code"]!="";
	$isFilledCompletely=false;
	if($check1&&$check2)
		{
			$isFilledCompletely=true;
			$sucker_name=$_REQUEST["sucker_name"];
			$sucker_section=$_REQUEST["sucker_section"];
			$sucker_ccard_code=$_REQUEST["sucker_ccard_code"];
			$sucker_ccard_type=$_REQUEST["sucker_ccard_type"];
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>The way to better sucking?</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php  if($isFilledCompletely) {?>
	<h1>Thanks, sucker!</h1>
	<p>Your information has been recorded</p>
<dl>
	<dt>Name</dt>
		<dd>
			<?php echo($sucker_name);?>
		</dd>

	<dt>Section</dt>
		<dd>
			<?php echo($sucker_section);?>
		</dd>

	<dt>Credit Card</dt>
		<dd>
			<?php echo($sucker_ccard_code."(".$sucker_ccard_type.")");?>
		</dd>
	<?php file_put_contents("./suckers.txt","{$sucker_name};{$sucker_section};{$sucker_ccard_code};{$sucker_ccard_type}\n",FILE_APPEND) ?>
	<dt>Here are all suckers who have submitted to here</dt>
		<dd>
			<pre> 
<?php echo(file_get_contents("./suckers.txt")); ?>
			</pre>
		</dd>
</dl>
<?php } else {?>
	<h1>Sorry</h1>
	<p>You didn't filled out the form completely!!!<a href="buyagrade.html">Try again?</a></p>
<?php } ?>
</body>
</html>