<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
    // Rimuovi la chiave esterna prima di eliminare la tabella
    Schema::table('projects', function (Blueprint $table) {
        $table->dropForeign(['type_id']); // Assicurati che 'type_id' sia il nome corretto della colonna
    });

    // Ora puoi eliminare la tabella types
    Schema::dropIfExists('types');
}
};
