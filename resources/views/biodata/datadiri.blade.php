@extends('biodata.tampilan')
  
  @section('konten')  	
    	<div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	            		<div id="user-biodata">
	            			<div class="user-summary">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-3 col-sm-12">
	            							<img src="../assets/img/dde.jpeg">
	            						</div>
	            						@foreach($datadiri as $datadiri)
	            						<div class="col-md-9">
	            							<div class="col-md-12 col-sm-12" ><h1><strong>{{$datadiri->nama}}</strong></h1></div>
	            							<div class="col-md-9 col-sm-12"><h3>Desainer Basis Data</h3></div>
	            							<div class="col-md-3 col-sm-12"><h3>Desainer Basis Data</h3></div>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="user-data">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-9">
				            				<div class="col-md-5 col-sm-5"><p>Nama Lengkap</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6 col-sm-6"><p>{{$datadiri->nama}}</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Tempat dan Tanggal Lahir</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->tempat_lahir}}, {{$datadiri->tanggal_lahir}}</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Alamat</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->alamat}}</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Nomor Handphone</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->no_hp}}</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Email</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->email}}</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Status</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->status_perkawinan}}</p></div>	
				            			</div>		
				            			<!-- <div class="col-md-9">
				            				<div class="col-md-5"><p>Istri</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>Milladina Noer Hanifah</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Anak</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>Azinudin Achzab</p><p>Raka Pratama Tiyarno</p><p>Muhammad Rasyid Hidayat</p></div>		            			
					            		</div> -->
					            		@endforeach
					            	</div>
					            </div>
		            		</div>
	            		</div>
	            	</div>
	            </div>
	        </div>
	     </div>
@endsection

	 