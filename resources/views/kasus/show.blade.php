@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Show Data Kasus</b></div>
               <div class="card-body">
                  <form>
                  <div class="form-group">
                        <label for="" class="form-label">Nama RW</label>
                        <input type="text" name="id_rw" class="form-control" value="{{$kasus->rw->nama}}" readonly>
                  </div>
                       
                  <div class="form-group">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" name="positif" class="form-control" value="{{$kasus->positif}}" readonly>
                  </div>
                       
                  <div class="form-group">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" name="sembuh" class="form-control" value="{{$kasus->sembuh}}" readonly>
                  </div>
                  <div class="form-group">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" name="meninggal" class="form-control" value="{{$kasus->meninggal}}" readonly>
                  </div>
                  <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control" value="{{$kasus->tanggal}}" readonly>
                  </div>
                       
                     <div class="form-group">
                        <a href="{{ route('kasus.index') }}" type="submit" class="btn btn-primary">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
