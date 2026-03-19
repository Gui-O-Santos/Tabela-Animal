<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Animal: Leão</title>

    <style>
        body{ text-align: center; font-size:20px;align-items: center;}
        table{width: 1300px;margin: auto;}
        td{padding: 10px;}
        th{padding: 10px;}
         a{color: #73007eff;text-decoration: none;}
        a:hover {color: #00ff22ff;}

    </style>

</head>
<body>

    <h1>Animais</h1>

    <table border="1">

        <thead>
            <tr>
                <th>Animal</th>
                <th>Feito por:</th>
            </tr>
            <tr>
        </thead>

        <tbody>
            <tr>
                <td><a href="https://localhost/animais/tabela">Leão</a></td>
                <td>Guilherme Oliveira Santos</td>
            </tr>

			<tr>
                <td><a href="https://localhost/animais/pwtabela">Aranha</a></td>
                <td>Eduardo R Monteiro</td>
			</tr>
        </tbody>
    </table>
    <p>
        Data do Servidor:
        <?php echo date('d/m/Y'); ?>
    </p>

</body>
</html>