<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefones</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        </style>
</head>
<body>
    
    <h1>SMARTPHONES</h1>

    <pre>
    <?php 

        require_once "banco2.php";

        $q = "SELECT s.cod, s.nome AS smartphone, e.nome AS empresa FROM smartphone s JOIN empresa e ON s.empresa_cod = e.cod";
    
        // $q = "SELECT * FROM empresa";

        $busca = $banco->query($q);
        echo print_r($busca);

        // $obj_smartphone = $busca->fetch_object();
        // echo print_r($obj_smartphone);
    
    ?>
    </pre>


    <table>
    <tr>
        <th>COD</th>
        <th>NOME</th>
        <th>EMPRESA</th>
        <th></th>
    </tr>
    
    <?php 
        while ($obj_smartphone = $busca->fetch_object()) { 
            echo "<tr>";
            echo "<td>$obj_smartphone->cod</td>";
            echo "<td>$obj_smartphone->smartphone</td>";
            echo "<td>$obj_smartphone->empresa</td>";
            echo "<td> <a href=\"formEditar.php?p=". $obj_smartphone->cod . "\">editar</a></td>";
            echo "</tr>";
        }
    ?>

    </table>


</body>
</html>