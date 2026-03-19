<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Animal</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; }
        table { width: 1250px; margin: auto; }
        a{color: #ffffffff;background-color: black;  font-size:40px;text-decoration: none;border: 3px solid black; border-radius: 45px;}
        a:hover {color: #ff5050ff;}
    </style>
</head>
<body>
    <h1>Tarântula</h1>
    <h2>Grammostola pulchra</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Descrição</th>
                <th>Alimentação</th>
            </tr>
        </thead>

        <tbody>
        <tr>
            <th><img src="grammostola pulchra.jpg" height="290px"; width="400px"; ></th>
            <td>
            Uma espécie de tarântula de coloração escura e que pertencente a família Theraphosidae. Apesar de ser uma uma excelente caçadora noturna e medir por volta de 30cm, ela é considerada muito dócil. Vivem cerca de 20-30 anos e são encontradas em ambiente semi-áridos
            </td>

            <td>Se alimente principalmente de baratas argentinas, grilos e entre outros insetos menores</td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <a href="https://localhost/animais/">Voltar</a>
    <br>
    <p>
        Data:
        <?php echo date('d/m/Y'); ?>
    </p>
</body>
</html>