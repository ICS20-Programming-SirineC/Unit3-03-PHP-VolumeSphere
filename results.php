<?php
  // get the radius from the textfield
  $radius = $_POST['radius'];

  // calculate the volume
  $volume = 4.0/3.0 * pi() * pow($radius, 3);

  // round the volume to 2 decimal places
  $rounded_volume = round($volume, 2);
?>
<h3>Results:</h3>
The volume of the sphere is <?php echo $rounded_volume ?>cm<sup>3</sup>.