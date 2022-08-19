<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdbAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdbAccounts', function (Blueprint $table) {
            $table->increments('AccountID');
            $table->string('AccountIDNo', 50)->nullable();
            $table->integer('AONumber')->nullable();
            $table->string('AccountName', 300)->nullable();
            $table->string('AccountGroup', 50)->nullable();
            $table->string('AccountType', 15)->nullable();
            $table->string('DomainAccount', 50)->nullable();
            $table->string('Email', 30)->nullable();
            $table->dateTime('ValidTo')->nullable();
            $table->string('SignaturePath', 500)->nullable();
            $table->binary('SignatureImage')->nullable();
            $table->string('NickName', 50)->nullable();
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cdbAccounts');
    }
}
