<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Oficina do Drigo</title>
</head>

<body>
    <h1>Oficina do Drigo</h1>
    <form action="processar.php" method="post">
        <table>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
            </tr>
            <tr>
                <td>Pneu</td>
                <td><input type="number" name="pneu" id="pneu"></td>
            </tr>
            <tr>
                <td>Óleo</td>
                <td><input type="number" name="oleo" id="oleo"></td>
            </tr>
            <tr>
                <td>Velas</td>
                <td><input type="number" name="velas" id="velas"></td>
            </tr>
        </table>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>