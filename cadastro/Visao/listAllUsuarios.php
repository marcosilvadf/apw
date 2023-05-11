<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuários</title>
    <style>
        table
        {
            border-collapse: collapse;
        }

        tr:nth-child(even)
        {
            background-color: #bdc3c7;
        }

        th, td
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
            <tr>
                <th>
                    Identificação
                </th>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
            </tr>
    <?php
    require_once '../Modelo/DAO/ClassUsuarioDAO.php';
    $usuarioDAO = new ClassUsuarioDAO;
    $us = $usuarioDAO->listarUsuarios();
    foreach ($us as $usuario) {
        ?>
            <tr>
                <td>
                    <?= $usuario['idUsuario']?>
                </td>
                <td>
                    <?= $usuario['nome']?>
                </td>
                <td>
                    <?= $usuario['email']?>
                </td>
            </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>