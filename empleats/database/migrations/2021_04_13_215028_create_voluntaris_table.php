<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntaris', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('nom');
            $table->string('cognoms');
            $table->string('adreca');
            $table->string('poblacio');
            $table->string('comarca');
            $table->integer('fixe');
            $table->integer('mobil');
            $table->string('email');
            $table->integer('edat');
            $table->string('professio');
            $table->integer('horesDedicades');
            $table->string('nomONG');
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
        Schema::dropIfExists('voluntaris');
    }
}
