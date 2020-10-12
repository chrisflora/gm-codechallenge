<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    //
	protected $table = 'borrowers';

	public function store(Request $request)
	{

		$borrower = new Borrower;
		$borrower->first_name = $request->first_name;
		$borrower->last_name = $request->last_name;
		$borrower->job_title = $request->job_title;
		$borrower->annual_income = $request->annual_income;
		$borrower->bank_account = $request->bank_account;
		$borrower->save();
		
	}
}
