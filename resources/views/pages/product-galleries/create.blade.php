@extends('layouts.default')

@section('content')
	<div class="card">
		<div class="card-header">
			<strong>Tambah Foto Barang </strong>
		</div>
		<div class="card-body card-block">
			<form
				action="{{ route('product-galleries.store') }}"
				method="POST"
				enctype="multipart/form-data">

				@csrf


				<div class="form-group">
					<label for="product_id" class="form-control-label">Nama Barang</label>
					<select 
						name="product_id"
						value="{{ old('product_id') }}"
						class="form-control @error('product_id') is-invalid @enderror">
						@foreach($products as $product)
							<option value="{{ $product->id }}">{{ $product->name }}</option>
						@endforeach
					</select>

					@error('product_id')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="photo " class="form-control-label">Foto Barang</label>
					<input 
						type="file" 
						name="photo"
						accept="image/*" 
						value="{{ old('photo') }}"
						class="form-control @error('photo') is-invalid @enderror">

					@error('photo')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="is_default" class="form-control-label">Jadikan Default?</label>
					<select 
						name="is_default"
						class="form-control @error('is_default') is-invalid @enderror">
						
						<option value="0">Tidak</option>
						<option value="1">Ya</option>
					</select>

					@error('is_default')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block" type="submit">Simpan</button>
				</div>
				
			</form>
		</div>
	</div>
@endsection