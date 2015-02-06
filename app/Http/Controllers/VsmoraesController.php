<?php namespace App\Http\Controllers;

use Vsmoraes\Pdf\Pdf;

class VsmoraesController extends BaseControler
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function helloWorld()
    {
        $html = '<html><head></head><body><h1>Hello world!</h1></body></html>';

        $this->pdf->load($html);

        return $this->pdf->show();
    }
}