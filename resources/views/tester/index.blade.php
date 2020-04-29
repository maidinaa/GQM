@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								
								<h3 class="panel-little"Tester </h3>	
									<div class="right">
										
									
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
										
									</div>
							</div>
						<div class="panel-body">
							<table class="table table-hover">

									<thead>
											<tr>
												<th>NO</th>
												<th>Nama</th>
												<th>perusahaan</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_tester as $tester)


											<tr>
												<td>{{$tester->id}}</td>
												<td><a href="/tester/{{$tester->id}}/profile">{{$tester->nama}}</a></td>
												<td>{{$tester->perusahaan}}</td>
											<td>
													<a href="/tester/{{$tester->id}}/edit" class="button btn-warning btn-sm">Edit</a>
													<a href="/tester/{{$tester->id}}/delete" class="button btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Delete</a>
												</td>
												
											</tr>
											@endforeach
										</tbody>
								</table>	
							
						</div>	
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form action="/tester/create" method="POST">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">No</label>
								    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama</label>
								    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputEmail1">perusahaan</label>
								    <input name="perusahaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="perusahaan">
								  </div>
								  
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
						        </form>
						  
						    </div>
						  </div>
			@stop

			

	
	

