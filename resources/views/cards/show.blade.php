@extends('layouts.cardslayout')

@section('content')
	<div class="row">
		<div>
			<ul class="pager">
				<li class="previous">
					<a href="/cards">&larr; Back</a>
				</li>
			</ul>
		</div>
		<div class="col-md-6 col-md-offset-3">
		<h1>{{ $card->title }}</h1>
		
		<ul class="list-group">
		@foreach ($card->notes as $note)
			<li class="list-group-item">
				{{ $note->body}}
				<a href= "{{ url('notes/'. $note->id. '/edit') }}" class="pull-right">  Edit note</a>
				<a href= "{{ url('/notes/'.$note->id. '/edit')}}" class="pull-right">Delete  &emsp;</a>
				<a href="#" class="pull-left">
					 {{ $note->user->username }} :&emsp;
				</a>

			</li>
		@endforeach
		</ul>
		<hr>
		<h3>Add new Note</h3>
		<h6 style="color:#29A9FE">You must be logged in to add or edit a note</h6>

		<form method="POST" action="/cards/{{$card->id}}/notes">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			<div class="form-group">
				<textarea name="body" class="form-control">
				 {{ old('body')}}
				</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">
					Add note	
				</button>
			</div>
		</form>
		<div>
			@if (count($errors))
				<ul>
					@foreach ($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			@endif
		</div>
		</div>
	</div>

@stop