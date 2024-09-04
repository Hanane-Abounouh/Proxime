<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenusTable extends Migration
{
    public function up()
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('chemin');
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->date('date_ajout');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contenus');
    }
}
