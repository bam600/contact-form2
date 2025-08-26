<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            // 外部キー制約
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('first_name',255);
            $table->string
            ('last_name',255);
            $table->tinyint('gender');
            $table->string
            ('email',255);
            $table->string
            ('tel',255);
            $table->string
            ('address',255);
            $table->string
            ('building',255)->nullable();
            $table->text
            ('detail');
            $table->string('',255);
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
        Schema::dropIfExists('contacts');
    }
}
