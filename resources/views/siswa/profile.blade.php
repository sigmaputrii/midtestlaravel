<!-- Menyisipkan file master -->
@extends('layouts.master')
<!-- Memasukan kode ke dalam konten -->
@section('content')
		<h1>Data Detail Siswa</h1>
			<div class="row">
				<ul class="list-group">
					<li class="list-group-item">Nama Lengkap	: {{$siswa->nama_depan}} {{$siswa->nama_belakang}}</li>
					<li class="list-group-item">Jenis Kelamin	: {{$siswa->jenis_kelamin}}</li>
					<li class="list-group-item">Agama			: {{$siswa->agama}}</li>
					<li class="list-group-item">Alamat			: {{$siswa->alamat}}</li>
					<li class="list-group-item">Mata Pelajaran	: {{$siswa->mapel->count()}}</li>
					<li class="list-group-item">Jenis Kelamin	: {{$siswa->jenis_kelamin}}</li>
					<li class="list-group-item">Agama			: {{$siswa->agama}}</li>
					<li class="list-group-item">Alamat			: {{$siswa->alamat}}</li>
				</ul>
				<td></td>
				<td></td>
				<td></td>
				<table class="table table-striped">
					<tr>
						<th>KODE</th>
						<th>NAMA</th>
						<th>SEMESTER</th>
						<th>GURU</th>
					</tr>
					@foreach($siswa->mapel as $mapel)
					<tr>
						<td>{{$mapel->kode}}</td>
						<td>{{$mapel->nama}}</td>
						<td>{{$mapel->semester}}</td>
						<td>{{$mapel->guru->nama}}</td>
					</tr>
					@endforeach
				</table>
			</div>

			<div class="text-left"><a href="/siswa/{{$siswa->id}}/edit">Edit Profile</a></div>
			
				

@endsection