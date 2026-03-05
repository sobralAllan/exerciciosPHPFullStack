<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRIZ</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label>00:</label>
        <input type="number" name="matriz[0][0]" id="primeiroNumero"/>
        <br>
        <label>01:</label>
        <input type="number" name="matriz[0][1]" id="primeiroNumero"/>
        <br>
        <label>10:</label>
        <input type="number" name="matriz[1][0]" id="primeiroNumero"/>
        <br>
        <label>11:</label>
        <input type="number" name="matriz[1][1]" id="primeiroNumero"/>
       
        <button type="submit">Calcular
            <?php
                $mat = $_POST['matriz'];
                mostrarMatriz($mat);
            ?>
        </button>
    </form>
    <br>
  
</body>
</html>