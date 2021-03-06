<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('judul');
            // $table->string('slug');
            $table->string('sampul');
            $table->text('isi');
            $table->timestamps();
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
        });
        $statement = "ALTER TABLE artikels AUTO_INCREMENT = 2000000001;";
        DB::unprepared($statement);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
