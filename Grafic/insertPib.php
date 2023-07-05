<?php 
    require_once './conn.php';

    $yearenzomiguel = filter_input(INPUT_POST, 'year');
    $valueenzomiguel = filter_input(INPUT_POST, 'compra');
   
   

   $stmt = $conn->prepare("INSERT INTO graphicpibenzomiguel (yearenzomiguel, valueenzomiguel) VALUES(:YEARENZOMIGUEL,:VALUEENZOMIGUEL)");

   $stmt->bindValue(':YEARENZOMIGUEL', $yearenzomiguel);
   $stmt->bindValue(':VALUEENZOMIGUEL', $valueenzomiguel);
  

   $stmt->execute();
   header("Location: listPib.php");
?>