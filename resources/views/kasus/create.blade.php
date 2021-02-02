@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Tambah Data Kasus</b></div>
               <div class="card-body">
                  <form action="{{ route('kasus.store') }}" method="POST">
                  @csrf
                  @livewireStyles

                        @livewire('select')
                  
                  @livewireScripts
                 
                     <div class="form-group">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" class ="form-control" name="positif"">
                        @error('positif')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" class ="form-control" name="sembuh">
                        @error('sembuh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" class ="form-control" name="meninggal">
                        @error('meninggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class ="form-control" name="tanggal">
                        @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                       
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
