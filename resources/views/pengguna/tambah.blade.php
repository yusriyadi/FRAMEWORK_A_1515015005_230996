@extends('master')
@section('container')

<div class="panel panel-primary">
	<div class="panel-heading">
			<strong><a href="{{url('pengguna')}}">
				<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Pengguna
				</strong>
	</div>
	{!! Form::open(['url'=>'pengguna/simpan','class'=>'form-horizontal'])!!}
		@include('pengguna.form')
		<div style="width:100%;text-align:right;">


</div>