<?php require_once('Chaustore.php'); ?>

<html>
  <head>
      <link rel="stylesheet" href="visualised_brand.css">
    <title>Visualised</title>
  </head>
<body>
<img class="nike"src="shoes2.jpg"alt="">
<a class="boutton4"href="brand_gestion.php">Return</a>
    <h1>Choose your style</h1>
  <?php
    //requête SQL:
    $sql = "SELECT `id`, `name`, `logo`
	      FROM brand
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
           <th>{$result['logo']}</th>
       </tr>";
    }            
  ?>

</body>
</html>