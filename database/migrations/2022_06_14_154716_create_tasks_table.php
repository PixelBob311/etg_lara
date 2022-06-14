<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('description');
            $table->date('date_from');
            $table->date('date_to');
            $table->enum('priority', ['high', 'regular', 'low']);
            $table->enum('status', ['new', 'in_progress', 'done', 'canceled']);
            $table->foreignId('creator_id')->constrained('users');
            $table->foreignId('responsible_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('tasks');
    }
}
