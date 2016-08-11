<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <meta name="author" content="Unimedios" />
    <meta name="DC.Creator" content="Unimedios" />
    <meta name="distribution" content="all" />
    <meta name="revisit" content="1 days" />
    <meta name="robots" content="all" />
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="cache-control" content="no-cache, must-revalidate"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="last-modified" content=""/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/Sepro/css/allCSS.css" rel="stylesheet" type="text/css" />
    <link href="/Sepro/css/newstyle.css" rel="stylesheet" type="text/css" />
    <title>Universidad Nacional de Colombia</title>
    <style type="text/css">
    </style>
  </head>
  <body>
    <div id="contenedor_info">
      <?php include_once '../../scripts/cabeceraUnal.html';
        include_once '../../scripts/cabeceraSepro.html';
           ?>
    <?php
      switch ($_GET["id"]) {
        case 1:
            $nombre="2020075 - Logística Aplicada a Inventarios y Almacenamiento - 2016 II";
                $tareas[1]="<li type='square'><p><a style='font-size: 22px; color: rgb(0, 118, 150);' href='archivos/2020075.docx'>Programa del curso</a></p></li>";
                $tareas[2]="<li type='square'><p><a style='font-size: 22px; color: rgb(0, 118, 150);' href='archivos/03082016.docx'>Clase 03-08-2016</a></p></li>";
        break;
      }
      
      ?>
            <div class="izquierda_proyectos" style="float: left;margin-right: 10px" >
                <img src="/Sepro/images/izquierda_proyectos.jpg" width="265" height="340" border="0" usemap="#Map2" />
            </div>
            <div class="contenido_curso" >
                <H1><?php echo $nombre; ?></H1>
                <?php echo $tareas[1]; ?>
                <?php echo $tareas[2]; ?>
            </div>          
      

      
      <?php include_once '../../scripts/pie_pagina.html';?>
    </div>
    </div>
    <script>
      document.getElementById("qh").className = "active";
    </script>
    <map name="Map" id="Map">
      <area shape="rect" coords="450,0,645,50" href="/Sepro/qh/extension.php" target="_self" alt="Extensión" />
    </map>
  </body>
</html>