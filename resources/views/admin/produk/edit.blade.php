@extends('admin.layout.appadmin')
@section('content')



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

@foreach ($produk as $pr)
<form method="POST" action="{{url('admin/produk/update/'.$pr->id)}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text" name="kode" type="text" class="form-control " value="{{$pr->kode}}">
      @error('kode')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>

  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control" value="{{$pr->nama}}">
      @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Harga beli</label> 
    <div class="col-8">
      <input id="text2" name="harga_beli" type="text" class="form-control " value="{{$pr->harga_beli}}">
      @error('harga_beli')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Harga jual</label> 
    <div class="col-8">
      <input id="text3" name="harga_jual" type="text" class="form-control" value="{{$pr->harga_jual}}">
      @error('harga_jual')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">stok</label> 
    <div class="col-8">
      <input id="text4" name="stok" type="text" class="form-control" value="{{$pr->stok}}">
      @error('stok')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Minimal stok</label> 
    <div class="col-8">
      <input id="text4" name="min_stok" type="text" class="form-control" value="{{$pr->min_stok}}">
      @error('min_stok')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text4" name="foto" type="file" class="form-control" >
      @error('foto')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      @if(!empty($pr->foto))
      <img src="{{url('admin/img/'.$pr->foto)}}" alt="">
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control">{{$pr->deskripsi}}</textarea>
    </div>
</div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="select" name="jenis_produk_id" class="custom-select">
      @error('jenis_produk_id')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
        @foreach ($jenis_produk as $p)
        @php $sel = ($p->id == $pr->jenis_produk_id) ? 'selected' : ''; @endphp
        <option value="{{$p->id}}" {{$sel}}>{{$p->nama}}</option>
       @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endforeach
@endsection