<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('RecupereClient', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('co_no');
            $table->string('ct_intitule');
            $table->string('ct_telephone');
            $table->string('ct_email');
            $table->string('co_nom');
            $table->string('co_num');
            $table->string('ec_intitule');
            $table->string('ec_sens');
            $table->decimal('ec_montant', 10,2);
            $table->date('ec_echeance');
            $table->string('ec_refpiece');
            $table->string('ec_lette');
            $table->unsignedBigInteger('jo_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('RecupereClient');
    }
};
