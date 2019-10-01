<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_category.css">
    <title>Visualised</title>
  </head>
<body>
<img class="nike"src="shoes5.jpg"alt="">
<a class="boutton4"href="category_gestion.php">Return</a>
    <h1>Which one ?</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `id`, `name`
	      FROM category
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
</body>
</html>