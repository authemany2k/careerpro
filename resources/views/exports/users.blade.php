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
	<td colspan="13" style="background-color: #a0bdf2; text-align: center; font-size: 20; font-weight: bold;">USERS LIST</td>
	</tr>

	<thead>
	<tr>
		<th style="background-color: #01FF70; text-align: left;">S/N</th>
		<th style="background-color: #01FF70; text-align: left;">NAME</th>
		<th style="background-color: #01FF70; text-align: left;">EMAIL</th>
		<th style="background-color: #01FF70; text-align: left;">PHONE</th>
		<th style="background-color: #01FF70; text-align: left;">RESUME</th>
		<th style="background-color: #01FF70; text-align: left;">GENDER:</th>
        <th style="background-color: #01FF70; text-align: left;">COUNTRY:</th>
        <th style="background-color: #01FF70; text-align: left;">STATE:</th>
        <th style="background-color: #01FF70; text-align: left;">CITY</th>
		<th style="background-color: #01FF70; text-align: left;">USER-TYPE</th>
		<th style="background-color: #01FF70; text-align: left;">ADDRESS</th>
		<th style="background-color: #01FF70; text-align: left;">ADDRESS2</th>
        <th style="background-color: #01FF70; text-align: left;">Is-ACTIVE</th>
	</tr>
	</thead>
	<tbody>
	@foreach ($users as $user)
		<tr>
			<td>{{$user->upload_id}}</td>
			{{--<td>{{ Carbon\Carbon::parse($user->date)->format('d-m-Y H:i:s') }}</td>--}}
            {{--<td>--}}
				{{--@if ($user->filename!="")--}}

					{{--<div class="col-xs-12">--}}
						{{--<div class="col-xs-1">--}}
							{{--<a href="{{ url('/uploads/'.$user->filename.'/') }}"--}}
							   {{--download="{{$user->file_name}}"><h5 class="h5value"><i--}}
											{{--class="fa fa-download" style="color: orange;"></i></h5></a>--}}
						{{--</div>--}}

						{{--<div class="col-sm-4 padding-0">--}}
							{{--<a href="{{ url('/uploads/'.$user->filename.'/') }}" target="_blank">--}}
								{{--<h5> &nbsp;&nbsp;{{$user->filename}}</h5></a>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--@endif--}}
			{{--</td>--}}
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->filename}}</td>
            <td>{{$user->gender}}</td>
			<td>{{$user->country_name}}</td>
			<td>{{$user->state_name}}</td>
            <td>{{$user->city}}</td>
			<td>{{$user->user_type}}</td>
            <td>{{$user->address}}</td>
			<td>{{$user->address_2}}</td>
            <td>
                @if ($user->active_status == 0)
                    <i class="fa fa-spinner" style="color: red;">No </i>
                @elseif ($user->active_status == 1)
                    <i class="fa fa-check" style="color: black;"> Yes </i>
                @endif
            </td>
		</tr>
	@endforeach
	</tbody>
</table>
</html>