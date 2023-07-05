<?php 
    require_once './conn.php';

    $id = filter_input(INPUT_GET, 'id');

    $stmt = $conn->prepare("SELECT * FROM graphicpibenzomiguel WHERE idenzomiguel = :IDENZOMIGUEL");
    
    $stmt->bindValue(':IDENZOMIGUEL', $id);

    $stmt-> execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateActionPib.php" method="POST">
        <input type="hidden" name="idenzomiguel" value="<?= $user['idenzomiguel']; ?>" readonly>
        <div>
            <input type="number" name="yearenzomiguel" value="<?= $user['yearenzomiguel']; ?>">
        </div>

        <div>
            <input type="number" name="valueenzomiguel" value="<?= $user['valueenzomiguel']; ?>">
        </div>


        <div>
            <input type="submit"  value="atualizar">
        </div>

    </form>
    
</body>
</html>