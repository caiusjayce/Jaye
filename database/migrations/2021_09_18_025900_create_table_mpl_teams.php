<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMplTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MPLteams', function (Blueprint $table) {
            $table->id();
            $table->string('yourName', 100)->nullable;
            $table->date('Birthdate')->nullable;
            $table->string('Address', 100)->nullable;
            $table->string('teamName', 100)->nullable;
            $table->string('teamRole', 100)->nullable;
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
        Schema::dropIfExists('mplteams');
    }
}
