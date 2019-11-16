<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLogoToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if ( !Schema::hasColumn('companies', 'logo') )
        Schema::table('companies', function (Blueprint $table) {
          $table->string('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if ( Schema::hasColumn('companies', 'logo') )
        Schema::table('companies', function (Blueprint $table) {
          $table->dropColumn('logo');
        });
    }
}
