<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_size.css">
    <title>Visualised</title>
  </head>
<body>
    <h1>Tall or Small</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `id`, `name`
	    FROM size
          ORDER BY id" ;
 
    //exécution de la requête:
    $request = mysqli_query( $cnx, $sql ) ;

     echo "<table>";
 
    //affichage des données:
    while( $result = mysqli_fetch_array( $request ) )
    {
       echo"
       <tr>
           <th>{$result['id']}</th>
           <th>{$result['name']}</th>
       </tr>";
    }            
  ?>
  <a class="boutton4"href="size_gestion.php">Return</a>
</body>
</html>