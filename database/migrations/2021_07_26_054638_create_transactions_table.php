<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('receipt_number');
            $table->string('item');
            $table->string('quantity');
            $table->string('amount');
            $table->string('deposit');
            $table->string('balance')->nullable();
            $table->string('company');
            $table->string('end_date');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('created_by');
            $table->enum('status',['active','done','lost'])->default('active');
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
        Schema::dropIfExists('transactions');
    }
}
