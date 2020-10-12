<?php

use Illuminate\Http\Request;
use App\LoanApplication;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('loanapp/{id}', function($id) {

	$resultLoanApp = [];
    $loanApp = LoanApplication::find($id);

	$resultLoanApp['id'] = $loanApp->id;
	$resultLoanApp['total_annual_income'] = 0;
	$resultLoanApp['bank_accounts'] = [];
	foreach($loanApp->borrowers as $b)
	{
		$resultLoanApp['total_annual_income'] += $b->annual_income;
		if(!empty($b->bank_account))
		{
			$resultLoanApp['bank_accounts'][] = $b->bank_account;
		}
	}
	$resultLoanApp['created_at'] = $loanApp->created_at->format('Y-m-d H:i:s A');
	$resultLoanApp['updated_at'] = $loanApp->updated_at->format('Y-m-d H:i:s A');

	return json_encode($resultLoanApp);
});