<?php

echo $_POST['rendimento']. '<br>';
echo $_POST['banheiroDia']. '<br>';
echo $_POST['diaUteis'] . '<br>';
echo $_POST['mediaTempo'];
    
    if (!$_POST['rendimento'] && !$_POST['diaUteis'] && !$_POST['banheiroDia'] && !$_POST['mediaTempo']) {
        header("Location: index.php?error=true");
    }

    class Calculadora{

        public $rendimento;
        public $diasUteis;
        public $banheiroDia;
        public $mediaTempo;

        public function __construct($rendimento, $diasUteis, $banheiroDia, $mediaTempo){
            
            $this->rendimento = (float)$rendimento;
            $this->diasUteis = (float)$diasUteis;
            $this->banheiroDia = (float)$banheiroDia;
            $this->mediaTempo = (float)$mediaTempo;
            
        }

        public function calculaMerda(){
            $this->rendimento = $this->rendimento/9600;
            $this->mediaTempo = $this->diasUteis * $this->mediatempo;

            echo $this->rendimento * $this->mediaTempo * $this->banheiroDia;
        }
        
    }

$calculadora = new Calculadora($_POST['rendimento'], $_POST['diaUteis'], $_POST['banheiroDia'], $_POST['mediaTempo']);
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

    <div class="content" style="background-color:#F5F5F5; padding:15px;">
        <h1>Parabéns você é</h1>
        <h2 style="color:#A97E57;font-size: 29px; font-weight: normal; position: relative;
        top: -21px;">CAGÃO SENNIOR <emoji>💩️</emoji></h2>
        <span>Você ganha <price>R$ <?php $calculadora->calculaMerda(); ?></price><br>mensais apenas para 💩️💩️💩️💩️</span>
        <br><br>
        <button type="button" style="background:#2E9839;">QUERO PARTICIPAR DO RANKING</button>
    </div>
    
</body>
</html>

<script>
    document.querySelector('button').onclick = function(){
        alert('em breve kkk')
    }
</script>