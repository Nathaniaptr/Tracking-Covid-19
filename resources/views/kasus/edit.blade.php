@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Edit Data Kasus</b></div>
               <div class="card-body">
                  <form action="{{ route('kasus.update', $kasus->id) }}" method="POST">
                  @csrf
                     @livewireStyles
                        
                     @livewireScripts
                  @method('PUT')
                     <div>
                     @livewire('select', ['selectedState5' => $kasus->id_rw])
                     <div class="form-group">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" class ="form-control" name="positif" value="{{$kasus->positif}}">
                    </div>
                    @error('positif')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror

                    <div class="form-group">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" class ="form-control" name="sembuh" value="{{$kasus->sembuh}}">
                    </div>
                    @error('sembuh')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror

                    <div class="form-group">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" class ="form-control" name="meninggal" value="{{$kasus->meninggal}}">
                    </div>
                    @error('meninggal')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror

                    <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class ="form-control" name="tanggal" value="{{$kasus->tanggal}}">
                    </div>
                    @error('tanggal')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                       
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
