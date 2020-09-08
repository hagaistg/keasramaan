@extends('layout.master')
@section('content')

	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
	@endif
	<div class="row">
	<div class="col-6">
		<h3>Selamat Datang</h3></div>
	
	<br>
	<div class="col-6">	
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
		  Tambah Data Mahasiswa
		</button>
	</div>

			<table class="table table-hover">
				<tr>
					<th>Nama Mahasiswa</th>
					<th>Prodi</th>
					<th>Angkatan</th>
					<th>Nama Asrama</th>
					<th>Aksi</th>
				</tr>
				@foreach($data_mahasiswa as $mahasiswas)
				<tr>
					<td>{{$mahasiswas->nama_mahasiswa}}</td>
					<td>{{$mahasiswas->prodi_mahasiswa}}</td>
					<td>{{$mahasiswas->angkatan}}</td>
					<td>{{$mahasiswas->id_asrama}}</td>
				</tr>
				@endforeach

</div>
</table>

<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<form action="/mahasiswas/create" method="POST">
				{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Mahasiswa</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" name="nama_mahasiswa">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Prodi</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prodi" name="prodi_mahasiswa">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Angkatan</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angkatan" name="angkatan">
						  </div>
						  <div class="form-group">
    						<label for="exampleFormControlTextarea1">Id Asrama</label>
    						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Asrama" name="id_asrama">
  						  </div>
						  
						  
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
		       	</form>	
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	@endsection

