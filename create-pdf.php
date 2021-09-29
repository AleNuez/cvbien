<?php

require_once "./vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->setIsHtml5ParserEnabled(true);
$dompdf = new Dompdf($options);


$html = file_get_contents("./pdf-data.php");


$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled', TRUE);

$dompdf->loadHtml(utf8_decode($html));


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('miCv.pdf',array('Attachment'=>0));