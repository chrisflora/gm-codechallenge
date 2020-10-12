@extends('layout')

@section('bodyContent')

<div><a href="/loanapp/create">Create a Loan Application</a></div>
<br/>
<br/>

<table class="table">
	<tr>
		<th>App Id</th>
		<th>Name</th>
		<th>Job Title</th>
		<th>Income</th>
		<th>Bank Account</th>
	</tr>
@foreach ($apps as $a)

	@foreach ($a->borrowers as $b)
	<tr>
		<td><a href="/api/loanapp/{{ $a->id }}">{{ $a->id }}</a></td>
		<td>{{ $b->first_name }}{{ $b->last_name }}</td>
		<td>{{ $b->job_title }}</td>
		<td>{{ $b->annual_income }}</td>
		<td>{{ $b->bank_account }}</td>
	</tr>
	@endforeach

@endforeach
</table>

@endsection