@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role != 'yulia')


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <td>Action</td>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <td>Action</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($kartu as $k)
                                        
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$k->kode}}</td>
                                            <td>{{$k->nama}}</td>
                                            <td>{{$k->diskon}}</td>
                                            <td>{{$k->iuran}}</td>
                                            <td>
                                                <a href="{{url('admin/kartu/show/'.$k->id)}}">Detail</a>

                                                                                                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$k->id}}">
<i class="fas fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghaspus data {{$k->nama}} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{url('admin/kartu/delete/'.$k->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
                                            </td>
                                            
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
@else
@include('admin.pagenot')
@endif
@endsection