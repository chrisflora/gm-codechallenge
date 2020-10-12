<?php

namespace Tests\Feature;

use App\LoanAppBorrowers;
use App\LoanApplication;
use App\Borrower;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoanAppTest extends TestCase
{
    public function testLoanApplicationCreate()
    {
    	$loanApp = new LoanApplication();
		$loanApp->save();

		$borrower = new Borrower();
		$borrower->first_name = 'Brian';
		$borrower->last_name = 'Smith';
		$borrower->annual_income = 250000;
		$borrower->bank_account = '1122334455';
		$borrower->save();

        $appBorrower = new LoanAppBorrowers();
        $appBorrower->loan_application_id = $loanApp->id;
        $appBorrower->borrower_id = $borrower->id;
        $appBorrower->save();

    	$loanApp = LoanApplication::find($loanApp->id);

        $this->assertGreaterThan(1, $loanApp->id);
        $this->assertEquals(count($loanApp->borrowers), 1);

		return $loanApp->id;
    }

	/**
	 * @depends testLoanApplicationCreate
	 * @params $id
	 */
	public function testLoanApplicationDelete($id)
	{
    	$loanApp = LoanApplication::find($id);

		foreach($loanApp->borrowers as $b)
		{
			$loanAppBorrowers = LoanAppBorrowers::where('loan_application_id',$loanApp->id)->get();
			foreach($loanAppBorrowers as $lab)
			{
				$this->assertTrue($lab->delete());
			}
			$this->assertTrue($b->delete());
		}

		$this->assertTrue($loanApp->delete());
	}
}
