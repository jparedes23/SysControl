<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Control;
use PDF;



class PdfController extends Controller
{
    public function generatePdf(){
        {
            // $data=Control::paginate();
            // view()->share('data');
            $data = [
                'title' => 'Welcome to CodeSolutionStuff.com',
                'date' => date('m/d/Y')
            ];

            $pdf = PDF::loadView('myPDF',$data);
            $pdf->render();

            return $pdf->stream();
        }
    }
}
