<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFullnameColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname',50)->nullable();
            $table->string('photo',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->smallInteger('status')->default(1)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('status');
            $table->dropColumn('photo');
            $table->dropColumn('phone');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
}
