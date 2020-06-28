<?php

namespace App\Libraries;

use Dompdf\Dompdf;

class Pdfgenerator
{
    public function generate($html, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = "potrait")
    {
        $dompdf =  new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();

        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
        } else {
            return $dompdf->output();
        }
    }
}
