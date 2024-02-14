<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentController extends Controller
{
    public function index()
    {
        $ansd = [
            'ANS Operations Division',
            'ANS Safety Division',
            'ANS Technical Division',
            'ANS Training Division',
            'MAvA',
            'Regional Semenanjung',
            'Regional Sarawak',
            'Regional Sabah',
        ];
        $role = User::find(Auth::user()->id)->getRoleNames();
        $div = Auth::user()->division;
        $documents = Document::all();

        return view('documents.index')->with('documents', $documents);
    }
    public function read($id)
    {
        $document = Document::find($id);
        dd($document);
    }
}
