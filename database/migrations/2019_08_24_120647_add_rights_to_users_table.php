<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRightsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if ( !Schema::hasColumn('users', 'rights') )
        Schema::table('users', function (Blueprint $table) {
          $table->integer('rights')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if ( Schema::hasColumn('users', 'rights') )
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('rights');
        });
    }
}
