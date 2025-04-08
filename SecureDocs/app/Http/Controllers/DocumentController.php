<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // 이 줄을 추가해야 합니다

class DocumentController extends Controller
{
    public function index()
    {
        $documents = [
            ['id' => 1, 'title' => '회사 보안정책'],
            ['id' => 2, 'title' => '기술 내부 전략']
        ];

        return view('documents', compact('documents'));
    }

    public function download($id)
    {
        $options = new \Dompdf\Options();
        $options->set('defaultFont', 'NanumGothic');
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('fontDir', public_path('fonts/'));
        $options->set('fontCache', public_path('fonts/'));
        // 옵션을 배열로 전달
        $pdf = Pdf::loadView('pdf.document', [
            'user' => auth()->user(),
            'timestamp' => now() -> addHours(9),
            'title' => "Document #{$id}"
        ]);
    
            // 이렇게 배열로 전달해야 함
        $pdf->setOptions([
            'defaultFont' => 'NanumGothic',
            'isRemoteEnabled' => true,
            'isPhpEnabled' => true,
            'fontDir' => public_path('fonts/'),
            'fontCache' => public_path('fonts/')
        ]);

    return $pdf->download("document_{$id}.pdf");
    }
    
}
