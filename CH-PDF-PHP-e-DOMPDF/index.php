<?php

use Dompdf\Dompdf;

require __DIR__."/vendor/autoload.php";

$dompdf = new Dompdf();
//$dompdf->loadHtml("<h1>Hello Worlf!</h1>");
$dompdf->loadHtml("<h1>Hello Worlf!</h1>");

//$dompdf->setPaper("A4", "landscape");
$dompdf->setPaper("A4 ");

$dompdf->render();

$dompdf->stream("file.pdf", ["Attachment" => false]);