<?php

include_once("./Sequencia.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <fieldset>
            <legend> Atividade Sequência </legend>
            <div class="inputs-select">
                <label for="numero_inicio">Escolha o valor inicial: </label>
                <select name="numero_inicio" id="numero_inicio">
                <option value=""selected disabled>Valor Inicial</option>
<?php
            
                for($index = 1; $index <= 100; $index++) {
?>
                    <option value="<?php echo $index?>" ><?php echo $index?></option>
<?php
                }
?>
                </select>
            </div>
            <div class="inputs-select">
                <label for="numero_fim">Escolha o valor final: </label>
                <select name="numero_fim" id="numero_fim">
                    <option value="" selected disabled>Valor Final</option>
<?php
            
                        for($index = 1; $index <= 100; $index++) {
?>
                            <option value="<?php echo $index?>" ><?php echo $index?></option>
<?php
                        }
?>              </select>
            </div>

            <div class="opcao">
                <span>Mostrar: </span>
                <div class="inputs">
                    <div class="input">
                        <input type="radio" value="Todos" name="selecao" id="Todos" checked>Todos
                    </div>
                    <div class="input">
                        <input type="radio" value="Pares" name="selecao" id="Pares">Apenas os pares
                    </div>
                    <div class="input">
                        <input type="radio" value="Impares" name="selecao" id="Impares">Apenas os ímpares
                    </div>
                </div>
                </div>
                <div class="input">
                        <input type="submit" name="mostrar" value="Mostrar a sequência">
                    </div>

            <?php
            
            if (isset($_POST["mostrar"])) {

            $numero_inicio = $_POST["numero_inicio"];
            $numero_fim = $_POST["numero_fim"];
            $opcao = $_POST["selecao"];

            if ($numero_inicio > $numero_fim)  {
?>
                <div class="output-message">
                    <span> * O valor inicial deve ser menor que valor final.</span>
                </div>
<?php
            }
            elseif (!empty($numero_inicio) && !empty($numero_fim)) {
            $sequencia = new Sequencia();
            $sequencia->setInicio($numero_inicio);
            $sequencia->setFim($numero_fim);

                switch($opcao) {
                    case "Todos":
                        $output = $sequencia->exibirTodos();
                    break;
                    
                    case "Pares":
                        $output = $sequencia->exibirPares();
                    break;

                    case "Impares":
                        $output = $sequencia->exibirImpares();
                    break;
                }
        
            ?>
        </fieldset>
    </form>

    <div class="output-message">
        <h3>Resultado:</h3>
            <p>
                <strong>
<?php
        foreach ($output as $key => $value) {
        echo $value . "<br>";
    }

?>
        </strong>
    </p>
    </div>

<?php
    }
}
?>
</body>
</html>