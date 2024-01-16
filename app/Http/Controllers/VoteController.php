<?php

// app/Http/Controllers/VoteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Electeur;
use App\Models\Candidat;

class VoteController extends Controller
{
    public function voterForm($candidat)
    {
        // Récupérez les informations nécessaires (par exemple, depuis la base de données)
        //$electeur = Electeur::find($electeur);
        $candidat = Candidat::find($candidat);

        return view('vote', compact('candidat'));
    }
    public function confirm()
    {
        // Récupérez les informations nécessaires (par exemple, depuis la base de données)
        //$electeur = Electeur::find($electeur);
        return view('confirmed');
    }
    public function unconfirm()
    {
        // Récupérez les informations nécessaires (par exemple, depuis la base de données)
        //$electeur = Electeur::find($electeur);
        return view('unconfirmed');
    }

    // public function validerVote(Request $request)
    // {
    //     // Traitement pour valider le vote
    //     // Vous pouvez enregistrer les données dans la base de données ici

    //     return redirect()->route('page-de-confirmation');
    // }
}
