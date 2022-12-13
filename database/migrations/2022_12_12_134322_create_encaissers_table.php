<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncaissersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encaissers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caissier_id')->constrained();
            $table->foreignId('etudiant_id')->constrained();
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->integer('heureEncaisse');
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->string('nomTuteur_etudiant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encaissers');
    }
}
