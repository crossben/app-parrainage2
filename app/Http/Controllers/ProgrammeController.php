<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use App\Models\Candidat;

class ProgrammeController extends Controller
{
    public function index()
    {
        $candidats = Candidat::all();
        $programmes = Programme::all();

        Programme::create([
            'nom' => 'Programme1',
            'secteur' => 'Santé',
            'candidat_id' => 1,
        ]);

        Programme::create([
            'nom' => 'Programme2',
            'secteur' => 'Éducation',
            'candidat_id' => 2,
        ]);
        return view('programme', compact('programmes'));
    }
}
