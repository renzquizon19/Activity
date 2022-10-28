<?php
	$VendoMachineArr = array(
		array(
			'Coke' => 15
		),
		array(
			'Sprite' => 20
		),
		array(
			'Royal' => 20
		),
		array(
			'Pepsi' => 15
		),
		array(
			'Mountain Dew' => 20
		),
	);

	$VendoMachineSizesArr = array(
		array(
			'Regular' => 'Regular'
		),
		array(
			'Up-Size (Add ₱5)' => 'Up-Size'
		),
		array(
			'Jumbo (Add ₱10) ' => 'Jumbo'
		),
	);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vendo Machine</title>
</head>
<body>

	<h2>Vendo Machine</h2>
	<form method="post">


		<fieldset style="width:450px">
			<legend>Products: </legend>
				<?php
					if (isset($VendoMachineArr)) {
						foreach ($VendoMachineArr as $VendoMachineKey => $VendoMachineValue) {
							foreach ($VendoMachineValue as $VendoMachineKeyTwo => $VendoMachineValueTwo) {
						echo "<input type= 'checkbox' name ='vendoMachineSoda[". $VendoMachineKeyTwo ."]' value='" . $VendoMachineValueTwo . "'>
						<label>" . $VendoMachineKeyTwo . ' - ₱ ' . $VendoMachineValueTwo . "</label><br>";
						}
					}
				}
				?>
		</fieldset>
		<br>
		<fieldset style="width:450px">

			<legend>Options: </legend>
			<label for="sizeSelect">Size</label>
				<select type="sizeSelect" name="sizeSelect">
					<?php
						if(isset($VendoMachineSizesArr)){
							foreach ($VendoMachineSizesArr as $VendoMachineSizesKey => $VendoMachineSizesValue) {
								foreach ($VendoMachineSizesValue as $VendoMachineSizesKeyKeyTwo => $VendoMachineSizesValueTwo) {
									echo"<option value='" . $VendoMachineSizesValueTwo . "'>" . $VendoMachineSizesKeyKeyTwo . "</option>";
								}
							}
						}
					?>
				</select>
				<label for="numQuantity">Quantity</label>
				<input type="number" name="numQuantity" id="numQuantity" min="1" max="100"><br>
				<br>
				<button type="submit" name="btnSubmit">Check Out</button>
				<button type="reset">Reset</button>
		</fieldset>
	</form>

			<?php if(isset($_POST['btnSubmit'])):?>
				<?php
						if (isset($_POST['vendoMachineSoda']) && isset($_POST['sizeSelect'])) {
					
							$Quantity = $_POST['numQuantity'];
							$Size = $_POST['sizeSelect'];
							$Soda = $_POST['vendoMachineSoda'];

								if($Quantity == 1){
									$singularPlural = "piece";
								}
								else{
									$singularPlural = "pieces";
								}

								if($Size == 'Regular'){
									$addOn = 0;
								}
								elseif ($Size == 'Up-Size') {
									$addOn = 5;
								}
								elseif ($Size == 'Jumbo') {
									$addOn = 10;
								}

								echo "<hr><h3>Purchase Summary: </h3>";

								foreach ($Soda as $SodaKey => $SodaValue) {
									echo
									"<ul>
										<li>" . $Quantity . " " . $singularPlural . " of " . $Size . " " . $SodaKey . " amounting to ₱". $totalValue = 
										intval($SodaValue) * intval($Quantity) + ($addOn * intval($Quantity)) .
										"</li>
									</ul>";
								}

							$total = ($Quantity * sizeof($Soda));
							$grandTotal = (array_sum($Soda) + $addOn * $Quantity) * $Quantity;

							echo "<label><b>Total Number Of Items: </label>" . $total . "<br>";
							echo "<label><b>Total Amount: </label>" . $grandTotal . "<br>";
						}
						else{
						echo "<hr>Please Select A Product :)";
						}
				?>
		<?php endif; ?>
</body>
</html>