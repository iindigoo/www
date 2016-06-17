<?php 
	function convert_to_meters($value, $from_unit){
		switch ($from_unit) {
		case 'inches':
			return $value * 0.0254;
			break;
		case 'feet':
			return $value * 0.3048;
			break;
		case 'yards':
			return $value * 0.9144;
			break;
		case 'miles':
			return $value * 1609.344;
			break;
		case 'millimeters':
			return $value * 0.001;
			break;
		case 'centimeters':
			return $value * 0.01;
			break;
		case 'meters':
			return $value;
			break;
		case 'kilometers':
			return $value * 1000;
			break;
		default: 
			return "unsupported";
		}
}
$from_value = '';
$to_value = '';
$to_unit = '';
$from_unit = '';

if (!empty($_POST)) {
if($_POST['submit']) {
	$from_value = $_POST['from_value'];
	$from_unit = $_POST['from_unit'];
	$to_unit = $_POST['to_unit'];

	$to_value = convert_to_meters($from_value, $from_unit);
} 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Length</title>
</head>
<body>
	<div class="container">
		<h1>Length</h1>
			<form method="post" action="">
				<div class="entery">
					<label>Form:</label>&nbsp;
					<input class="input" type="text" name="from_value" value="<?php echo $from_value; ?>"/> &nbsp;
						<select name="from_unit">
							<option value="inches"<?php if($from_unit == 'inches') {echo " selected";} ?>>Inches</option>
							<option value="feet"<?php if($from_unit == 'feet') {echo " selected";} ?>>Feet</option>
							<option value="yards"<?php if($from_unit == 'yards') {echo " selected";} ?>>yards</option>
							<option value="miles"<?php if($from_unit == 'miles') {echo " selected";} ?>>Miles</option>
							<option value="millimeters"<?php if($from_unit == 'millimeters') {echo " selected";} ?>>Millimeters</option>
							<option value="centimeters"<?php if($from_unit == 'centimeters') {echo " selected";} ?>>Centimeters</option>
							<option value="meters"<?php if($from_unit == 'meters') {echo " selected";} ?>>Meters</option>
							<option value="kilometers"<?php if($from_unit == 'kilometers') {echo " selected";} ?>>Kilometers</option>
						</select>	
					<br>
					<label>To:</label>&nbsp;
					<input class="input" type="text" name="to_value" value="<?php echo $to_value; ?>" disabled/> &nbsp;
						<select name="to_unit">
							<option value="inches"<?php if($to_unit == 'inches') {echo " selected";} ?>>Inches</option>
							<option value="feet"<?php if($to_unit == 'feet') {echo " selected";} ?>>Feet</option>
							<option value="yards"<?php if($to_unit == 'yards') {echo " selected";} ?>>yards</option>
							<option value="miles"<?php if($to_unit == 'miles') {echo " selected";} ?>>Miles</option>
							<option value="millimeters"<?php if($to_unit == 'millimeters') {echo " selected";} ?>>Millimeters</option>
							<option value="centimeters"<?php if($to_unit == 'centimeters') {echo " selected";} ?>>Centimeters</option>
							<option value="meters"<?php if($to_unit == 'meters') {echo " selected";} ?>>Meters</option>
							<option value="kilometers"<?php if($to_unit == 'kilometers') {echo " selected";} ?>>Kilometers</option>
						</select>	
				</div>
				<input type="submit" name="submit" value="submit">
			</form>
	</div>
</body>
</html>