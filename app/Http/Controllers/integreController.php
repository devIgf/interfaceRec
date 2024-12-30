<?php

namespace App\Http\Controllers;

use App\Models\Integre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        //


        try {
            //code...
            DB::transaction(function () use ($request) {
                foreach ($request as $value) {
                    Integre::create([
                        'co_no'=> $value->CO_NO,
                        'ct_intitule'=> $value->CT_Intitule,
                        'ct_telephone'=> $value->CT_Telephone,
                        'ct_email'=> $value->ct_EMail,
                        'co_nom'=> $value->CO_Nom,
                        'ct_num'=> $value->CT_Num,
                        'ec_intitule'=> $value->EC_Intitule,
                        'ec_sens'=> $value->EC_sens,
                        'ec_montant'=> $value->EC_Montant,
                        'ec_echeance'=> $value->EC_Echeance,
                        'ec_refpiece'=> $value->EC_RefPiece,
                        'ec_lettre'=> $value->EC_Lettre,
                        'jo_jo_type'=> $value->JO_Type,
                    ]);
                }
            });
            return response()->json(['message'=>'les données ont été enregistré avec succès'],201);
        } catch (QueryException $e) {
            return response()->json(['error'=>Erreur lors de l\'enregistrement des données : ' . $e->],201);
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
