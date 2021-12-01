@extends('layouts/mainadmin')

@section('title','Halamam Home-Admin')

@section('nav')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"><h2>pubBrary </h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/homeAdmin">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/dataBuku">Data Buku</a>
              </li><li class="nav-item">
                <a class="nav-link" href="/kontakAdmin">Data Kategori Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/memberAdmin">Data Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/peminjamanAdmin">Data Peminjaman Buku</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="/aboutAdmin">Data About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Data Kontak</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
@endsection
@section('banner')
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
    </div>
@endsection
@section('footer')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <p>Copyright &copy; 2021 pubBrary
        </div>
      </div>
    </div>
  </div>
@endsection