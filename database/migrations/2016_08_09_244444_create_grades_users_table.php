<?php

use App\Product\Database\CustomBluePrint;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_user', function (BluePrint $table) {
            $table->increments('id');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')
                ->references('id')
                ->on('grades')
                ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
//            $table->nepaliTimeStamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grade_user');
    }
}
