<?php

// ElecteurController.php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function createForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cni' => 'required|string|max:20',
            'adresse' => 'required|string',
        ]);

        Electeur::create($request->all());

        return redirect()->route('liste-candidat');
    }
    // ElecteurController.php

    public function listeCandidat()
    {
        $candidats = Candidat::all(); // Assurez-vous d'avoir le modèle Candidat défini

        return view('liste_candidat', compact('candidats'));
    }
}
