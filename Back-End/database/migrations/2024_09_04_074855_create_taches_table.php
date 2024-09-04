<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->foreignId('assigné_a')->constrained('users')->onDelete('cascade');
            $table->string('statut');
            $table->date('date_creation');
            $table->date('date_echeance')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taches');
    }
}
