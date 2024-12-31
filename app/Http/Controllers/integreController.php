<?php

namespace App\Http\Controllers;

use App\Models\Integre;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class integreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return('moa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données (facultatif mais recommandé)
        $request->validate([
            'co_no' => 'required|integer',
            'ct_intitule' => 'required|string|max:255',
            'ct_telephone' => 'required|string|max:20',
            'ct_email' => 'required|email|max:255',
            'co_nom' => 'required|string|max:255',
            'co_num' => 'required|string|max:50',
            'ec_intitule' => 'required|string|max:255',
            'ec_sens' => 'required|string|max:10',
            'ec_montant' => 'required|numeric',
            'ec_echeance' => 'required|date',
            'ec_refpiece' => 'required|string|max:50',
            'ec_lette' => 'required|string|max:50', 
            'jo_type' => 'required|integer',
        ]);

        try {
            // Création d'une nouvelle entrée
            $integre = Integre::create([
                'co_no' => $request->input('co_no'),
                'ct_intitule' => $request->input('ct_intitule'),
                'ct_telephone' => $request->input('ct_telephone'),
                'ct_email' => $request->input('ct_email'),
                'co_nom' => $request->input('co_nom'),
                'co_num' => $request->input('co_num'),
                'ec_intitule' => $request->input('ec_intitule'),
                'ec_sens' => $request->input('ec_sens'),
                'ec_montant' => $request->input('ec_montant'),
                'ec_echeance' => $request->input('ec_echeance'),
                'ec_refpiece' => $request->input('ec_refpiece'),
                'ec_lette' => $request->input('ec_lette'), 
                'jo_type' => $request->input('jo_type'),
            ]);

            // Retourner une réponse JSON en cas de succès
            return response()->json(['message' => 'Insertion réussie !', 'data' => $integre], 201);

        } catch (QueryException $e) {
            // Gérer l'erreur de requête (ex. : problème de connexion, violation de contrainte, etc.)
            return response()->json(['error' => 'Erreur lors de l\'insertion : ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // Gérer d'autres types d'exceptions
            return response()->json(['error' => 'Une erreur est survenue : ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Integre $integre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integre $integre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integre $integre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integre $integre)
    {
        //
    }
}
