@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								
								<h3 class="panel-little"Goal </h3>	
									<div class="right">
										
									
								
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
										
									</div>
							</div>
						<div class="panel-body">
							<table class="table table-hover">

									<thead>
											<tr>
												<th>NO</th>
												<th>KODE</th>
												<th>DESKRIPSI PERTANYAAN</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_qst as $goal)
											<tr>
												<td>{{$goal->id}}</td>
												<td>{{$goal->kode_qst}}</td>
												<td>{{$goal->deskripsi_qst}}</td>
												<td>
													<a href="/goal/{{$goal->id}}/edit" class="button btn-warning btn-sm">Edit</a>
													<a href="/goal/{{$goal->id}}/delete" class="button btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Delete</a>
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
						        <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form action="/question/create" method="POST">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Pertanyaan</label>
								    <input name="kode_qst" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kode pertanyaan">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputEmail1">Pertanyaan</label>
								    <input name="deskripsi_qst" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="deskripsi pertanyaan">
								  </div>

								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Goals</label>
								    <select name="deskripsi_goal" class="form-control" id="exampleFormControlSelect1">
									  <option>Peningkatan kesesuaian fungsionalitas sistem</option>
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

			

	
	

