<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageColumnGejalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->dropColumn('ty_pic');
            $table->dropColumn('sy_pic');
            $table->dropColumn('y_pic');
            $table->dropColumn('cy_pic');
            $table->dropColumn('ky_pic');
            $table->dropColumn('tt_pic');
            $table->longText('image')->nullable()->after('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */
    public function down()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
