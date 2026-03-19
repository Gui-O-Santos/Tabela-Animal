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
        a{color: #ffffffff;background-color: black;  font-size:40px;text-decoration: none;border: 3px solid black; border-radius: 45px;}
        a:hover {color: #00ccffff;}
    </style>

</head>
<body>

    <h1>Leão</h1>

    <table border="1">

        <thead>
            <tr>
                <th>Imagem</th>
                <th>Descrição</th>
                <th>Alimentação</th>
            </tr>
            <tr>
        </thead>

        <tbody>
            <tr>
                <td><img src="leão.jpg" width="480px"; ></td>
                <td> 
                    O leão (Panthera leo) é um grande felino mamífero carnívoro, conhecido como "rei da selva", que habita savanas africanas e partes da Índia. Caracteriza-se por corpo musculoso, pelagem amarelo-dourada, caça noturna e, nos machos, uma juba espessa. Vivem em grupos sociais (alcateias), podem medir até 3 metros de comprimento (incluindo a cauda) e pesar entre 150 e 250 kg, sendo os machos maiores que as fêmeas.
                </td>

                <td>
                   Leões são carnívoros, ou seja, alimentam-se de outros animais. Entre os animais predados por leões, estão a zebra, girafa, antílope, gnu e outros animais da savana.
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <a href="https://localhost/animais/">Voltar</a>
    <br>
    <p>
        Data do Servidor:
        <?php echo date('d/m/Y'); ?>
    </p>

</body>
</html>