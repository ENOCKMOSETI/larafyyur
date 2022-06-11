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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('phone');
            $table->enum('genre', [
                'Alternative',
                'Blues',
                'Classical',
                'Country',
                'Electronic',
                'Folk',
                'Funk',
                'Hip_Hop',
                'Heavy_Metal',
                'Instrumental',
                'Jazz',
                'Musical_Theatre',
                'Pop',
                'Punk',
                'R_n_B',
                'Reggae',
                'Rock_n_Roll',
                'Soul',
                'Other'
            ]);
            $table->string('facebook_link');
            $table->string('image_link');
            $table->string('website_link');
            $table->boolean('looking_for_talent');
            $table->longText('description');
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
        Schema::dropIfExists('venues');
    }
};
