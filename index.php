<?php

include_once ('Model/Turma.php');
include_once ('Model/Aluno.php');
include_once ('Dados/array.php');


 $contador = 0;
 $grupoAlunos = ("");
 $alunosCadastrados = sizeof($dados);
 $cont = 5;


 for ($i = 1; $i <= $alunosCadastrados; $i++) {
   $ObjAlunos['Aluno' . $i] = new Aluno();
 }

 extract($ObjAlunos, EXTR_SKIP);

 foreach ($dados as $item) {
   $contador++;
   foreach ($item as $key => $value) {
     $ObjAlunos['Aluno' . $contador]->__set($key, $value);
   }
 }


//echo '<pre>';
//print_r($Turma);
//echo '<pre/>';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <!-- CSS Import -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/toastr.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Atividade 1 - Unicesumar</title>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col my-5 text-center">
                <?php $turma = new Turma('A-150'); 

                for ($i = 1; $i <= $alunosCadastrados; $i++) {
                    if ($i <= 5) {
                        $turma->addAlunoTurma($ObjAlunos['Aluno' . $i]);
                        print 'O aluno <b>' . $ObjAlunos['Aluno' . $i]->nome . '</b> foi inserido na turma.<br>';
                    } else {
                        print '<span class="text-danger " ><b> Erro - Turma Lotada</b></span>';
                    }
                }
                ?>
                </div>            
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Nota 1</th>
                        <th scope="col">Nota 2</th>
                        <th scope="col">Nota 3</th>
                        <th scope="col">Nota 4</th>
                        <th scope="col">Media</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i=0; $i <5 ; $i++) { 
                        print '<tr>'.
                            '<td>'.$turma->alunos[$i]->nome.'</td>'.
                            '<td>'.$turma->alunos[$i]->nota1.'</td>'.
                            '<td>'.$turma->alunos[$i]->nota2.'</td>'.
                            '<td>'.$turma->alunos[$i]->nota3.'</td>'.
                            '<td>'.$turma->alunos[$i]->nota4.'</td>'.
                            '<td>'.$turma->alunos[$i]->getMedia().'</td>'.
                            '</tr>';
                    }
                    ?>                       
                    </tbody>
                </table>
            </div> 

            <div class=row>
                <div class="col-md-6">
                    <span>Média da Turma</span>
                </div>
                <div class="col-md-6 text-end">
                    <span class="text-danger"><b><?php echo $turma->getMediaTurma() ?></b></span>
                </div>                
            </div>           
        </div>

        <footer>
            <div class="d-flex justify-content-center py-3 my-4">
                <p>Made by Guilherme S Barros.</p>

            </div>

        </footer>
    <!--Import JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="js/toastr.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>        
        $(document).ready(function(){                        
            toastr.options = {
            "closeButton": false,
            "debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-full-width",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
            toastr["info"]("<?php $turma = new Turma('A-150');?>", "Informação ")
        })
        
    </script>
    </body>
    
</html>