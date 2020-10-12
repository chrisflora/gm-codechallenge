<style>

	table, th, td {
		border: 1px solid black;
	}
	
</style>

<table>
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
		<td>{{ $a->id }}</td>
		<td>{{ $b->first_name }}{{ $b->last_name }}</td>
		<td>{{ $b->job_title }}</td>
		<td>{{ $b->annual_income }}</td>
		<td>{{ $b->bank_account }}</td>
	</tr>
	@endforeach

@endforeach
</table>