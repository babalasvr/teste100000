<?php header("Content-Type: text/html; charset=utf8");?>
<?php ; 
session_start();?>
<!DOCTYPE html>
<html>
 
  <head>
    <title>BHFestas | Tela Inicial </title>
    <link rel="shortcut icon" href="logo.png" type="image/x-png0"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="Pit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css" type="text/css">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}


margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 10px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
  
  <!-- id=".$id_usuario.""); -->
  <!-- BACK TO TOP -->

  <div class="topo" style="background-color: #ffb6c1; color: #000; text-align: center; padding: 15px">
    BHFestas
  </div>
    <nav class="navbar navbar-primary">
  <div class="container-fluid" style="padding: 5px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <li style="list-style-type: none;" class="navbar-brand" href="#">Seja Bem Vindo Felipe e Max
      </li>
      
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
      <ul class="nav navbar-nav navbar-right">
    <?php echo "
        <form class='navbar-form'  method='post'>
        <div class='form-group'>
          <input type='text' name='search' required class='form-control' placeholder='Pesquisar'>
        </div>
        <button type='submit' name='btn_pesquisar' class='btn btn-info'>Pesquisar</button>
    <a href='index.php' class='btn btn-success'><i class='fa fa-sign-out' aria-hidden='true'></i>Logar</a>
      </form>"; ?>
    
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- famoso slider -->
<div class="logo"  style=" text-align: center; padding: 15px"><img src='logo1.png' style='width: 650px; height: 280px;'>

<div class="slider"> 
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      </div>
      <div class="slide">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->
<div class="slide_buttons">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js.js"></script>

<?php

?>
    <!-- Anuncio do topo -->
    <h3 class="anuncio-top" style="margin-top: 5%;">VEJA TODOS EVENTOS DISPONÍVEIS</h3>
    <h4 style="margin-top: 4%;">O setor de eventos e entretenimento tem sido um dos mais impactados pela Covid-19, afetando direta e indiretamente diversas empresas que compõem a cadeia produtiva deste segmento, dentre elas produtores de evento, empresas de venda de ingressos, artistas, casas de espetáculo, entre outros.  Diante das proibições na realização de eventos impostas pelas autoridades governamentais, as empresas desse setor, além de reduzirem seu faturamento para praticamente zero, sofrem diversos impactos com o cancelamento ou adiamento dos eventos. Para melhor elucidar isso em toda a cadeia de entretenimento tomamos, como exemplo, um evento de teatro musical.  Para garantir que um evento aconteça em um determinado local, o produtor cultural ou realizador, precisa antecipar o pagamento da locação do espaço onde o evento ocorrerá. Com as datas e local definidos, é possível elaborar um cronograma reverso, contendo todas as ações que serão necessárias ao longo do tempo para viabilizar aquele determinado evento.</h4>
    <br><br><br>
    <iframe width="1020" height="630" src="https://www.youtube.com/embed/3rUqFAHLb9g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h3 class="empresa" style="margin-top: 6%;">Somos uma empresa criada com o intuito de divulgar eventos em Belo Horizonte para facilitar a vida dos que, assim como nós, amam uma noitada. A princípio, estaremos apenas em página formato WEB, mas se projeto tiver uma boa aceitação por vocês usuarios faremos uma plataforma para celulares. </h3>
    <br><br><br>
 
    
    <div class="container">
  <img src="anon.png" alt="Avatar" style="width:100%;">
  <p>Eai braço qq pega hoje?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="anon.png" alt="Avatar" class="right" style="width:100%;">
  <p>Rolezin ne irmao, usei o bhfestas e achei um evento malado!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="anon.png" alt="Avatar" style="width:100%;">
  <p>Boaaa da ideia de onde é?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="anon.png" alt="Avatar" class="right" style="width:100%;">
  <p>Ja mando a loc?</p>
  <span class="time-left">11:05</span>
</div>
<br><br><br>
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="a.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Gabriel Batista</h1> 
      <p>CEO</p> 
      <p>Cara maneiro e elegante</p>
    </div>
  </div>
</div>


  <footer style="margin: 10.9% 0 0 0; background-color: #ffb6c1; padding: 8px; color: #000; font-family: 'Roboto', sans-serif; text-align: center;">
    &copy 2020 - BHFestas
  </footer>
  </body>
</html>