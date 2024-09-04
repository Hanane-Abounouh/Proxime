<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('collaboration_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->foreignId('utilisateur_id')->constrained('users')->onDelete('cascade');
            $table->string('statut')->default('En attente');
            $table->date('date_demande');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collaboration_requests');
    }
}
