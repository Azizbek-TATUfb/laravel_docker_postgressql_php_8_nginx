<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->text('name_uz')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_en')->nullable();
            $table->string('link',255)->nullable();
            $table->smallInteger('status')->default(1);
            $table->smallInteger('type')->nullable();
            $table->unsignedBigInteger('attachment_id')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
