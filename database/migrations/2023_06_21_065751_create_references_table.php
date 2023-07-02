<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('slug_uz')->nullable();
            $table->string('slug_ru')->nullable();
            $table->string('slug_en')->nullable();

            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();

            $table->longText('content_uz')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('content_en')->nullable();

            $table->longText('excerpt_uz')->nullable();
            $table->longText('excerpt_ru')->nullable();
            $table->longText('excerpt_en')->nullable();

            $table->dateTime('date')->nullable();
            $table->jsonb('meta')->nullable();
            $table->integer('views_count')->nullable();

            $table->smallInteger('has_uz')->default(0);
            $table->smallInteger('has_ru')->default(0);
            $table->smallInteger('has_en')->default(0);

            $table->smallInteger('sort')->nullable();
            $table->unsignedBigInteger('references_type_id')->nullable();
            $table->unsignedBigInteger('attachment_id')->nullable();
            $table->smallInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('references_type_id')->references('id')->on('references_types');
            $table->foreign('attachment_id')->references('id')->on('attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references');
    }
}
