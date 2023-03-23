<?php
// include autoloader
require __DIR__ . "/vendor/autoload.php";//llamando a dompdf de la carpeta para su función
// reference the Dompdf namespace
use Dompdf\Dompdf;//usar las funcion principal
use Dompdf\Options;//usar las opciones de funciones

//variables de la pagina index (los POST deben estar en mayusculas o causaran error la mayoria de funciones)
$dia = date('d');
$mes = date('m');
$anno = date('y');
$dd = $_POST['dd'];
$cargo = $_POST['cargo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$parroquia = $_POST['parroquia'];
$cargo1 = $_POST['cargo1'];
$nombre1 = $_POST['nombre1'];
$apellido1 = $_POST['apellido1'];

//PRUEBA EN CASO DE ERRORES (YA PASADO O CUMPLIDO SI ESTÁ TODOS COMO COMETNARIO)
//$name = $_POST['name'];
//$quality = $_POST['quality'];
//$html = '<h1>Ejemplo</h1>';
//$html .= "Hola <em> $name </em>";
//$html .= "Quality: $quality";

//Directorio
$options = new Options;//Nueva opcion
$options->setChroot(__DIR__);//Usar directorio interno
//Sus acciones
$dompdf = new Dompdf();//el anterior
$dompdf = new Dompdf($options);//Definir o aplicar la funcion del directorio interno

//cargar pagina exetrna
$html = file_get_contents("prueba.html");

//reemplazar con las variables
$html = str_replace(["{{anno}}", "{{mes}}", "{{dia}}", "{{dd}}", "{{municipio}}", "{{estado}}","{{parroquia}}", "{{ cargo }}", "{{cargo1}}", "{{ nombre }}", "{{nombre1}}", "{{ apellido }}", "{{apellido1}}"], [$anno, $mes, $dia, $dd, $municipio, $estado, $parroquia, $cargo, $cargo1, $nombre, $nombre1, $apellido, $apellido1], $html);

//cargamos el html de este archivo
$dompdf->loadHtml($html);


//cargamos la pagina
//$dompdf->loadHtmlFile("prueba.html");


// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Invitación.pdf', ['Attachment' => 0]);
?>
