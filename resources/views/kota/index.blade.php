@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-header"><b>Data Kota</b>
               <a href="{{ route('kota.create') }}" class="btn btn-dark float-right">
                  Add Data
               </a>
            </div>
            <div class="card-body">
               <table class="table table-bordered">
                  <thead>
                     <th>No</th>
                     <th><center>Kode Kota</center></th>
                     <th><center>Nama Kota</center></th>
                     <th><center>Nama Provinsi</center></th>
                     <th><center>Action</center></th>
                  </thead>
                  <tbody>
                  @php $no = 1; @endphp
                     @foreach ($kota as $data)
                        <tr>
                           <td align="center">{{ $no++ }}</td>
                           <td>{{ $data->kode_kota }} </td>
                           <td>{{ $data->nama_kota }} </td>
                           <td>{{ $data->provinsi->nama_provinsi }} </td>
                           <td align="center">
                              <form action="{{route('kota.destroy', $data->id)}}" method="post">
                              @csrf
                              @method("DELETE")
                              <a class="btn btn-success" href="{{ route('kota.show', $data->id) }}">Show</a>
                              <a class="btn btn-warning" href="{{ route('kota.edit', $data->id) }}">Edit</a>
                              <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
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
@endsection
