<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_schedulings', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->integer('course_id');
            $table->integer('level_id');
            $table->integer('shift_id');
            $table->integer('classroom_id');
            $table->integer('batch_id');
            $table->integer('day_id');
            $table->integer('time_id');
            $table->integer('teacher_id');
            $table->integer('semester_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('schedule_status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('class_schedulings');
    }
};
