@extends('layouts.cardslayout')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
		<div>
			<ul class="pager">
				<li class="previous">
					<a href="/cards">&larr; Back</a>
				</li>
			</ul>
		</div>
			<h1 style="text-align:center">Edit the note</h1>
			<form method="post" action="/notes/{{$note->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				{{ Method_field('PATCH')}}
				<div class="form-group">
					<textarea class="form-control" name="body">
						{{ $note->body}}
					</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">
						Update note
					</button>
				</div>
			</form>

			<form method="post" action="/notes/{{$note->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				{{ Method_field('DELETE')}}
				<div class="form-group">
					<button class="btn btn-danger" name="body">
						Delete Note
					</button>
				</div>
			</form>
		</div>
	</div>
@stop