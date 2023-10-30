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
        Schema::create('biens_immeubiliers', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('taille');
            $table->integer('prix');
            $table->mediumText('img')->nullable();
            $table->string('description');

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            // $table->foreign('users_id')->references('id')->on('users');

            $table->unsignedBigInteger('types_id');
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');

            // $table->foreign('types_id')->references('id')->on('types');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens_immeubiliers');
    }
};
