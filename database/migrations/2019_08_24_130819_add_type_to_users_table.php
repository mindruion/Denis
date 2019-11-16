<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if ( !Schema::hasColumn('user', 'type') )
        Schema::table('users', function (Blueprint $table) {
          $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if ( Schema::hasColumn('user', 'type') )
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
