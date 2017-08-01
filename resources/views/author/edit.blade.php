@extends ('layouts.master')
@section('isi')
<div class="row">
        <center><h1>Data Orang Tua</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Data Orangtua
          <div class="panel-title pull-right">
          <a href="{{URL::previous()}}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{route('layouts.update',$layouts->id)}} " method="post">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
          <label class="control-lable">Nama </label>
          <input type="text" name="a" class="form-control" value="{{$layouts->nama}}" required="">
   </div>
   
  <div class="form-group">
    <button type="submit" class="btn btn-success">
      Simpan</button>
      <button type="reset" class="btn btn-danger">reset</button>
  </div>
    </form>
    </div>
  </div>
</div>
  
  @endsection
