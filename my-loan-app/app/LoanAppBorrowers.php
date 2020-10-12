<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanAppBorrowers extends Model
{
    //
	protected $table = 'loan_app_borrowers';

	public function store(Request $request)
	{

		$loanAppBorrowers = new LoanAppBorrowers;
		$loanAppBorrowers->loan_application_id = $request->loan_app_id;
		$loanAppBorrowers->borrower_id = $request->borrower_id;

		$loanAppBorrowers->save();
		
	}
}
