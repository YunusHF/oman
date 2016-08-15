@extends('layouts.tampilan')

@if (Auth::user()->aktivasi = 'aktif')
@section('konten')

<div class="presentation-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="tampil-hasil">
	            			<div class="container">
					            <div class="row">
					            	<h2>Selamat Datang di<br>Office Management Application PT. Nufaza</h2>
					            	<hr>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="datadiri"><i class="fa fa-user"></i><br>Profil</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="presensi"><i class="fa fa-check-square"></i><br>Presensi</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="penugasan"><i class="fa fa-plane"></i><br>Penugasan/<br>Dinas</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="gaji"><i class="fa fa-money"></i><br>Gaji</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="cuti"><i class="fa fa-calendar-o"></i><br>Cuti</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="lembur"><i class="fa fa-clock-o"></i><br>Lembur</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="manajemen_rapat"><i class="fa fa-users"></i><br>Manajemen<br>Rapat</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="proyek"><i class="fa fa-table"></i><br>Manajemen<br>Proyek</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="Belum_Jadi"><i class="fa fa-list-ul"></i><br>To-do-list</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="Belum_Jadi"><i class="fa fa-trophy"></i><br>Penilaian<br>Kerja</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="Belum_Jadi"><i class="fa fa-book"></i><br>Inventaris</a>
					            		</div>
					            	</div>
					            	<div class="col-md-2">
					            		<div class="icon-bundar">
					            			<a href="http://kb.nufaza.com/"><i class="fa fa-user"></i><br>LMS</a>
					            		</div>
					            	</div>
					            </div>
					        </div>
	            		</div>
	            	</div>
	            </div>
	        </div>
	    </div>
@endsection
@else
	<h1>Anda Belom Aktif</h1>
@endif