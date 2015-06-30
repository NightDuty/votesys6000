@extends('app')

@section('content')
	<form method="POST" class="voteform">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	@if(isset($options))
		<label>Kies een partij</label>
		<select name="voteoption">
			@foreach($options as $option)

				<optgroup label="{{$option['name']}}">
					@foreach($option->votemembers as $opt)
						<option value="{{$opt::gethash($opt['id'])}}">{{$opt['name']}}</option>
					@endforeach
				</optgroup>
			@endforeach
		</select>
		<input type="submit" value="Vote">
		</form>
	@endif
@endsection
