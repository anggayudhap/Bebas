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
          <form action="{{route('layouts.store')}}" method="post">
             {{csrf_field()}}
    <div class="form-group">
          <label class="control-lable">Nama </label>
          <input type="text" name="a" class="form-control" required="">
	<div class="form-group">
		<button type="submit" class="btn btn-success">
			Simpan</button>
			<button type="reset" class="btn btn-danger">reset</button>
      <button type="Simpan" class="btn btn-danger">simpan</button>
	</div>
		</form>
		</div>
	</div>
</div>
	
	@endsection
