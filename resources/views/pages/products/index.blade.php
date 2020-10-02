@extends('layouts.default')

@section('content')
	<div class="orders">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Daftar Barang</h4>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Type</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@forelse($products as $product)
										<tr>
											<td>{{ $product->id }}</td>
											<td>{{ $product->name }}</td>
											<td>{{ $product->type }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->quantity }}</td>
											<td>
												<a href="" class="btn btn-info btn-sm">
													{{-- <i class="fa fa-picture-o"></i> --}}
													IMAGE
												</a>
												<a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary btn-sm">
													{{-- <i class="fa fa-pencil"></i> --}}
													EDIT
												</a>
												<form 
													class="d-inline" 
													action="{{ route('products.destroy', $product->id)}}" 
													method="POST">

													@csrf
													@method('delete')

													<button class="btn btn-danger btn-sm">
														{{-- <i class="fa fa-trash"></i> --}}
														HAPUS
													</button>
												</form>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="6" class="text-center">
												Produk belum tersedia
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