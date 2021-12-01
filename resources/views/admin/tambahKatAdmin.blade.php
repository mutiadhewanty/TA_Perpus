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
					  <h5 class="txt-dark">Tambah Kategori Buku</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li>Dashboard</li>
						<li><span>table</span></li>
						<li class="active"><span>Tambah Kategori Buku</span></li>
					  </ol>
					</div>
				</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<!-- @if ($errors->any())
													<div class="alert alert-danger">
														<strong>Whoops!</strong> There were some problems with your input.<br><br>
														<ul>
															@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
															@endforeach
														</ul>
													</div> -->

													<!-- @endif -->
													<!-- action="{{ route('KategoriAdmin.store') }}" -->
													<form method="post" action="{{ route('KategoriAdmin.store') }}"  id="myForm">
													<!-- @csrf	 -->
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Tambah Kategori Buku</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-12 ">
																	<div class="form-group">
																		<label class="control-label mb-10">ID Kategori Buku</label>
																		<input type="text" name="id" class="form-control">
																	</div>
																</div>
																<div class="col-md-12 ">
																	<div class="form-group">
																		<label class="control-label mb-10">Nama Kategori Buku</label>
																		<input type="text" name="Nama_Kategori" class="form-control">
																	</div>
																</div>
															</div>
														</div>
														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-success  mr-10"> Save</button>
															<button type="button" class="btn btn-default">Cancel</button>
														</div>
													</form>
												</div>
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
	</div>
@endsection