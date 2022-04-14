<?php
	// get the hours and hourly rate from text field
	$Radius = $_POST['radius'];
?>
<?php
	// calculate the volume
	$volume = (4/3) * pi () * $Radius ** 3
?>
<?php
  $volume = number_format($volume, 2);
?>

<h3>Results:</h3>
The volume is <?php echo "$volume" ?> cm<sup>3</sup>.
</div>