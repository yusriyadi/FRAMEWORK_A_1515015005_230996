@extends('master')
@section('container')

<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{url('jadwal_matkul') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Jadwal Mahasiswa</strong>
</div>
{!! Form:: open(['url'=>'jadwal_matkul/simpan','class'=>'form-horizontal'])!!}
@include('jadwal_matkul.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
	<button type="reset" class ="btn btn-danger"><i class="fa fa-undo">Ulangi</i></button>
</div>
{!! Form::close() !!}
</div>
@stop