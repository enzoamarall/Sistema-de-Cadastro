<?php 
    require_once './conn.php';
    $id = filter_input(INPUT_POST, 'id');
    $year = filter_input(INPUT_POST, 'year');
    $compra = filter_input(INPUT_POST, 'compra');
  

    $stmt = $conn->prepare("UPDATE  SET dadoselton year = :YEAR, valor_compra = :COMPRA WHERE id = :ID");

    $stmt->bindValue(':ID', $id);
    $stmt->bindValue(':YEAR', $year);
    $stmt->bindValue(':SALE', $compra);
   
 
    $stmt->execute();
    
 ?>


   

?>