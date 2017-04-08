@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Dosen</strong>
		<a href="{{url('dosen/tambah')}}" class="btn  btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Dosen</a> 
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>NIP</th>
					<th>Aksi</th>	
				</tr>
			</thead>
			<tbody>
				<?php $x=1;?>
				@foreach ($semuaDosen as $Dosen)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $Dosen->nama or 'nama kosong' }}</td>
					<td>{{ $Dosen->nip or 'nip kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{ url('dosen/edit/'.$Dosen->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-palcement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{ url('dosen/'.$Dosen->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{ url('dosen/hapus/'.$Dosen->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div> 
@stop