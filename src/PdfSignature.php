<?php

namespace Virtualorz\PdfSignature;

use DB;
use Session;
use Route;
use setasign\Fpdi\Fpdi;

class PdfSignature
{

    protected static $message= [
        'status' => 0,
        'status_string' => '',
        'message' => '',
        'data' => []
    ];

    /**
     * signature pdf with image and crt info
     * @param $key
     * @param $value
     */
    public function sign($pdf_path,$signature_path,$location_info,$result_name)
    {
        $pdf = new Fpdi();
        $pages = $pdf->setSourceFile($pdf_path);

        for ($i = 1; $i <= $pages; $i++){
            $pdf->AddPage();

            $tplId = $pdf->importPage($i);

            $pdf->useTemplate($tplId, 0, 0);

            foreach($location_info as $k=>$v){
                if($i == $v['page']){
                    $pdf->image($signature_path,$v['x'],$v['y']);
                }
            }
        }

        $pdf->Output('D',$result_name);
    }

}
