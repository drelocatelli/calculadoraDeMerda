<?php
    
    if (!$_POST['rendimento'] && !$_POST['banheiroDia'] && !$_POST['mediaTempo']) {
        header("Location: index.php?error=true");
    }

    class Calculadora{

        public $rendimento;
        public $banheiroDia;
        public $mediaTempo;

        public function __construct($rendimento, $banheiroDia, $mediaTempo){
            
            $this->rendimento = (float)$rendimento;
            $this->banheiroDia = (float)$banheiroDia;
            $this->mediaTempo = (float)$mediaTempo;
            
        }

        public function calculaMerda(){
            // $this->rendimento = $this->rendimento/9600;
            // $this->mediaTempo = $this->diasUteis * $this->mediatempo;

            return $this->rendimento;
        }

        public function statusMerda(){
            if($this->calculaMerda() < 600){
                return 'Desempregado';
            }else if($this->calculaMerda() <= 800){
                return 'Estagiário';
            }else if($this->calculaMerda() <= 2000){
                return 'Junior';
            }else if($this->calculaMerda() <= 5000){
                return 'Pleno';
            }else{
                return 'Senior';
            }
        }
        
    }

$calculadora = new Calculadora($_POST['rendimento'], $_POST['banheiroDia'], $_POST['mediaTempo']);

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

    <audio id="somPeido2">
        <source src="sound/peido3.mp3" type="audio/mpeg"></source>
    </audio>

    <div class="content" style="background-color:#F5F5F5; padding:15px;">
        <h1>Parabéns você é</h1>
        <h2 style="color:#A97E57;font-size: 29px; font-weight: normal; position: relative;
        top: -21px; text-transform:uppercase;">CAGÃO <?php echo $calculadora->statusMerda(); ?> <emoji>💩️</emoji></h2>
        <?php if($calculadora->statusMerda() == 'Desempregado'){ ?>
            <span>Veja se você tem direito ao auxílio emergencial!!</span>
        <?php } ?>
        <span>Você ganha <price>R$ <?php echo $calculadora->calculaMerda(); ?></price><br>mensais apenas para 💩️💩️💩️💩️ <?php echo $calculadora->banheiroDia; ?>x</span>
        <br><br>
        <button type="button" style="background:#2E9839;">QUERO PARTICIPAR DO RANKING</button>
    </div>
    
</body>
</html>

<script>
    document.querySelector('button').onclick = function(){
        alert('em breve kkk')
    }

    window.onload = function(){
        playPum('audio#somPeido2');
    }


    function playPum(audio) {
        let somPeido =  document.querySelector(audio);
        somPeido.play();
    }
</script>