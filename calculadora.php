<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"integrity="sha384-BmbxuPWQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH">
    <title>Taller Calculadora de PHP</title>
</head>
<body>
  <div class="container">
      <h1>Calculadora PHP</h1>
      <hr>
      <form method="post">
          <label>Numero 1</label>
          <input type="number"   max=10000 min=0 name="numero1" placeholder="0" require autofocus> 
          <label>Numero 2</label>
          <input type="number"   max=10000 min=0 name="numero2" placeholder="0" require autofocus> 
           <hr>
           <input type="radio"  class="form-check-input" name="opcion" value="sumar" required>Sumar
           <input type="radio"  class="form-check-input" name="opcion" value="restar" required>Restar
           <input type="radio"  class="form-check-input" name="opcion" value="multiplicar" required>Multiplicar
           <input type="radio"  class="form-check-input" name="opcion" value="division" required>Division
           <input type="radio"  class="form-check-input" name="opcion" value="potenciacion" required>Potenciacion
           <input type="radio"  class="form-check-input" name="opcion" value="Concatenacion" required>Concatenacion
           <hr>
           <input type="submit" class="btn btn-success w-25" value="Enviar">
           <input type="submit" class="btn btn-danger w-25" value="Limpiar">
           <hr>
        </form>
  </div>
  <div class="container">

     <?php

       if  ($_POST){
           function Sumar (){
               echo "la suma de los numeros es:". ($_POST['numero1']+$_POST['numero2']);    
           }
            function Restar (){
                echo "la resta de los numeros es:". ($_POST['numero1']-$_POST['numero2']);    
            }
            function Multiplicacion (){
                echo "la multiplicacion de los numeros es:". ($_POST['numero1']*$_POST['numero2']);
            }
            function Division (){
                if ($_POST['numero2']==0)
                $d="Error: division por 0";
                else
                $d=$_POST['numero1']/$_POST['numero2'];
                echo "la division de los numeros es:" .$d;
            }
            function Potenciacion (){
                echo "La potenciacion de los numeros es:". (pow($_POST['numero1'],$_POST['numero2']));
            }
            function concatenacion (){
                echo "La concatenacon de los numeros es:".($_POST['nuemro1'].$_POST['numero2']);
            }
            switch($_POST['opcion']){
                case 'sumar':
                    Sumar();
                    break;
                case 'restar':
                    Restar();
                    break;
                case 'multiplicacion':
                    Multiplicacion();
                    break;
                case 'division':
                    Division();
                    break;
                case 'potenciacion':
                    Potenciacion();
                    break;
                case 'concatenacion':
                    Concatenacion();
                    break;
                default:
                echo "Error en la opcion seleccionada";
                break;

            }
       }
    ?>
  </div>  
</body>
</html>