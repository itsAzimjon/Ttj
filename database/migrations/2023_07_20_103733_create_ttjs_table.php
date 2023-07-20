<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttjs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_date');
            $table->integer('phone_num');
            $table->integer('parent_num');
            $table->string('region');
            $table->mediumText('address');
            $table->integer('facultate_id');
            $table->string('facultate');
            $table->string('cafedra');
            $table->text('deriction');
            $table->integer('course');
            $table->string('group');
            $table->string('shape');
            $table->mediumText('details')->nullable();
            $table->text('doc')->nullable();
            $table->integer('check');
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
        Schema::dropIfExists('ttjs');
    }
}
