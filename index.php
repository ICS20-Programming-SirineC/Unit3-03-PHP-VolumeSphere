<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Unit3-03-PHP-VolumeSphere">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Sirine Cherkaoui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
      <link rel="manifest" href="./favicon/site.webmanifest" />

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Sphere in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Sphere in PHP</h1>";
			echo "<h3>This program will calculate the volume of a sphere.</h3>";
		?>
		<!-- form to get the radius from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="radius">Radius (cm):</label>
      <input type="text" id="radius" placeholder="Enter the radius (cm)" name="radius"><br><br>
      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page -->
			<iframe id="volume" name="results">			
	    </iframe>

	</body>
</html>