<?php
    require_once './conn.php';
    
    $stmt = $conn->prepare("SELECT * FROM graphicpibenzomiguel");
    $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <table border ="1">
        <tr><th>Dados Pib</th></tr>
        <tr>
            
            <th>Anor</th>
            <th>Valor</th>
            <th>Açoes</th>
        </tr>
        <?php foreach ($list as $user): ?>
        <tr>
            
            <td><?= $user['yearenzomiguel']; ?></td>
            <td><?= $user['valueenzomiguel']; ?></td>
            <td>
                <a href="updatePib.php?id=<?= $user['idenzomiguel']; ?>">Editar</a>
        
                <a href="deletePib.php?id=<?= $user['idenzomiguel']; ?>">Excluir</a>
            
            </td>
        </tr>
        <?php endforeach; ?>
     

    </table>
    <div>
 <button style="background-color: gray; border-color: gray;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerValueModal" onclick="window.location.href = 'pib.php';">Retornar ao Grafico Pib</button>
 </div>
</body>
</html>