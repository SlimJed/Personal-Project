@extends('layouts.cardslayout')

@section('content')
<div class="row">
	<ul class="pager">
		<li class="previous">
			<a href="/projects">&larr; Back</a>
		</li>
	</ul>	
</div>
<div class="row">
	<h3 style="text-align:center">
		Create your cards
	</h3>
</div>
<div class="row col-md-8 col-md-offset-2">
	<div class="panel panel-default panel-info">
		<div class="panel-heading">
			<h4>All cards </h4>
			<h5>Click to open a card</h5> 
		</div>
		<div class="panel-body">
			@foreach ($cards as $card)
				<div>
					<h4><a href="/cards/{{ $card->id }}"> - {{ $card->title }}</a></h4>
				</div>
			@endforeach
			<hr>
			<form method="post" action="/cards">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="form-group">
					<textarea class="form-control" name="title">
					
					</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Create card
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
</div>
@stop





	