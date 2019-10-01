<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_product.css">
    <title>Visualised</title>
  </head>
<body>
<img class="nike"src="shoes10.jpg"alt="">
<img class="nike"src="shoes10.jpg"alt="">

<a class="boutton4"href="product_gestion.php">Return</a>
    <h1>Production Work in Progress</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `name`,`image`,`price`,`gender`
	    FROM product
          ORDER BY id" ;
 
    //exécution de la requête:
    $request = mysqli_query( $cnx, $sql ) ;

     echo "<table>";
 
    //affichage des données:
    while( $result = mysqli_fetch_array( $request ) )
    {
       echo"
       <tr>
           <th>{$result['name']}</th>
           <th>{$result['image']}</th>
           <th>{$result['price']}</th>
           <th>{$result['gender']}</th>
       </tr>";
    }            
  ?>
</body>
</html>