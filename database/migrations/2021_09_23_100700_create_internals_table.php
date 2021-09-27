<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internals', function (Blueprint $table) {
            $table->bigIncrements('id_usulan');
            $table->string('judul_usulan');
            $table->foreignId('id_skema')->nullable();
            $table->foreignId('id_users')->nullable();
            $table->longText('abstrak')->nullable();
            $table->string('url_usulan')->nullable();
            $table->integer('id_dosen')->nullable();
            $table->string('status_usulan');
            $table->text('type');
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
        Schema::dropIfExists('internals');
    }
}
