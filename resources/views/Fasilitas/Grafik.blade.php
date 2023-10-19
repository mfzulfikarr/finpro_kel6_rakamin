@extends('layout.main')

@section('title', 'Fasilitas - Grafik Investra')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills menuprofil">
              
              <li class="nav-item">
                <a class="nav-link" href="Fasilitas">Formulir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Syarat">Syarat Perubahan & Prosedur Klaim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PerubahanAlamat">Perubahan Alamat</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Grafik">Grafik Investra</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">

                <form action="Grafik2">
                
                    <h5>Grafik Investra</h5>
                    <div class="container-fluid">                              
                        <div class="row">
                          <div class="col-12">
                                <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) wajib diisi</p>
                            </div>
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group col">
                                <label>Fund</label>
                                <select class="form-control" id="SelectFund">
                                  <option value="1">Investra Equity Fund</option>
                                  <option value="2">Investra Equity Syariah</option>
                                </select>
                            </div>                                    
                          </div>

                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group col">
                                <label>Periode</label>
                                <select class="form-control" id="periode">
                                  <option value="1">Per Tahun</option>
                                  <option value="2">Per Semester</option>
                                  <option value="2">Per Kuartal</option>
                                  <option value="2">Per Bulan</option>
                                  <option value="2">Per Hari</option>
                                </select>
                            </div>                                    
                          </div>

                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group col">
                                    <label>Dari:</label>
                                    <input type="date" class="form-control" id="datedari" required>
                                </div>
                          </div>

                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group col">
                                    <label>Sampai:</label>
                                    <input type="date" class="form-control" id="datesampai" required>
                                </div>
                          </div>

                          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mx-auto">
                            <div class="col mx-auto">
                                <center>
                                    <button class="btn btn-warning" disabled>Export To Excel</button>
                                    <button class="btn btn-warning" >Tampilkan</button>
                                </center>                              
                            </div>
                          </div>

                        </div>
                      </div>

                </form>                 

                   <!-- Akhir AccordionKamus -->
          
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->

  </div> <!-- Akhir Isi -->
@endsection
