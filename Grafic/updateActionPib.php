<?php 
    require_once './conn.php';
    $idenzomiguel = filter_input(INPUT_POST, 'idenzomiguel');
    $yearenzomiguel = filter_input(INPUT_POST, 'yearenzomiguel');
    $valueenzomiguel = filter_input(INPUT_POST, 'valueenzomiguel');
  

    $stmt = $conn->prepare("UPDATE  graphicpibenzomiguel SET yearenzomiguel = :YEARENZOMIGUEL, valueenzomiguel = :VALUEENZOMIGUEL WHERE idenzomiguel = :IDENZOMIGUEL");

    $stmt->bindValue(':IDENZOMIGUEL', $idenzomiguel);
    $stmt->bindValue(':YEARENZOMIGUEL', $yearenzomiguel);
    $stmt->bindValue(':VALUEENZOMIGUEL', $valueenzomiguel);
   
 
    $stmt->execute();
    header("Location: pib.php");
 ?>


   

