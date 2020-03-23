//Realisé par Sana Er-rachedy 


<!DOCTYPE html>
<html>
<head>
	<title>Shuffle</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

</head>
<body >
	<h3>EXO1</h3>
	<center style="padding-top: 30px "><h1 style="color: #B75844">Délice des Fruits et Légumes</h1></center>
	<div class="container">
	<div class="row">
		
    <div class="col" style="padding-top: 20px">
    	<div class="col-12 text-center">
            <h2 class="section-title mb-3">Fruits</h2>
        </div>
	<?php
	$fruits = array
		(
		    'images/fruit1.jpg',
		    'images/fruit2.jpg',
		    'images/fruit3.jpg',
		    'images/fruit4.jpg',
		);

		shuffle($fruits); // the magic

		foreach ($fruits as $fruits)
		{
		    echo '<div class="image-entry">';
		    echo "\t" . '<img src="' . $fruits . '" / style="width:500px;height:600px;">';
		    echo '</div>';
		}
    ?>
</div>
<div class="col" style="padding-top: 20px">
	<div class="col-12 text-center">
            <h2 class="section-title mb-3">Légumes</h2>
        </div>
	<?php
	$fruits = array
		(
		    'images/veg1.jpg',
		    'images/veg2.jpg',
		    'images/veg3.jpg',
		    'images/veg4.jpg',
		);

		shuffle($fruits); // the magic

		foreach ($fruits as $fruits)
		{
		    echo '<div class="image-entry">';
		    echo "\t" . '<img src="' . $fruits . '" / style="width:500px;height:600px;">';
		    echo '</div>';
		}
    ?>
</div>
</div>
</div><br><br>

<h3>EXO2</h3>
<center style="padding-top: 30px "><h1 style="color: #B75844">Table Commandes</h1>
	<div class="container">
		<?php 
		$file = fopen("Commande.txt", "r");
		$array = file('Commande.txt');

		foreach ($array as $array)
		{
		 echo $array;
		 echo "<br>";
		 echo "<br>";
		}
		fclose($file);
	?>

	</div></center><br><br><br>

<h3>EXO2</h3>
<center style="padding-top: 30px "><h1 style="color: #B75844">Centrale d'achats</h1>
	<div class="container">
		<?php 
			$file = fopen("Commande.txt", "r");
			$array = file('Commande.txt');
		    $array = file('Commande.txt');

			foreach ($array as $array)
			{
			    $str = $array;
			    print_r (explode("|",$str));
			    echo "<br>";
			    echo "<br>";
			}

			fclose($file);
        ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">N° Commande</th>
      <th scope="col">N° Client</th>
      <th scope="col">Date Commande</th>
      <th scope="col">Désignation Article</th>
      <th scope="col">Quantité(Pal)</th>
      <th scope="col">Prix unitaire(DH)</th>
      <th scope="col">Date Livraison</th>
      <th scope="col">Adresse Client</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
 
    </tr>

    
  </tbody>
</table>


	</div></center>
		
</body>
</html>