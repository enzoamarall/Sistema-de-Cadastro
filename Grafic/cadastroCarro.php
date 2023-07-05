<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="insertCarro.php" method="post">
        <div>
            <label for="year">Informe o Ano:</label>
            <input type="number" name="year">
        </div>
        
        <div>
            <label for="compra">Informe o valor de compra:</label>
            <input type="number" name="compra">
        </div>

        <div>
            <input type="submit" value="Calculor">
        </div>
            

    </form>
</body>
</html>