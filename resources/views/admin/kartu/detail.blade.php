@extends('admin.layout.appadmin')
@section('content')

@foreach ($kartu as $k)
<h1>{{$k->kode}}</h1>
@endforeach

@endsection