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
		  Tambah Data Asrama
		</button>
		<!-- <button onclick="window.location.href='/page2'">Continue</button> -->
	</div>
		
		
			<table class="table table-hover">
				<tr>
					<th>Nama Asrama</th>
					<th>Pembina Asrama</th>
					<th>Jumlah Kamar</th>
					<th>Lokasi</th>
					<th>Aksi</th>
				</tr>
				@foreach($data_asrama as $asramas)
				<tr>
					<td>{{$asramas->nama_asrama}}</td>
					<td>{{$asramas->pembina_asrama}}</td>
					<td>{{$asramas->jumlah_kamar}}</td>
					<td>{{$asramas->lokasi}}</td>
					<td><a href="/asramas/{{$asramas->id}}/edit" class="btn btn-warning btn-sm">Edit</td>
					<td><a href="/asramas/{{$asramas->id}}/delete" class="btn btn-danger btn-sm">Delete</td>
				</tr>
				@endforeach

	

</div>
</table>

<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Asrama</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<form action="/asramas/create" method="POST">
				{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Asrama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Asrama" name="nama_asrama">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Pembina Asrama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pembina" name="pembina_asrama">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Kamar</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Kamar" name="jumlah_kamar">
						  </div>
						  <div class="form-group">
    						<label for="exampleFormControlTextarea1">Alamat</label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lokasi"></textarea>
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

