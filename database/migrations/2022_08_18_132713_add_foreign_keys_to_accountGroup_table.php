<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAccountGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accountGroup', function (Blueprint $table) {
            $table->foreign(['AccountID'], 'FK_accountGroup_cdbAccounts')->references(['AccountID'])->on('cdbAccounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accountGroup', function (Blueprint $table) {
            $table->dropForeign('FK_accountGroup_cdbAccounts');
        });
    }
}
