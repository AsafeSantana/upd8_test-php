<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('endereco', 255)->after('sexo')->nullable();
        });

        Schema::table('representantes', function (Blueprint $table) {
            $table->string('endereco', 255)->after('sexo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('endereco');
        });

        Schema::table('representantes', function (Blueprint $table) {
            $table->dropColumn('endereco');
        });
    }
};