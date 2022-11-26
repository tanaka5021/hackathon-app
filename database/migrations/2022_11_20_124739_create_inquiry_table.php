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
        Schema::create('inquiry', function (Blueprint $table) {
            $table->id();
            $table->boolean('statas')->default(false);
            $table->string('question_content')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('rep_name')->nullable();
            $table->string('rep_division')->nullable();
            /*
            $table->timestamp('question_data')->nullable();
            $table->timestamp('respond_data')->nullable();
            */
            $table->string('respond_content')->nullable();
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
        Schema::dropIfExists('inquiry');
    }
};
