<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

		Schema::create('borrowers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
            $table->string('job_title');
            $table->integer('annual_income');
            $table->string('bank_account');
            $table->datetime('deleted_at');
			$table->timestamps();
		});

		Schema::create('loan_app_borrowers', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('loan_application_id');
			$table->integer('borrower_id');
			$table->datetime('deleted_id');
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
        //
		Schema::drop('borrowers');
		Schema::drop('loan_app_borrowers');
    }
}
