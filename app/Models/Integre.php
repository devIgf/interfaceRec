<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integre extends Model
{
    use HasFactory;

    protected $table = "RecupereClient"; // Nom de la table dans la base de données

    protected $fillable = [
        'co_no',
        'ct_intitule',
        'ct_telephone',
        'ct_email',
        'co_nom',
        'co_num',
        'ec_intitule',
        'ec_sens',
        'ec_montant',
        'ec_echeance',
        'ec_refpiece',
        'ec_lette',
        'jo_type',
    ];
}
