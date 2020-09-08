@extends('layout.master')
@section('content')


<h1>Edit data Asrama</h1>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
	@endif
	<div class="row">
	<div class="col-lg-12">
				<form action="/asramas/{{$asramas->id}}/update" method="POST">
				{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Asrama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Asrama" name="nama_asrama" value="{{$asramas->nama_asrama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Pembina Asrama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pembina" name="pembina_asrama" value="{{$asramas->pembina_asrama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Kamar</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Kamar" name="jumlah_kamar" value="{{$asramas->jumlah_kamar}}">
						  </div>
						  <div class="form-group">
    						<label for="exampleFormControlTextarea1">Alamat</label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lokasi">{{$asramas->lokasi}}</textarea>
  						  </div>
  						  <button type="submit" class="btn btn-warning">Update</button>
		       	</form>
		       	</div>	  
		      </div>
</table>

@endsection 



