<h1>Apply For Loan</h1>
<link href="/css/app.css" rel="stylesheet"> 


<form class="form-horizontal" method="post" action="create">

	<?php echo csrf_field(); ?>

	<div>Borrower 1</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="first_name">First Name</label>
		<input id="first_name" name="first_name1" type="text" placeholder="First Name" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="last_name">Last Name</label>
		<input id="last_name" name="last_name1" type="text" placeholder="Last Name" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="job_title">Job Title</label>
		<input id="job_title" name="job_title1" type="text" placeholder="Job Title" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="annual_income">Annual Income</label>
		<input id="annual_income" name="annual_income1" type="text" placeholder="Annual Income" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="bank_account">Bank Account</label>
		<input id="bank_account" name="bank_account1" type="text" placeholder="Bank Account" class="form-control input-md">
	</div>

	<br/>
	
	<div>Borrower 2</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="first_name">First Name</label>
		<input id="first_name" name="first_name2" type="text" placeholder="First Name" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="last_name">Last Name</label>
		<input id="last_name" name="last_name2" type="text" placeholder="Last Name" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="job_title">Job Title</label>
		<input id="job_title" name="job_title2" type="text" placeholder="Job Title" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="annual_income">Annual Income</label>
		<input id="annual_income" name="annual_income2" type="text" placeholder="Annual Income" class="form-control input-md">
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="bank_account">Bank Account</label>
		<input id="bank_account" name="bank_account2" type="text" placeholder="Bank Account" class="form-control input-md">
	</div>

	<input type="submit" value="Save"/>

</form>
