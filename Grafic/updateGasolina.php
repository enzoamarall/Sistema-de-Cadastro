<?php 
    require_once './conn.php';

    $idelton = filter_input(INPUT_GET, 'id');

    $stmt = $conn->prepare("SELECT * FROM dadoselton WHERE id = :ID");
    
    $stmt->bindValue(':ID', $idelton);

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
    <form action="updateAction.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id']; ?>" readonly>
        <div>
            <input type="number" name="year" value="<?= $user['yearelton']; ?>">
        </div>

        <div>
            <input type="number" name="sale" value="<?= $user['salelton']; ?>">
        </div>


        <div>
            <input type="submit"  value="atualizar">
        </div>

    </form>
    
</body>
</html>