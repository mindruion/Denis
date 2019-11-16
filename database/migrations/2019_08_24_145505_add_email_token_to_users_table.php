<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailTokenToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if ( !Schema::hasColumn('users', 'email_token') && !Schema::hasColumn('users', 'email_confirmed') )
        Schema::table('users', function (Blueprint $table) {
          $table->string('email_token');
          $table->string('email_confirmed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if ( !Schema::hasColumn('users', 'email_token') )
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('email_token');
        });
    }
}
