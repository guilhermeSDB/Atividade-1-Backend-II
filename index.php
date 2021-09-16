<?php

include_once ('Model/Turma.php');
include_once ('Model/Aluno.php');


$Turmas = [ 
    'Aluno' => [
        'nome' => $aluno,
        'ra' => $ra,
        'nota1' => $nota1,  
        'nota2' => $nota2,
        'nota3' => $nota3,
        'nota4' => $nota4, 
    ]   
    
];

//echo '<pre>';
//print_r($Turmas);
//echo '<pre/>';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Atividade 1</title>
</head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">RA</th>
                    <th scope="col">Nota 1</th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Nota 3</th>
                    <th scope="col">Nota 4</th>
                    </tr>
                </thead>
                <?php foreach($Turmas as $item): ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $item ['nome']?></th>
                        <td><?= $item['ra'] ?></td>
                        <td><?= $item['nota1'] ?></td>
                        <td><?= $item['nota2'] ?></td>
                        <td><?= $item['nota3'] ?></td>
                        <td><?= $item['nota4'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
                <?php endforeach; ?> 
            </table>
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>