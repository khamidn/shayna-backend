@extends('layouts.default')

@section('content')
	<div class="card">
		<div class="card-header">
			<strong>Ubah Transaksi </strong>
			<small>{{ $item->uuid }}</small>
		</div>
		<div class="card-body card-block">
			<form
				action="{{ route('transactions.update', $item->id) }}"
				method="POST">

				@csrf
				@method('PUT')


				<div class="form-group">
					<label for="name" class="form-control-label">Nama Pemesan</label>
					<input 
						type="text" 
						name="name"
						value="{{ old('name') ? old('name') : $item->name}}"
						class="form-control @error('name') is-invalid @enderror">

					@error('name')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="email" class="form-control-label">Email</label>
					<input 
						type="email" 
						name="email"
						value="{{ old('email') ? old('email') : $item->email }}"
						class="form-control @error('email') is-invalid @enderror">

					@error('email')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="number" class="form-control-label">Nomer HP</label>
					<input 
						type="text" 
						name="number"
						value="{{ old('number') ? old('number') : $item->number }}"
						class="form-control @error('price') is-invalid @enderror">

					@error('number')
						<div class="invalid-feedback">
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="address" class="form-control-label">Alamat Pemesan</label>
					<input 
						type="text" 
						name="address"
						value="{{ old('address') ? old('address') : $item->address }}"
						class="form-control @error('address') is-invalid @enderror">

					@error('address')
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