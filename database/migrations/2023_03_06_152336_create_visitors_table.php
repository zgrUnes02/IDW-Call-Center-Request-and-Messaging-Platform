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
        Schema::create('visitors', function (Blueprint $table) {
            $table -> id();
            $table -> string('email');
            $table -> string('nom') ;
            $table -> string('family_name') ;
            $table -> string('telephone') ;
            $table -> integer('annee_experience') ;
            $table -> string('titre') ;
            $table -> string('etudes') ;
            $table -> string('jour') ;
            $table -> string('heure') ;
            $table -> softDeletes() ;
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
