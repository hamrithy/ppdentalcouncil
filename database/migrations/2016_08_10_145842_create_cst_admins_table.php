<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCstAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cst_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->integer('generation');
            $table->string('name');
            $table->dateTime('date_in');
            $table->string('company_name');
            $table->text('address');
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
        Schema::drop('cst_admins');
    }
}
