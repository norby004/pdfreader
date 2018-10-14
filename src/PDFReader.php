<?php

namespace Norby;

use \Smalot\PdfParser\Parser as Parser;

class PDFReader {

    protected $parser;
    protected $pdf;

    function __construct($pdf) {
        $this->parser = new Parser();
        $this->pdf = $this->parser->parseFile($pdf);
    }

    public function getText() {
        return $this->pdf->getText();
    }

    public function getDetails() {
        return $this->pdf->getDetails();
    }

    public function getPages() {
        return $this->pdf->getPages();
    }

}