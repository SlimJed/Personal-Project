<form enctype="multipart/form-data" method="post" action="/flyers">
	<div class="row">
			{{ csrf_field() }}
		<div class="col-md-6">
			<div class="form-group">
				<label for="street">
					Street:
				</label>
				<input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}" required="">
			</div>
			<div class="form-group">
				<label for="city">
					City:
				</label>
				<input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required="">
			</div>
			<div class="form-group">
				<label for="zip">
					Zip/Postal Code:
				</label>
				<input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}" required="">
			</div>
			<div class="form-group">
				<label for="country">
					Country:
				</label>
				<select id="country" name="country" class="form-control" required="">
					@foreach (App\Http\Utilities\Country::all() as $code => $name)
						<option value ="{{ $code}}">
							{{ $name }}
						</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="state">
					State:
				</label>
				<input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="price">
					Price:
				</label>
				<input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" required="">
			</div>
			<div class="form-group">
				<label for="description">
					Car Description:
				</label>
				<textarea name="description" id="description" rows="10" class="form-control" required="">
					
				</textarea>
		</div>
	</div>	
</form>

<div>
	<div class="col-md-12">

	<hr>

		<div class="form-group">
			<a href="">
				<button class="btn btn-primary" type="submit">
					Create Flyer
				</button>
			</a>
		</div>
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
</div>