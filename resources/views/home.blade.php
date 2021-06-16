
@extends('layouts.app')
@push('style')
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                  <table class="table table-stripped">
                  	<thead>
                  		<tr>
                  			<th>No</th>
                  			<th>Name</th>
                  			<th>Detail</th>
                  		</tr>
                  	</thead>
                  	<tbody>
                  		@forelse($products as $product)
                  		<tr>
                  			<!-- <td>{{ $loop->index + 1 }}</td> -->
                            <td>{{ $product->id }}</td>
                  			<td>{{ $product->name }}</td>
                  			<td>{{ $product->detail }}</td>
                  		</tr>
                  		@empty
                  		<p>No product found!</p>
                  		@endforelse
                  	</tbody>
                  </table>
               {{ $products->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</div>
@endsection
 