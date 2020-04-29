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
									
									<form action="/goal/{{$goal->id}}/update" method="POST">
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
								  <br>  
								  <button type="submit" class="btn btn-warning">Update</button>
								</form>
									
								</div>
							
						</div>
						</div>
					
				</div>
				
			</div>
			
		</div>
@stop


						        
						 

	
