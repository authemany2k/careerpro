<html>

<style type="text/css">
	th {
		border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;
	}

	td {
		border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;
	}

</style>
<table>
	<tr>
	<td colspan="10" style="background-color: #a0bdf2; text-align: center; font-size: 20; font-weight: bold;">APPLICANTS LIST</td>
	</tr>

	<thead>
	<tr>
		<th style="background-color: #01FF70; text-align: left;">S/N</th>
		<th style="background-color: #01FF70; text-align: left;">NAME</th>
        <th style="background-color: #01FF70; text-align: left;">EMAIL</th>
        <th style="background-color: #01FF70; text-align: left;">PHONE</th>
		<th style="background-color: #01FF70; text-align: left;">JOB TITLE</th>
		<th style="background-color: #01FF70; text-align: left;">COMPANY</th>
		<th style="background-color: #01FF70; text-align: left;">SHORTLISTED</th>
		<th style="background-color: #01FF70; text-align: left;">MESSAGE</th>
		<th style="background-color: #01FF70; text-align: left;">RESUME</th>
        <th style="background-color: #01FF70; text-align: left;">DATE CREATED</th>
	</tr>
	</thead>
	<tbody>
	@foreach ($applications as $application)
		<tr>
			<td>{{$application->id}}</td>
            <td>{{$application->name}}</td>
            <td>{{$application->email}}</td>
            <td>{{$application->phone_number}}</td>
			<td>{{$application->job->job_title}}</td>
			<td>{{$application->job->employer->company}}</td>
            <td>
                @if ($application->is_shortlisted == 0)
                    <i class="fa fa-spinner" style="color: red;">Not shortlisted </i>
                @elseif ($application->is_shortlisted == 1)
                    <i class="fa fa-check" style="color: black;"> Shortlisted </i>
                @endif
            </td>
			<td>{{$application->message}}</td>
            <td>{{$application->resume}}</td>
			<td>{{$application->created_at}}</td>
		</tr>
	@endforeach
	</tbody>
</table>
</html>