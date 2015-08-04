<?php 
if(isset($_POST['select_name'])){ // select_name will be replaced with your input filed name
	$getInput = $_POST['select_name']; // select_name will be replaced with your input filed name
	$selectedOption = "";
	foreach ($getInput as $option => $value) {
		$selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
	}
	echo $selectedOption; 
}
?>
<form action="" method="POST">
	<select name="select_name[]" id="" multiple>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select>
	<input type="submit">
</form>
