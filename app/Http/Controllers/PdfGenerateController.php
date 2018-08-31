<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfGenerateController extends Controller
{
    public function pdfview()
    {

    	/*PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(true)->save('iskpro1.pdf');*/
    	return PDF::loadFile(public_path().'/home.html')->save(public_path().'/home.pdf')->stream('download.pdf');
    }
}
