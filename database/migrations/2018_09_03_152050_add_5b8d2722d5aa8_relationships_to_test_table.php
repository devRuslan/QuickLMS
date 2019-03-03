<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b8d2722d5aa8RelationshipsToTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tests', function(Blueprint $table) {
            if (!Schema::hasColumn('tests', 'course_id')) {
                $table->integer('course_id')->unsigned()->nullable();
                $table->foreign('course_id', '203482_5b8d2721de547')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tests', 'lesson_id')) {
                $table->integer('lesson_id')->unsigned()->nullable();
                $table->foreign('lesson_id', '203482_5b8d27220346e')->references('id')->on('lessons')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function(Blueprint $table) {
            
        });
    }
}
