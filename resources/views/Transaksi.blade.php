@extends('layouts.main')

@push('styles')
 <link href="{{ asset('css/transaksi.css') }}" rel="stylesheet">
@endpush

@section('container')
<section>
    <div>
      <h1>TRANSAKSI</h1>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <!-- kotak kiri -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <p>Id Kasir</p>
                <p><input type="text" name="idKasir" style="width:100%"></p>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"></div>
                </div>
                <div>
                  <p>Nama Kasir</p>
                  <p><input type="text" name="nmKasir" style="width:100%"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- kotak kanan -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <p>Id Transaksi</p>
                <p><input type="text" name="idTrans" style="width:100%"></p>
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"></div>
                  </div>
                  <div>
                    <p>Tanggal Transaksi</p>
                    <p><input type="text" name="tglTrans" style="width: 281%"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<br>
    <div class="contain">
      <div class="wrapper">
        <div class="form">
          <h1>INPUTAN</h1>
          <form action="">
              <label for="" id="labelKode">Kode Barang</label>
              <input type="text" name="kdBrng" id="kdBrng">
              <label for="" id="labelJum">Jumlah Barang</label>
              <input type="text" name="jmlhBarang" id="jmlhBarang"><br><br>
              <input class="submit" type="submit" name="submit" value="Tambahkan Barang" id="btnTambah">
          </form>
        </div>
      </div>
    </div>
    
<br>
    <!-- tabel -->
    <h1 class="card-title">TABEL TRANSAKSI</h1>
    <div class="card">
        <div class="card-body">
          <table class="table table-hover table-bordered ali" width="500%">
            <thead align="center">
              <tr>
                <th scope="col" width="5%">No</th>
                <th scope="col" width="10%">Kode Barang</th>
                <th scope="col" width="30%">Nama Barang</th>
                <th scope="col" width="15%">Harga Barang (/satuan)</th>
                <th scope="col" width="10%">Jumlah Barang</th>
                <th scope="col" width="15%">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>B001</td>
                <td>Telur</td>
                <td>2.500</td>
                <td>2</td>
                <td>5.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>B002</td>
                <td>Teh Pucuk</td>
                <td>3.000</td>
                <td>2</td>
                <td>6.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>B003</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
              </tr>
              <tr>
                <td colspan="5" align="right">Total Harga: Rp</td>
                <td></td>
              </tr>
            </tbody>
          </table> <!-- Akhir table -->
          <a href="#wrab"><input type="submit" name="bayar" value="bayar" id="btnBayar"></a>
        </div>
      </div>
</section>
<footer id="footer">
  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright Kelompok 2 | Rekayasa Perangkat Lunak
    </div>
  </div>
</footer>

<!-- Pop Up Pesan -->
<div href="" class="wrab" id="wrab">
<div class="bg-color">
  <div class="modal" id="modal">
      <p><a href="">X</a></p>
      <h1 class="label">Konfirmasi Pembayaran</h1>
      <form action="" method="POST" accept-charset="utf-8">
          <label for="">Id Transaksi</label>
          <input type="text" id="name">
          <label for="">Tanggal Transaski:</label>
          <input type="password" id="sandi">
          <select name="cars" id="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
          </select>
          <br>
          <button type="submit" class="btn2">Konfirmasi</button>
          <button type="submit" class="btn2">Batal</button>
      </form>
  </div>
</div>
</div>

@push('scripts')
<script type="text/javascript" src="{{ URL::asset ('js/lihatkaryawan.js') }}"></script>
@endpush

@endsection

