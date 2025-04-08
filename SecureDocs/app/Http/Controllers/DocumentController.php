<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $pdf = Pdf::loadView('pdf.document', [
            'user' => auth()->user(),
            'timestamp' => now(),
            'title' => "문서 #{$id}"
        ]);

        return $pdf->download("document_{$id}.pdf");
    }
}
