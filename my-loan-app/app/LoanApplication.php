<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    //
	protected $table = 'loan_applications';

	public function store(Request $request)
	{

		$loanApp = new LoanApplication;
		$loanApp->save();
		
	}

	public function borrowers()
	{
		return $this->belongsToMany('App\Borrower', 'loan_app_borrowers', 'loan_application_id', 'borrower_id');
	}
}
