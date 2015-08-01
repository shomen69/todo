<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTodosTable extends Migration
{
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('work');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('todo');
    }
}
