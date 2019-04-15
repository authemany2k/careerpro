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
	<td colspan="14" style="background-color: #a0bdf2; text-align: center; font-size: 20; font-weight: bold;">JOBS LIST</td>
	</tr>

	<thead>
	<tr>
        <th style="background-color: #01FF70; text-align: left;">S/N</th>
		<th style="background-color: #01FF70; text-align: left;">TITLE</th>
		<th style="background-color: #01FF70; text-align: left;">POSITION</th>
		<th style="background-color: #01FF70; text-align: left;">SALARY</th>
        <th style="background-color: #01FF70; text-align: left;">VACANCY</th>
        <th style="background-color: #01FF70; text-align: left;">JOB-TYPE</th>
        <th style="background-color: #01FF70; text-align: left;">EXP-LEVEL</th>
		{{--<th style="background-color: #01FF70; text-align: left;">DESCRIPTION:</th>--}}
        <th style="background-color: #01FF70; text-align: left;">SKILLS</th>
        <th style="background-color: #01FF70; text-align: left;">EDUCATION-REQUIREMENT</th>
        <th style="background-color: #01FF70; text-align: left;">EXPERIENCE</th>
        <th style="background-color: #01FF70; text-align: left;">BENEFITS</th>
        <th style="background-color: #01FF70; text-align: left;">SATUS</th>
        <th style="background-color: #01FF70; text-align: left;">DATE CREATED</th>
        <th style="background-color: #01FF70; text-align: left;">DEADLINE</th>
	</tr>
	</thead>
	<tbody>
	@foreach ($jobs as $job)
		<tr>
			<td>{{$job->id}}</td>
			<td>{{$job->job_title}}</td>
			<td>{{$job->position}}</td>
			<td>{{$job->salary}}</td>
            <td>{{$job->vacancy}}</td>
            <td>{{$job->job_type}}</td>
            <td>{{$job->exp_level}}</td>
			{{--<td>{{$job->description}}</td>--}}
			<td>{{$job->skills}}</td>
            <td>{{$job->educational_requirements}}</td>
            <td>{{$job->experience_requirements}}</td>
            <td>{{$job->benefits}}</td>
            <td>
                @if ($job->status == 0)
                    <i class="fa fa-spinner" style="color: red;">Not published </i>
                @elseif ($job->status == 1)
                    <i class="fa fa-check" style="color: black;"> Published </i>
                @endif
            </td>
            <td>{{$job->created_at}}</td>
            <td>{{$job->deadline}}</td>

		</tr>
	@endforeach
	</tbody>
</table>
</html>