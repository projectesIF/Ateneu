<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
   // Si no s'ha entrat,
   header('WWW-Authenticate: Basic realm="Matform"');
   header('HTTP/1.0 401 Unauthorized');
   echo '<CENTER><H2>Accés restringit...</H2>';
   echo '<HR>Cal tenir autorització per accedir a aquests recursos.<BR>';
   echo '</CENTER>';
   exit;
// Si s'ha entrat, comprovem que sigui correcte
} elseif (($_SERVER['PHP_AUTH_USER']!= 'formatic') || ($_SERVER['PHP_AUTH_PW'] != 'form44')) {
   header('WWW-Authenticate: Basic realm="Intracentre"');
   header('HTTP/1.0 401 Unauthorized');
   echo '<CENTER><H2>Accés restringit...</H2>';
   echo '<HR>Cal tenir autorització per accedir a aquests recursos.<BR>';
   echo '</CENTER>';
   exit;
} else {

?>

<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Gestió estat de les activitats a wikiform</title>
<style>
.categoria{
	/*background: #66E6FF;*/
	background: #809eba;
	height: 60px;
	vertical-align:text-bottom;
}
.subcategoria{
	background:#999999;
	height: 60px;
	vertical-align:text-bottom;
}
.cap {
  background: #eeeeee;
}

body {	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
font-size:100%;}

h1 {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 18pt;
	color: navy;
	padding-top: 12px;
	padding-bottom: 3px;
}


/* 
	Web20 Table Style
	written by Netway Media, http://www.netway-media.com
*/
/*
table {
  border-collapse: collapse;
  border: 1px solid #666666;
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #f6f6f6;
  text-align:left;
  width: 840px;
  }
caption {
  text-align: center;
  font: bold 16px arial, helvetica, sans-serif;
  background: transparent;
  padding:6px 4px 8px 0px;
  color: #CC00FF;
  text-transform: uppercase;
}
thead, tfoot {
background:url(bg1.png) repeat-x;
text-align:left;
height:30px;
}
thead th, tfoot th {
padding:5px;
}
table a {
color: #333333;
text-decoration:none;
}
table a:hover {
text-decoration:underline;
}
tr.odd {
background: #f1f1f1;
}
tbody th, tbody td {
padding:5px;
}

*/
/*
table {
	width: 840px;
	border:1px solid #000000;
	border-spacing: 0px; }

table a, table, tbody, tfoot, tr, th, td {
	font-family: Arial, Helvetica, sans-serif;
}

table caption {
	font-size: 1.8em;
	text-align: left;
	text-indent: 100px;
	background: url(images/bg_caption.gif) left top;
	height: 40px;
	color: #FFFFFF;
	border:1px solid #000000; }

thead th {
	background: url(images/bg_th.gif) left;
	height: 21px;
	color: #FFFFFF;
	font-size: 0.8em;
	font-family: Arial;
	font-weight: bold;
	padding: 0px 7px;
	margin: 20px 0px 0px;
	text-align: left; }

tbody tr {	background: #ffffff; }

tbody tr.odd {	background: #f0f0f0; }

tbody th {
	background: url(images/arrow_white.gif) left center no-repeat;
	background-position: 5px;
	padding-left: 40px !important; }

tbody tr.odd th {
	background: url(images/arrow_grey.gif) left center no-repeat;
	background-position: 5px;
	padding-left: 40px !important; }

tbody th, tbody td {
	font-size: 0.8em;
	line-height: 1.4em;
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	padding: 10px 7px;
	border-bottom: 1px solid #800000;
	text-align: left; }

tbody a {
	color: #000000;
	font-weight: bold;
	text-decoration: none; }

tbody a:hover {
	color: #ffffff;
	text-decoration: underline; }

tbody tr:hover th {
	background: #800000 url(images/arrow_red.gif) left center no-repeat;
	background-position: 5px;
	color: #ffffff; }

tbody tr.odd:hover th {
	background: #000000 url(images/arrow_black.gif) left center no-repeat;
	background-position: 5px;
	color: #ffffff; }

tbody tr:hover th a, tr.odd:hover th a	{
		 color: #ffffff; }

tbody tr:hover td, tr:hover td a, tr.odd:hover td, tr.odd:hover td a {
	background: #800000;
	color: #ffffff;	 }

tbody tr.odd:hover td, tr.odd:hover td a{
	background: #000000;
	color: #ffffff;	 }

tfoot th, tfoot td {
	background: #ffffff url(images/bg_footer.gif) repeat-x bottom;
	font-size: 0.8em;
	color: #ffffff;
	height: 21px;
	}

*/

	/* 
	Blue Dream
	Written by Teylor Feliz  http://www.admixweb.com
*/


table { background:#D3E4E5;
 border:1px solid gray;
 border-collapse:collapse;
 color:#fff;
 font:normal 12px verdana, arial, helvetica, sans-serif;
width: 850px;

 
}
caption { border:1px solid #5C443A;
 color:#5C443A;
 font-weight:bold;
 letter-spacing:20px;
 padding:6px 4px 8px 0px;
 text-align:center;
 text-transform:uppercase;
}
td, th { color:#363636;
 padding:.4em;
}
tr { border:1px dotted gray;

}
thead th, tfoot th { background:#5C443A;
 color:#FFFFFF;
 padding:3px 10px 3px 10px;
 text-align:left;
 text-transform:uppercase;
}
tbody td a { color:#363636;
 text-decoration:none;
}
tbody td a:visited { color:gray;
 text-decoration:line-through;
}
tbody td a:hover { text-decoration:underline;
}
tbody th a { color:#363636;
 font-weight:normal;
 text-decoration:none;
}
tbody th a:hover { color:#363636;
}
tbody td+td+td+td a { background-image:url('bullet_blue.png');
 background-position:left center;
 background-repeat:no-repeat;
 color:#03476F;
 padding-left:15px;
}
tbody td+td+td+td a:visited { background-image:url('bullet_white.png');
 background-position:left center;
 background-repeat:no-repeat;
}
tbody th, tbody td { text-align:left;
 vertical-align:top;
}
tfoot td { background:#5C443A;
 color:#FFFFFF;
 padding-top:3px;
}
.odd { background:#fff;
}
tbody tr:hover { background:#99BCBF;
 border:1px solid #03476F;
 color:#000000;
}



/* ---- ( iTunes CSS ) ---- */
/*
table { 
	font: 80% Verdana, Arial, Helvetica, sans-serif;
	color: #000;
	text-align: left;
	border-collapse: collapse;
	border: 1px solid #666666;
	border-top: none;	
	width: 940px;
}
table a {
	text-decoration: underline;
}
table a:visited {
	text-decoration: none;
}
tr.odd {
	background-color: #ebf3ff;
}
tr a {
	color: #000000;
}
tr:hover a {
	color: #ffffff;
}
tr:hover, tr.odd:hover {
	background-color: #3d80df;
	color: #ffffff;
}
caption {
	height: 45px;
	line-height: 44px;
	color: #60634E;
	font-weight: bold;
	text-align: center;
	width: 100%;
	margin: 0;
	padding: 0;
	margin-left: -1px;
	background: #ffffff url(captop.jpg) repeat-x;
	background-position: 50% top;
	border-left: 2px solid #616161;
	border-right: 2px solid #616161;
}
thead th {
	font-size: 105%;
	color: #000;
	background: #ffffff url(tbar.gif) repeat-x;
	height: 33px;
}
thead th:hover {
	background: #ffffff url(tbov.gif) repeat-x;
	
}
tr {
	vertical-align: top;
}
tr,th,td {
	padding: .75em;
}
td {
	border-left: 1px solid #dadada;
}
tfoot tr {
	background: #fff url(bbar.gif) repeat-x;
}
tfoot td, tfoot th{
	color: #000;
	border: 0px;
}
*/

Tema: Soft Table - A Simple table style with the use of the soft brown color
Author: Newton de Góes Horta
Site: --
Country Origin: Brazil
*/
/*
table {
 font-size:0.9em;
 font-family: Arial, Helvetica, verdana sans-serif;
 background-color:#fff;
 border-collapse: collapse;
 width: 100%;
}
caption {
 font-size: 25px;
 color: #1ba6b2;
 font-weight: bold;
 text-align: left;
 background: url(header_bg.jpg) no-repeat top left;
 padding: 10px;
 margin-bottom: 2px;
}
thead th {
 border-right: 1px solid #fff;
 color:#fff;
 text-align:center;
 padding:2px;
 text-transform:uppercase;
 height:25px;
 background-color: #a3c159;
 font-weight: normal;
}
tfoot {
 color:#1ba6b2;
 padding:2px;
 text-transform:uppercase;
 font-size:1.2em; 
 font-weigth: bold;
 margin-top:6px;
 border-top: 6px solid #e9f7f6;
}
tbody tr {
 background-color:#fff;
 border-bottom: 1px solid #f0f0f0;
}
tbody td {
 color:#414141;
 padding:5px;
 text-align:left;
}
tbody th {
 text-align:left;
 padding:2px;
}
tbody td a, tbody th a {
 color:#6C8C37;
 text-decoration:none;
 font-weight:normal; 
 display:block;
 background: transparent url(links_yellow.gif) no-repeat 0% 50%;
 padding-left:15px;
}
tbody td a:hover, tbody th a:hover {
 color:#009193;
 text-decoration:none;
}
*/
	
</style>

</head>
<body>
<?php
/*
// Inici per a depuració: recuperació de missatges d'error
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_NOTICE);
*/

include_once("funcions.php");

$cami = "../../wikiform/data/pages/z_gestio/aux/";
$fitxer_cursos = "infocursos.txt";
$fitxer_marcats = $cami.$fitxer_cursos;
//$novetats  = "/dades/wikiform/data/pages/z_gestio/aux/cursos_a_marcar_novetat.txt";

// /* TRASPASSAT A crea_index.php
// Si  s'han enviat dades del formulari, processem la informació
if ((isset($_POST["set"]))) { // SÍ, s'ha enviat el formulari
	
	// Creem array amb les etiquetes de cada opció: etiqueta programa|etiqueta array 
	$marques = array ("actiu|inactius","nou|novetat","elaboracio|elaboracio","actualitzat|actualitzats");
	$cursos_marcats = array();	
	$desti = array();
		
	foreach($marques as $marca){
		$separa = explode("|",$marca);
		$desti[] = "[".$separa[1]."] \n\n";
		$torna = "";
		//echo $separa[1].": <br>";
		for ($i=0; $i<count($_POST[$separa[0]]); $i++){
			$torna .= $_POST[$separa[0]][$i]."$"; 
			$cursos_marcats[$separa[1]][] = $_POST[$separa[0]][$i]; 
			if (in_array($_POST[$separa[0]][$i], $cursos_marcats['inactius']) 
				and  in_array($_POST[$separa[0]][$i],$cursos_marcats['novetat'])){
					$alerta = "ALERTA! Hi pot haver alguna incongruència(Inactiu/Novetat)";
				}
		}
		
		$desti[] = strtolower($torna);
		$desti[] = "\n\n\n";
		//echo strtolower($torna)."<br><br>";
	}
	
	
	copy($fitxer_marcats,$fitxer_marcats.".bak"); 
	
	if (file_put_contents($cami."temp.txt", $desti) === false){
		echo "No s'ha pogut crear el fitxer temporal";  
	}else{
    	unlink($fitxer_marcats);
    	rename($cami."temp.txt", $fitxer_marcats);
    	    	
    	//echo "<script languaje='javascript'> alert('Canvis desats'".$alerta."); </script>";
  //////  	echo "<script languaje='javascript'> alert('Canvis desats ".$alerta."'); </script>";
 //   	echo "Les dades s'han desat correctament a: '$fitxer_marcats' <br /><br />";
	}   

}	

$categories = $cami."base_index_cursos.txt";
$index = $cami."index_cursos_gestio.txt"; //"index_cursos.txt";
//$infocursos = "/dades/wikiform/data/pages/z_gestio/aux/infocursos.txt";
$fcategories = file($categories);
$findex = file($index);
$cursos = getcursosmarcats($fitxer_marcats);
//echo "<pre>";
//print_r($cursos);
//echo "</pre>";
	
	echo '<a href="/wikiform/wikiform/z_gestio/gestio_cursos">Torna a gestió de cursos (Wiki)</a>';
	//echo '  |  <a href="/wikiform/serveis/scripts/crea_index.php">Crea índex de materials</a>';
	echo '  |  <a href="/wikiform/serveis/scripts/crea_index.php?tot=1" title="Cal fer-ho només quan haguem afegit cursos nous">Refés llista base de cursos</a>';
	echo '  |  <a href="/wikiform/serveis/scripts/gestio_cursos.php">Gestió de cursos</a> ';
	echo '  |  <a href="/wikiform/wikiexport/cursos/index?purge=true">Purga index wikiexport</a>';
	echo '  |  <a href="/wikiform/wikiform/cursos/index?purge=true">Purga index wikiform</a> <br><br>';
//}
	echo "<h1> Gestió de cursos de formació </h1>";
	
	
	//echo "<form action='gestio_cursos.php' method='post'>\n";
	echo "<form action='crea_index.php' method='post'>\n";
	echo "<input type='hidden' name='set' value='yes'>\n";
//	echo "<table style='text-align: left; width: 100%; height: 52px;' border='0'cellpadding='2' cellspacing='2'>";
//echo "<table  border='0'cellpadding='2' cellspacing='2'>";

	//echo "<tbody>";
/*	echo "<tr> <td style='vertical-align: top; background-color: rgb(43, 175, 219);'>Codi<br></td>";
	echo "<td style='vertical-align: top; background-color: rgb(43, 175, 219);'>Activitat<br></td>";
	echo "<td style='vertical-align: top; background-color: rgb(43, 175, 219);'>Inactiu<br></td>";
	echo "<td style='vertical-align: top; background-color: rgb(43, 175, 219);'>Novetat<br></td>";
	echo "<td style='vertical-align: top; background-color: rgb(43, 175, 219);'>En elaboracio<br></td></tr>";
*/

	foreach($findex as $linia){
		$alinia = explode("|",$linia);
		$categoria = "";
		$codiact = "";
		$titolact = "";
		if ($alinia[1] == "") {
			$categoria = $alinia[0]; //<span style="font-weight: bold;">HOLA</span>
			$var = strspn($categoria, "=");
	
			switch ($var) {
				case 0: 
					$oh = ""; 
					$ch = "";
    			case 3:
        			$oh = "<br /><h4>";
					$ch = "</h4>";	
					$classe = "subcategoria";
        			break;
    			case 5:
        			$oh = "<br /><h2>";
					$ch = "</h2>";
					$classe = "categoria";
        			break;
			}
			$aux = str_replace("=", "", $categoria); //  style='font-weight: bold;
			//echo "<tr width='100%'> <td colspan='4' rowspan='1' style='vertical-align: top; '>".$oh."<span'>".trim($aux)."</span>".$ch."</td></</tr>\n";
			if (trim($aux) != ""){
				echo "<table  border='0'cellpadding='2' cellspacing='2'> <tbody>";
				if ($ch == "</h2>"){
				//		echo "<tr><td colspan='6' rowspan='1' bgcolor='#FFFFFF'>&nbsp<td></tr>";
					//echo "<br /><br />";
				}
				//echo "<tr> <td colspan='4' rowspan='1' >".$oh."<span'>".trim($aux)."</span>".$ch."</td></</tr>\n";
							
				echo "<tr width='680px' class='".$classe."'> <td colspan='5' rowspan='1' >".$oh."<span>".trim($aux)."</span>".$ch."</td>";
				echo " <td> <br /><br /><input type='submit' name='formSubmit' value='Desar' /></td> </tr>\n";
				//echo "</table>";
			}else{
				echo "";
			}
			
			//echo "<table border='0'cellpadding='2' cellspacing='2'> ";
			$comptador = 0;
			if (trim($categoria)!="") {
				//echo "<td><input type='submit' name='formSubmit' value='Desar' /></td></tr>\n";
				//echo "<tr> <th style='vertical-align: top; background-color: rgb(43, 175, 219);'>Codi<br></th>\n";
				echo "<tr class='cap'> <th>Codi<br></th>\n";
				echo "<th width='460px'>Activitat<br></th>\n";
				echo "<th>Inactiu<br></th>\n";
				echo "<th>Novetat<br></th>\n";
				echo "<th>Elaboració<br></th>\n";
				echo "<th>Actualitzat<br></tr></tr>\n";
				//echo "<th style='vertical-align: top; background-color: rgb(43, 175, 219);'>Actualitzat<br></th></tr>";

			}
//			echo $categoria; print "<br>";
		}
		else {
			$activitat = explode("-", $alinia[1]);
			$codiact = trim($activitat[0]);
			$titolact = trim($activitat[1]);
			$pos = strpos($activitat[1],"]]");
			//print_r($actiu);

			$inact_check = "";
			if(in_array(strtolower($codiact), $cursos['inactius']))
				$inact_check = "checked";

			$novet_check = "";
			if(in_array(strtolower($codiact), $cursos['novetat']))
				$novet_check = "checked";
			 
			$elabo_check = "";
			if( in_array(strtolower($codiact), $cursos['elaboracio']))
				$elabo_check = "checked";
				
			$actua_check = "";
			if(in_array(strtolower($codiact), $cursos['actualitzats']))
				$actua_check = "checked";
					
			if ($comptador++ % 2 == 0){
				$nombre = "even";
			}else{
				$nombre = "odd";
			}	
			
			//if 
			if ($pos) $titolact = substr($activitat[1],0, $pos - strlen($activitat[1])); 
			echo "<tr class='$nombre'> <td>".$codiact."<br></td>\n";
			echo "<td >".$titolact."<br></td>\n";
			echo "<td><input type='checkbox' name='actiu[]' ".$inact_check."  value='".$codiact."' /></td>\n";
			echo "<td><input type='checkbox' name='nou[]' ".$novet_check."  value='".$codiact."' /></td>\n";
			echo "<td><input type='checkbox' name='elaboracio[]' ".$elabo_check." value='".$codiact."' /></td>\n";
			echo "<td><input type='checkbox' name='actualitzat[]' ".$actua_check." value='".$codiact."' /></td></tr>\n";
		}
		//echo "</table>";

	}
	echo "</table></tbody>";
	echo " </form>\n";
	
	
	
	//	echo " <input type='submit' name='formSubmit' value='Desar' />";
//	echo " </form>";
/////}

?>
</body>
</html>
<?php 
}
?>
