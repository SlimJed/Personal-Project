@extends ('layouts.flyersLayout')

<style type="text/css">
	#jumbo {
		padding-top: 70px;
	}
</style>

@section ('content')
	<div class="row">
		<div class="jumbotron" id="jumbo">
			<h1>example</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
			<a href="/flyers/create">
				<button class="btn btn-primary">
				Create a flyer
				</button>
			</a>
		</div>
	</div>
@stop

@section('footer')

@stop