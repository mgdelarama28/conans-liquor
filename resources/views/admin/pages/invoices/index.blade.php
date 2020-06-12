@extends('admin.layouts.master')

@section('pageTitle', 'Invoices')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Invoices</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Invoices</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Index</a></li>
	                    </ol>
	                </div><!-- /.col -->
	            </div><!-- /.row -->
	        </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <div class="content">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="card card-primary card-outline">
	                        <div class="card-body">
	                            <p class="card-text">
	                                Invoices
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
                                        @if(session('status'))
											<div class="alert alert-success text-center">{{ session('status') }}</div>
                                        @endif
                                        
	                            		<table id="invoices" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>Reference No.</th>
						            				<th>Name</th>
                                                    <th>Address</th>
                                                    <th>Payment Method</th>
                                                    <th>Status</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($invoices as $invoice)
													<tr>
														<td>{{ $invoice->reference_number }}</td>
														<td>{{ $invoice->renderFullName() }}</td>
														<td>{{ $invoice->renderFullAddress() }}</td>
														<td>{{ $invoice->payment_method }}</td>
														<td>{{ $invoice->status == 0 ? 'Unpaid' : 'Paid' }}</td>
														<td>
															<a href="{{ route('admin.invoices.show', $invoice->id) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
														</td>
													</tr>
						            			@endforeach
						            		</tbody>
						            	</table>
	                            	</div>
	                            	<!-- /.col-md-12 -->
					            </div>
					            <!-- /.row -->
	                        </div>
	                    </div>
	                    <!-- /.card -->
	                </div>
	                <!-- /.col-md-12 -->
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.container-fluid -->
	    </div>
	    <!-- /.content -->
	</div>
@endsection

@section('scripts')
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#invoices').dataTable(
				{
					'order': [[0, 'desc']]	
				}
			);
		});
	</script>
@endsection