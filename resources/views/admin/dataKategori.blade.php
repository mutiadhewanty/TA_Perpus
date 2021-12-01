@extends('layouts/mainadmin')

@section('title','Halamam Home Kategori Buku')

@section('nav')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"><h2>pubBrary </h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/homeadmin">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/dataBuku">Data Buku</a>
              </li><li class="nav-item active" >
                <a class="nav-link" href="/kategoriAdmin">Data Kategori Buku</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/memberAdmin">Data Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/peminjamanAdmin">Data Peminjaman Buku</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="/aboutAdmin">Data About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontakAdmin">Data Kontak</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
@endsection

@section('content')
<!-- Main Content -->
	<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Data Kategori Buku</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li>Dashboard</li>
						<li><span>table</span></li>
						<li class="active"><span>Data Kategori Buku</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<br>
								<a href="/tambahKatAdmin">
									<button class="btn btn-success  mr-10"> Tambah Data</button>
								</a>
							</br>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>ID Kategori Buku</th>
														<th>Nama Kategori Buku</th>
														<th>Action</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>ID Kategori Buku</th>
														<th>Nama Kategori Buku</th>
														<th>Action</th>
													</tr>
												</tfoot>
												<tbody>
													@foreach($kategori_admin as $katAdmin)		
													<tr>
														<td>{{ $katAdmin->id }}</td>
														<td>{{ $katAdmin->nama_kategori }}</td>
														<td> </td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2021 &copy; pubBrary</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
	</div>
@endsection