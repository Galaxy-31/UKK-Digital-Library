<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $borrow = Borrow::where('id', $id)->first();
        // $borrow = $borrow->toArray();
        $data = [
            'image' => $borrow->book->image,
            'title' => $borrow->book->title,
            'kode' => $borrow->book->kode_buku,
            'peminjam' => $borrow->user->name,
            'status' => $borrow->status,
            'created_at' => $borrow->created_at,
            'updated_at' => $borrow->updated_at,
        ];
        $pdf = PDF::loadView('pdf-template', [
            'borrow'=> $data
        ]);
        
        return $pdf->download($borrow->book->title . ' | '. $borrow->user->name  .'.pdf');
    }

    // public function read(Books $book)
    // {
    //     $pathToFile = public_path('storage/books/' . $book->book);

    //     if (file_exists($pathToFile)) {
    //         $headers = [
    //             'Content-Type' => 'application/book',
    //             'Content-Disposition' => 'inline; filename="' . $book->book . '"',
    //         ];
    //         return response()->file($pathToFile, $headers);
    //     } else {
    //         abort(404); // File not found
    //     }
    // }
    
}
