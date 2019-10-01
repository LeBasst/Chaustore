<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_stock.css">
    <title>Visualised</title>
  </head>
<body>
<img class="nike"src="shoes12.jpg"alt="">
    <h1>Yes! We have it !</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `stock`
	      FROM stock
          ORDER BY stock" ;
 
    //exécution de la requête:
    $request = mysqli_query( $cnx, $sql ) ;

     echo "<table>";
 
    //affichage des données:
    
    while( $result = mysqli_fetch_array( $request ) )
    {
       echo"
       <tr>
           <th>{$result['stock']}</th>
         
       </tr>";
    }            
  ?>
  <a class="boutton4"href="stock_gestion.php">Return</a>
</body>
</html>