@extends('layouts.default')

@section('content')
	<div class="orders">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Daftar Foto Barang</h4>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Barang</th>
										<th>Foto</th>
										<th>Default</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@forelse($items as $item)
										<tr>
											<td>{{ $item->id }}</td>
											<td>{{ $item->product->name }}</td>
											<td>
												<img src="{{ url($item->photo) }}">
											</td>
											<td>{{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
											<td>
												<form 
													class="d-inline" 
													action="{{ route('product-galleries.destroy', $item->id)}}" 
													method="POST">

													@csrf
													@method('delete')

													<button class="btn btn-danger btn-sm">
														HAPUS
													</button>
												</form>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="6" class="text-center">
												Foto barang belum tersedia
											</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection