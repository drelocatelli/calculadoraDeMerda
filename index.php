<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Calculadora de merda</title>
</head>
<body>

    <div class="content">

        <audio id="somPeido">
            <source src="sound/peido.mp3" type="audio/mpeg"></source>
        </audio>

        <audio id="somPeido2">
            <source src="sound/peido2.mp3" type="audio/mpeg"></source>
        </audio>

        <img src="img/title1.png" onclick="playPum('audio#somPeido2');"><br><br>
        <div id="form">
            <form name="calculamerda" method="post" action="result.php">
                <input type="number" min="1" name="rendimento" placeholder="Qual seu salário ou rendimentos mensais?" autofocus><br>
                <input type="number" min="1" name="banheiroDia" placeholder="Quantas vezes você vai no banheiro por dia?"><br>
                <input type="number" min="1" name="mediaTempo" placeholder="Qual o tempo gasto em cada vez por minuto?"><br>
                <?php if($_GET['error'] == "true"){ ?>
                <span class="error" style="color:red; margin-bottom:5px;">Você precisa digitar os dados corretamente para mostrar o resultado!</span><br><br>
                <?php } ?>
                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>
    
</body>
</html>

<script>

    let form = document.querySelector('form[name=calculamerda]');
    let input = form.querySelectorAll('input');

    window.onload = function(){
        playPum('audio#somPeido2');
    }

    input.forEach(function(item) {
        item.onclick = function(){playPum('audio#somPeido2')};
    });

    form.onsubmit = function(event) {
        event.preventDefault();

        playPum('audio#somPeido');

        setTimeout(() => {
            form.submit();
        },600);
    }

    function playPum(audio) {
        let somPeido =  document.querySelector(audio);
        somPeido.play();
    }

</script>