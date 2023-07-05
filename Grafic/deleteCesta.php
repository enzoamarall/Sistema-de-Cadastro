<?php 

    require_once './conn.php';
    
    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $stmt = $conn->prepare("DELETE FROM graphiccestabasicaenzomiguel WHERE idenzomiguel = :IDENZOMIGUEL");
        
        $stmt->bindValue(':IDENZOMIGUEL', $id);

        $stmt->execute();

        header("Location: cesta.php");
    }