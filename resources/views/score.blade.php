@extends('app')

@section('content')
	<table>
		<tr><th>Naam</th><th>Partij</th><th>Stemmen</th></tr>
	@foreach($members as $member)
		<tr>
			<td>{{$member['name']}}</td>
			<td>{{$member['group']}}</td>
			<td>
				@if(isset($member['votes']))
				{{$member['votes']}}
				@else
				-
				@endif
			</td>
		</tr>
	@endforeach
	</table>
	<div class="cutbar">
	@foreach($groupvotes as $group)
		<div class="group" style="background-color: {{$group['color']}}; width: {{$group['cut']}}%;">{{round($group['cut'])}}%</div>
	@endforeach
	</div>
	<br>
	@foreach($groupvotes as $key => $group)
		<div class="groupcolor" style="background-color: {{$group['color']}};">{{$key}}</div>
	@endforeach
@endsection