@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								
								<h3 class="panel-little">Pemilihan Goal </h3>	
									
							</div>
						<div class="panel-body">
							<table class="table table-hover">

									<thead>
											<tr>
												<th>NO</th>
												<th></th>
                                                <th>KODE GOAL</th>
												<th>DESKRIPSI GOAL</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_goal as $goal)
											<tr>
												<td>{{$goal->id}}</td>
												<td><div class="form-check">
    											<input type="checkbox" class="form-check-input" id="exampleCheck1">
    											</div></td>
                                                <td>{{$goal->kode_goal}}</td>
												<td>{{$goal->deskripsi_goal}}</td>
											</tr>
											@endforeach
										</tbody>
								</table>	
								<div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
						        </form>
						      </div>
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
						        <form action="/goal/create" method="POST">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">No</label>
								    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id">
								  </div>

								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Goals</label>
								    <select name="deskripsi_goal" class="form-control" id="exampleFormControlSelect1">
								      <option>Manajemen puncak dapat menetapkan dan mengkomunikasikan tanggungjawab dan wewenang dalam organisasi</option>
								      <option>Manajemen puncak dapat menetapkan : Saluran/media komunikasi yang sesuai  untuk menjamin efektifitas sistem manajemen mutu</option>
								      <option>Manajemen puncak melakukan Tinjauan terhadap Sistem manajemen mutu pada interval waktu yang direncanakan, guna memastikan kesesuaian,kecukupan, dan efektivitasnya</option>
								      <option>Organisasi dapat menyediakan sumber daya yang dibutuhkan koreksi dan pencegahan.(Sumber Daya berupa: karyawan, lingkungan kerja, infomrasi, pemasok dan rekanan, sumber daya alam, sumber daya keuangan)</option>
								      <option>Personal yang melaksanakan pekerjaan yang berpengaruh thd mutu produk harus kompeten, berdasarkan Pendidikan, Pelatihan, Keahlian, dan Pengalaman</option>
								      <option>Organisasi dapat menentukan, menyediakan dan memelihara prasarana yang dibutuhkan untuk mencapai kesesuaian thd persyaratan produk </option>
								      <option>Organisasi dapat  menentukan & mengelola lingkungan kerja yang dibutuhkan untuk mencapai kesesuaian terhadap persyaratan produk</option>
								      <option>Organisasi dapat merencanakan dan mengembangkan proses yang dibutuhkan untuk realisasi produk</option>
								      <option>Organisasi dapat merencanakan dan mengendalikan desain dan pengembangan produk</option>
								      <option>Organisasi dapat Menetapkan pemantauan & pengukuran yang menggunakan peralatan pengukur</option>
								      <option>Organisasi dapat memantau informasi mengenai persepsi kepuasan pengguna</option>
								      <option>Organisasi dapat meningkatkan efektifitas sistem manajemen mutu secara terus menerus</option>
								      <option>Organisasi dapat  melakukan tindakan untuk menghilangkan penyebab ketidaksesuaian,mencegah pengulangan sesuai dengan efek masalah</option>
								      
								    </select>
								  
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
						        </form>
						      </div>
						    </div>
						  </div>
			@stop

			

	
	

