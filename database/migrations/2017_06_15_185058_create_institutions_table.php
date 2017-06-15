<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');

				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users');

				$table->string('Name');
				$table->string('Responsabilities');
				$table->mediumText('Description');
				$table->string('Address');
				$table->string('Email');
				$table->integer('Phone');
				$table->string('Website');

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
        Schema::dropIfExists('institutions');
    }
}
