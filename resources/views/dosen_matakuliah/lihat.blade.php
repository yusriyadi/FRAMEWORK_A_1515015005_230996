@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('dosen_matakuliah') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data Dosen & Matakuliah</strong>
</div>
<table class="table">

	<tr>
		<td>Nama Dosen</td>
		<td>:</td>
		<td>{{ $dosen_matakuliah->dosen->nama }}</td>
	</tr>

	<tr>
		<td>NIM Dosen</td>
		<td>:</td>
		<td>{{ $dosen_matakuliah->dosen->nip }}</td>
	</tr>
	
	<tr>
		<td>Nama Matakuliah</td>
		<td>:</td>
		<td>{{ $dosen_matakuliah->matakuliah->title }}</td>
	</tr>

	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dosen_matakuliah-> created_at}}</td>	
	</tr>

	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dosen_matakuliah->update_at}}</td>	
	</tr>

</table>
</div>
@stop