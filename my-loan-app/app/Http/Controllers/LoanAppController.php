<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\LoanApplication;
use App\LoanAppBorrowers;
use Illuminate\Http\Request;

class LoanAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('loanapp/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('loanapp/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new LoanApplication;
        $application->save();   

        if(!empty($request->first_name1) && (!empty($request->last_name1)))
        {
            $borrower1 = new Borrower;
            if(!empty($request->first_name1)) { $borrower1->first_name = $request->first_name1; }
            if(!empty($request->last_name1)) { $borrower1->last_name = $request->last_name1; }
            if(!empty($request->job_title1)) { $borrower1->job_title = $request->job_title1; }
            if(!empty($request->annual_income1)) { $borrower1->annual_income = $request->annual_income1; }
            if(!empty($request->bank_account1)) { $borrower1->bank_account = $request->bank_account1; }
            $borrower1->save();

            $appBorrower1 = new LoanAppBorrowers;
            $appBorrower1->loan_application_id = $application->id;
            $appBorrower1->borrower_id = $borrower1->id;
            $appBorrower1->save();
        }

        if(!empty($request->first_name2) && (!empty($request->last_name2)))
        {
            $borrower2 = new Borrower;
            if(!empty($request->first_name2)) { $borrower2->first_name = $request->first_name2; }
            if(!empty($request->last_name2)) { $borrower2->last_name = $request->last_name2; }
            if(!empty($request->job_title2)) { $borrower2->job_title = $request->job_title2; }
            if(!empty($request->annual_income2)) { $borrower2->annual_income = $request->annual_income2; }
            if(!empty($request->bank_account2)) { $borrower2->bank_account = $request->bank_account2; }
            $borrower2->save();

            $appBorrower2 = new LoanAppBorrowers;
            $appBorrower2->loan_application_id = $application->id;
            $appBorrower2->borrower_id = $borrower2->id;
            $appBorrower2->save();
        }

        return redirect('loanapp/list');
    }

    public function listapps(Request $request)
    {
        $applications = LoanApplication::all();

        return view('loanapp/list', ['apps' => $applications]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
