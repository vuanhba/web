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
        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign('id_role')->references('id')->on('roles');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {  Schema::table('accounts', function (Blueprint $table) {
        $table->dropForeign('accounts_id_role_foreign');
     
    });
       
    }
};
