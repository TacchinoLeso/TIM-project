<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | Smartphone e telefoni</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">
    <link href="css/orientation.css" rel="stylesheet" type="text/css">
  </head>
  <body>

<!--Barra superiore-->
    <nav id="landmark" class="navbar navbar-inverse" >
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li>
        <a href="index.php" style="padding:0px">
            <?php
             $immagine = getImmagine('logotim');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%; max-width: 87;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
        </a>
      </li>
      <li><a href="#" id="linknonvalidi">Il gruppo</a></li> 
      <li><a href="Chi_Siamo.php">Chi siamo</a></li> 
      <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dispositivi
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Dispositivi.php">Per categoria</a></li>
          <li><a href="Promozioni.php">Promozioni</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Smart Life
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="SmartLife.php">Per categoria</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Assistenza
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Assistenza.php" >Per categoria</a></li>
          <li><a href="In_Evidenza.php" >In evidenza</a></li>
        </ul>
      </li>
    </ul>
     <ul class="hidden-xs nav navbar-nav navbar-right">   
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Mail</span></a></li> 
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Carrello</span></a></li> 
    </ul>
  </div>
</nav>







<div class="hidden-md hidden-lg">


    <div class="dropdown ">
      <button class="btn btn-default dropdown-toggle center-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Dispositivi per categoria
        <span class="caret "></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="altrilinktendina">
        <li><a class="thumbnail text-center" href="SmartphoneETelefoni.php">
          <img src="imgs\dispositivi\smartphone e telefoni.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail text-center" href="TabletEComputer.php">
         <img src="imgs\dispositivi\tablet e computer.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail text-center" href="ModemENetworking.php">
          <img src="imgs\dispositivi\modem e networking.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail text-center" href="TvESmartLiving.php">
        <img src="imgs\dispositivi\tv e smart living.PNG" class="img-rounded">
        </a></li>
        <li><a class="thumbnail text-center" href="Outlet.php">
         <img src="imgs\dispositivi\outlet.PNG" class="img-rounded">
        </a></li>
      </ul>
    </div>

      <div class="col-md-6 col-md-offset-1">
      <?php
      $dispositivo = getDispositivo('iphone');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?> 
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["prezzo"] . " €"; 
          ?>
        </p>
        <p><a href="IPhone.php" class="btn btn-primary" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-1">
      <?php
      $dispositivo = getDispositivo('s7');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?> 
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["prezzo"] ." €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-5">
      <?php
      $dispositivo = getDispositivo('g5');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?> 
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["prezzo"] ." €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-5">
      <?php
      $dispositivo = getDispositivo('huaweip9');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?> 
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["prezzo"] ." €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

</div>







<div class="row hidden-xs hidden-sm" >
  <div class="col-md-3 col-md-offset-1">
    <a class="thumbnail" href="SmartphoneETelefoni.php" id="currentPage">
       <img src="imgs\dispositivi\smartphone e telefoni.PNG" class="img-rounded">
    </a>
    <a class="thumbnail" href="TabletEComputer.php" id="altrilink">
      <img src="imgs\dispositivi\tablet e computer.PNG" class="img-rounded">
    </a>
    <a class="linknonvalidi thumbnail" href="#" id="altrilink" >
      <img src="imgs\dispositivi\modem e networking.PNG" class="img-rounded">
    </a>
    <a class="linknonvalidi thumbnail" href="#" id="altrilink">
      <img src="imgs\dispositivi\tv e smart living.PNG" class="img-rounded">
    </a>
    <a class="thumbnail" href="Outlet.php" id="altrilink">
      <img src="imgs\dispositivi\outlet.PNG" class="img-rounded">
    </a>
  </div>

  <div class="col-md-6 col-md-offset-1">
    
    <?php
      $dispositivo = getDispositivo('iphone');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?>  
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('iphone');
            echo $dispositivo["prezzo"] . " €"; 
          ?>
        </p>
        <p><a href="IPhone.php" class="btn btn-primary" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-1">
    <?php
      $dispositivo = getDispositivo('s7');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?>  
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('s7');
            echo $dispositivo["prezzo"] . " €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-5">
    <?php
      $dispositivo = getDispositivo('g5');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?>  
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('g5');
            echo $dispositivo["prezzo"] . " €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-5">
    <?php
      $dispositivo = getDispositivo('huaweip9');
      $mydiv = '<div class="thumbnail">';
      $mydiv .= '<img id="immaginidispositivi"  src="'.$dispositivo['path'].'" />';
      echo $mydiv;
     ?>  
      <div class="caption text-center">
        <h3>
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["marca"]; 
          ?>
        </h3>
        <h3>
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["nome"]; 
          ?>
        </h3>
        <p id="prezzo">
           <?php
            $dispositivo = getDispositivo('huaweip9');
            echo $dispositivo["prezzo"] . " €"; 
          ?>
        </p>
        <p><a href="#" class="btn btn-primary linknonvalidi" role="button">Vai al dispositivo</a></p>
      </div>
    </div>
  </div>

</div>





























<!--SiteMap-->
    <nav class="navbar navbar-default" id="navigationbarp">
      <div class="container-fluid">
        <div class="navbar-header" style="float: none">
          <div>

                  <?php
                    $immagine = getImmagine('logotim');
                      $mydiv = '<div class="navbar-brand hidden-xs">';
                      $mydiv .= '<img style="margin-top: 3; width:100%; max-width:75; border-radius: 10px 10px 10px 10px;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  

          </div>
          <div class="navbar-brand" style="padding: 0; padding-top: 1; padding-left: 3px;">
            <p class="navbar-text">DISPOSITIVI / SMARTPHONE E TELEFONI /</p>
          </div>
        </div>
      </div>
    </nav>



<!--Footer-->
    <div class="section" id="footlinks">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>INFORMAZIONI UTILI</h4>
            <ul>
              <li>
                <p>Come pagare il conto</p>
              </li>
              <li>
                <p>Carta dei servizi</p>
              </li>
              <li>
                <p>ViviTIM</p>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>STRUMENTI VELOCI</h4>
            <ul>
              <li>
                <p>Ricarica Online</p>
              </li>
              <li>
                <p>Verifica Copertura</p>
              </li>
              <li>
                <p>Trova Negozio</p>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>SEGUICI SU:</p>
            <ul class="list-unstyled" >
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('facebook');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('twitter');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('google');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <footer class="section section-primary" id="bluefooter">
          <div class="row">
            
            <div class="col-md-8 col-sm-6">
              
              <div class="col-sm-2">
                <p>Privacy</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Note legali</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Website info</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Contatti</p>
              </div>
              
              <div class="col-sm-3">
                <p class="text-left">Per i consumatori</p>             
              </div>

            </div>

            <div class="col-sm-6 col-md-3">
                <p class="text-right">Telecom Italia 2012 - P.IVA 00488410010</p>
            </div>

          </div>

      </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body></html>