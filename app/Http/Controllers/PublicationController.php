<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DataTables\PublicationDataTable;

class PublicationController extends Controller
{
    public function index(PublicationDataTable $dataTable)
    {
        return $dataTable->render('publications.index');
    }
    public function datatables(PublicationDataTable $dataTable)
    {
        return $dataTable->ajax();
    }
    public function read($id)
    {
        $publications = Publication::find($id);
        dd($publications);
    }
}
