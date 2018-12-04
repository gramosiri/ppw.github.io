<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
<?php include("template/head.html")?>
  <title>Inicio</title>
</head>
<body>


<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
  <ul id="menu-barra-temp" style="list-style:none;">
    <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
        <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
    </li>
    <li>
       <a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
    </li>
  </ul>
</div>  


<?php include("template/header.html")?>

  <main>
   
   <?php include("template/banner.html")?>


    <div class="container content">
      <div class="row">
        <div class="card col-sm-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Mouse</h5>
            <img src="images/produtos/mouse.jpg" />
            <p class="card-text">Mouse 3000 DPI, baixa latência.</p>
            <a href="#" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
        <div class="card col-sm-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Teclado Mecânico</h5>
            <img src="images/produtos/teclado.jpg" />
            <p class="card-text">Funções Macro e RGB</p>
            <a href="#" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
        <div class="card col-sm-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Monitor 24"</h5>
            <img src="images/produtos/monitor.jpg" />
            <p class="card-text">Monitor alta qualidade 60 Hertz</p>
            <a href="#" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
        <div class="card col-sm-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Gabinet Full Tower"</h5>
            <img src="images/produtos/gabinete.jpg" />
            <p class="card-text">Gabinete amplo, organizador de fios e cabos</p>
            <a href="#" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php include("template/footer.html")?>


<?php include("template/scripts.html")?>

<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>


</body>
</html>
