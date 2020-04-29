@extends('layouts.master')

@section('content')
	<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">

								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									
									<form action="/tester/{{$tester->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">No</label>
								    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id">

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama</label>
								    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputEmail1">perusahaan</label>
								    <input name="perusahaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="perusahaan">
								  </div> 

								    <div class="form-group">
								    <label for="exampleInputEmail1">Avatar</label>
								    <input type="file" name="avatar" class="form-control">
								  </div> 

								  </div>

								 
								  <br>  
								  <button type="submit" class="btn btn-warning">Update</button>
								</form>
									
								</div>
							
						</div>
						</div>
					
		
				
			</div>
			
		</div>
@stop


						        
						 

	
