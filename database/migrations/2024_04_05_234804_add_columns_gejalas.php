<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsGejalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->longText('ty_pic')->nullable()->after('kategori');
            $table->longText('sy_pic')->nullable()->after('ty_pic');
            $table->longText('y_pic')->nullable()->after('sy_pic');
            $table->longText('cy_pic')->nullable()->after('y_pic');
            $table->longText('ky_pic')->nullable()->after('cy_pic');
            $table->longText('tt_pic')->nullable()->after('ky_pic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->dropColumn(['ty_pic', 'sy_pic', 'y_pic', 'cy_pic', 'ky_pic', 'tt_pic']);
        });
    }
}
