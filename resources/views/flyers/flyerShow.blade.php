@extends ('layouts.flyersLayout')

@section ('content')
	<div class="row">
		<div class="col-md-3">
			<h1>{!! $flyer->street !!}</h1>
	
			<h2>{!!$flyer->price !!}</h2>

			<hr>

			<div class="description">
				{!! nl2br($flyer->description) !!}
			</div>

			<hr>
		</div>

		<div class="col-md-9">
			@foreach ($flyer->photos as $photo)
				<img src="/{{ $photo->path }}" alt="">
			@endforeach
		</div>
	</div>

	<hr
	<h1>Add your photos</h1>
	<form id="addPhotosForm" method="post" action="/{{$flyer->zip}}/{{$flyer->street}}/photos" class="dropzone">
	{{ csrf_field() }}
		
	</form>
	<script type="text/javascript">
		Dropzone.options.addPhotosForm = {
			paramName: 'photo',
			maxFilesize: 3,
			acceptedFiles: '.jpeg, .jpg, .png, .bmp'

		};
	</script>

@stop
