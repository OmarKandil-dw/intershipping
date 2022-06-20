
<?php
session_start();
include 'connection.php';
$id_client = $_SESSION["id_client"];

if(isset($_POST["lougout"])){
            session_destroy();
            header("location: log-in.php");      
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
  </head>
  <body class="hist">
    
</head>
<body class="hist">


<button style="background:none;"> <a href="index2.php" style=" text-decoration:none; color: #000000;">Précedent </a> </button>


    <form action="" method="POST">
    <div id="" style="margin-left: 85%;margin-top:20px;"> 
    <button style="    background: none; display: flex; border: none; flex-direction: row-reverse;" type="submit"  name="lougout"><img src="./logout.png" alt="" width="20%" style="cursor : pointer; margin-right:22px; margin-top:22px; " ></button></div>
</form>
      <h1>Historique</h1>
    <div class="table" >
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Poids</th>
      <th scope="col">Longueur</th>
      <th scope="col">Largeur</th>
      <th scope="col">Hauteur</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
        
<?php 

include "connection.php";
    $id_client = $_SESSION["id_client"];
    
    $sql="SELECT * FROM `client` C
    INNER JOIN simulation S
    ON C.id_client = S.id_client
     WHERE C.id_client ='$id_client'";
    $result = $conn->query($sql); 

      while($row = mysqli_fetch_assoc($result)) {

        echo' <tr>
           <td>'.$row['id_client'].'</td>
                <td>'.$row['poids'].'</td>
                <td>'.$row['longueur'].'</td>
                 <td>'.$row['largeur'].'</td>
                 <td>'.$row['hauteur'].'</td>
                 <td>'.$row['total'].'</td>
                 </tr>';
      }
 ?>
  </table>
    </div>

</body>
</html>