<?php
$mensagem1 = "";
$mensagem2 = "";
$mensagem3 = "";
$mensagem4 = "";
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $pergunta1 = $_POST["op1"] ?? '';
    $pergunta2 = $_POST["op2"] ?? '';
    $pergunta3 = $_POST["op3"] ?? '';
    $pergunta4 = $_POST["op4"] ?? '';

    if (trim($pergunta1) === '' || 
        trim($pergunta2) === '' || 
        trim($pergunta3) === '' || 
        trim($pergunta4) === '') {

        $erro = "⚠️ Ainda há perguntas sem alternativa selecionada!";

    } else {
        if ($pergunta1 === "H2O") {
            $mensagem1 = "Pergunta 1: ✔️ Resposta correta!";
        } else {
            $mensagem1 = "Pergunta 1: ❌ Resposta incorreta!";
        }
        if ($pergunta2 === "Pedro Álvares Cabral") {
            $mensagem2 = "Pergunta 2: ✔️ Resposta correta!";
        } else {
            $mensagem2 = "Pergunta 2: ❌ Resposta incorreta!";
        }
        if ($pergunta3 === "George Washington") {
            $mensagem3 = "Pergunta 3: ✔️ Resposta correta!";
        } else {
            $mensagem3 = "Pergunta 3: ❌ Resposta incorreta!";
        }
        if ($pergunta4 === "Brasília") {
            $mensagem4 = "Pergunta 4: ✔️ Resposta correta!";
        } else {
            $mensagem4 = "Pergunta 4: ❌ Resposta incorreta!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionario</title>
    <link rel="stylesheet" href="quest.css"/>
</head>
<body>
    <h1>Questionário:</h1><br/><br/>
    <form action="questionario.php" method="POST">
    <div id="pergunta1">
        <p><center>Marque a resposta com a pergunta correspondente</center></p><br/><br/>
        <fieldset>
            <legend>Pergunta 1:</legend>
            <p>Qual a formula química da água?</p><br/>
            <div id="agua">
                <div><input type="radio" id="op1a" name="op1" value="O2" class="radio"/>
                <label for="op1a">A) O₂</label></div><br/>
                <div><input type="radio" id="op1b" name="op1" value="N2" class="radio"/>
                <label for="op1b">B) N₂</label></div><br/>
                <div><input type="radio" id="op1c" name="op1" value="H2O" class="radio"/>
                <label for="op1c">C) H₂O</label></div><br/>
                <div><input type="radio" id="op1d" name="op1" value="Au" class="radio"/>
                <label for="op1d">D) Au</label></div><br/>
            </div>
        </fieldset>
    </div>
    <div id="pergunta2">
        <fieldset>
            <legend>Pergunta 2:</legend>
            <p>Quem Descobriu o Brasil?</p><br/>
            <div id="brasil">
                <div><input type="radio" id="op2a" name="op2" value="Pelé" class="radio"/>
                <label for="op2a">A) Pelé</label></div><br/>
                <div><input type="radio" id="op2b" name="op2" value="Pedro Álvares Cabral" class="radio"/>
                <label for="op2b">B) Pedro Álvares Cabral</label></div><br/>
                <div><input type="radio" id="op2c" name="op2" value="Pedro |" class="radio"/>
                <label for="op2c">C) Pedro |</label></div><br/>
                <div><input type="radio" id="op2d" name="op2" value="Tiradentes" class="radio"/>
                <label for="op2d">D) Tiradentes</label></div><br/>
            </div>
        </fieldset>
    </div>
    <div id="pergunta3">
        <fieldset>
            <legend>Pergunta 3:</legend><br/>
            <p>Quem foi o primeiro presidente dos EUA?</p><br/>
            <div id="eua">
                <div><input type="radio" id="op3a" name="op3" value="Donald Trump" class="radio"/>
                <label for="op3a">A) Donald Trump</label></div><br/>
                <div><input type="radio" id="op3b" name="op3" value="George Washington" class="radio"/>
                <label for="op3b">B) George Washington</label></div><br/>
                <div><input type="radio" id="op3c" name="op3" value="Abraham Lincoln" class="radio"/>
                <label for="op3c">C) Abraham Lincoln</label></div><br/>
                <div><input type="radio" id="op3d" name="op3" value="George W. Bush" class="radio"/>
                <label for="op3d">D) George W. Bush</label></div><br/>
            </div>
        </fieldset>
    <div id="pergunta4">
        <fieldset>
            <legend>Pergunta 3:</legend><br/>
            <p>Qual é a capital do Brasil?</p><br/>
            <div id="capital">
                <div><input type="radio" id="op4a" name="op4value="São Paulo" class="radio"/>
                <label for="op4a">A) São Paulo</label></div><br/>
                <div><input type="radio" id="op4b" name="op4" value="Brasília" class="radio"/>
                <label for="op4b">B) Brasília</label></div><br/>
                <div><input type="radio" id="op4c" name="op4" value="Rio de Janeiro" class="radio"/>
                <label for="op4c">C) Rio de Janeiro</label></div><br/>
                <div><input type="radio" id="op4d" name="op4" value="Salvador" class="radio"/>
                <label for="op4d">D) Salvador</label></div><br/>
            </div>
    </fieldset>
    </fieldset>
    </div><br/>
    <center><button id="botao" type="submit">Enviar Respostas</button></center>
    </form>
    <div id="resultado">
    <?php
    if ($erro) { echo "<p>$erro</p>";
    } elseif ($mensagem1 || $mensagem2 || $mensagem3 || $mensagem4) {
    echo "<p>$mensagem1</p><br/>";
    echo "<p>$mensagem2</p><br/>";
    echo "<p>$mensagem3</p><br/>";
    echo "<p>$mensagem4</p><br/>";
    }
    ?>
    </div>
</body>
</html>