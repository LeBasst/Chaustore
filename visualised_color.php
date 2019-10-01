<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_color.css">
    <title>Visualised</title>
  </head>
<body>
<img class="nike"src="shoes7.jpg"alt="">
    <h1>What is your color ?</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `id`, `name`
	      FROM color
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
  <a class="boutton4"href="chausstore.php">Return</a>
</body>
</html>