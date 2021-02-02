@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header"><b>Data Kasus</b>
               <a href="{{ route('kasus.create') }}" class="btn btn-dark float-right">
                  Add Data
               </a>
            </div>
            <div class="card-body">
               <table class="table table-bordered">
                  <thead>
                  <th><center>no</center></th>
                     <th><center>Lokasi</center></th>
                     <th><center>Nama RW</center></th>
                     <th><center>Positif</center></th>
                     <th><center>Sembuh</center></th>
                     <th><center>Meninggal</center></th>
                     <th><center>Tanggal</center></th>
                     <th colspan="3"><center>Action</center></th>
                  </thead>
                  <tbody>
                  @php $no = 1; @endphp
                     @foreach ($kasus as $data)
                        <tr>
                           <td align="center">{{ $no++ }}</td>
                           <td align="left">
                           Provinsi: {{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }}<br>
                           Kota: {{ $data->rw->kelurahan->kecamatan->kota->nama_kota }}<br>
                           Kecamatan: {{ $data->rw->kelurahan->kecamatan->nama_kecamatan }}<br>
                           Kelurahan: {{$data->rw->kelurahan->nama_kelurahan }}<br>
                           </td>
                           <td>{{ $data->rw->nama }} </td>
                           <td>{{ $data->positif}} </td>
                           <td>{{ $data->sembuh}} </td>
                           <td>{{ $data->meninggal}} </td>
                           <td>{{ $data->tanggal}} </td>
                           
                              <form action="{{route('kasus.destroy', $data->id)}}" method="post">
                              @csrf
                              @method("DELETE")
                              <td>
                              <a class="btn btn-success" href="{{ route('kasus.show', $data->id) }}">Show</a>
                              </td>
                              <td>
                              <a class="btn btn-warning" href="{{ route('kasus.edit', $data->id) }}">Edit</a>
                              </td>
                              <td>
                              <button class="btn btn-danger" type="submit">Delete</button>
                              </td>
                              </form>
                           
                           
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
