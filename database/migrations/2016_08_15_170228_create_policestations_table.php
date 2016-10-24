<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policestations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area');
            $table->string('lon');
            $table->string('lat');
            $table->string('address');
            $table->string('dutyofficer');
            $table->string('dmp');
            $table->string('tnt');
            $table->string('cell');
            $table->string('inspectorinvestigationcell');
            $table->string('inchargedmp');
            $table->string('inchargecell');
            $table->string('inchargefax');
            $table->string('inchargeemail');
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
        Schema::drop('policestations');
    }
}
