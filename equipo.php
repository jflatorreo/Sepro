<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
      <link href="css/allCSS.css" rel="stylesheet" type="text/css" />
      <link href="css/newstyle.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="js/jssor.slider.min.js"></script>
      <title>Universidad Nacional de Colombia</title>
   <body>
      <div id="contenedor_info">
	  <?php include_once 'scripts/cabeceraUnal.html';
			include_once 'scripts/cabeceraSepro.html';
      ?>
      <div>
	 <iframe style="width: 100%;min-height: 500px " src="
	 <?
	 switch ($_GET["a"]) {
    case "1":
        echo "qs/equipo.php";
        break;
    case "2":
        echo "qs/doctorado.php";
        break;
    case "3":
        echo "qs/maestria.php";
        break;
    case "4":
        echo "qs/pregrado.php";
        break;
    case "5":
        echo "qs/apoyo.php";
        break;
    default:
        echo "qs/equipo.php";
}
	 ?>
	 "></iframe>
      </div>

      <div id="Contenido_UN">
         
         <div id="piedepagina">
            <div id="piedireccion">
               <b>Universidad Nacional de Colombia</b><br />
               Carrera 45 No 26-85 - Edificio Antonio Nariño · Oficina 115 <br />
               Bogot&aacute; D.C. - Colombia
            </div>
            <div id="piescudo">
               <a href="http://www.gobiernoenlinea.gov.co/">
               <img src="images/gobierno.gif" alt="Gobierno en LĂ­nea" border="0" width="58" height="48" />
               </a>
               <a href="http://www.agenciadenoticias.unal.edu.co/">
               <img src="images/agencia.gif" alt="Agencia de Noticias UN" border="0" width="84" height="48" />
               </a>
               <a href="http://www.contaduria.gov.co">
               <img src="images/contad.png" border="0" width="51" height="48" alt="Contadur&iacute;a General de la Naci&oacute;n" />
               </a>
            </div>
            <div id="pietelefono">
               <b>PBX: 3165000 Ext. 16642 </b><br />
               <a href="mailto:CORREO_DEPENDENCIA@unal.edu.co">sepro_fibog@unal.edu.co</a><br />
               <span class="avisolegal"><a href="http://www.unal.edu.co/legal.pdf">Aviso Legal</a> </span>
            </div>
         </div>
      </div>
	  </div>
	  <script>
	  document.getElementById("qs").className = "active";
	  </script>
   </body>
</html>