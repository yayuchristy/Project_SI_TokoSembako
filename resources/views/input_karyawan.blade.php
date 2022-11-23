
@extends('layouts.main2')

@push('styles')
 <link href="{{ asset('css/inputKaryawan.css') }}" rel="stylesheet">
@endpush

@section('container')
<h1 class="h1">Input Data Karyawan</h1> 
<form>
    <div class="form-group">
      <label for="kode_karyawan">Kode Karyawan</label>
      <input type="text" class="form-control" id="kodeKaryawan" >
    </div>
    <div class="form-group">
      <label for="nama_karyawan">Nama Karyawan</label>
      <input type="text" class="form-control" id="namaKaryawan">
    </div>
    <div class="form-group">
        <label for="noTelp">Nomor Telepon Karyawan</label>
        <input type="text" class="form-control" id="noTelp">
    </div>
    <button type="submit" class="btn btn-primary" id="batal">Batal</button>
    <button type="submit" class="btn btn-primary" id="tambah">Tambah</button>
    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
  </form>

  {{-- membuat tabel preview --}}
  <p>Tinjauan</p>
  <div class="tableKaryawan"> 
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">Position
            </th>
            <th class="th-sm">Office
            </th>
            <th class="th-sm">Age
            </th>
            <th class="th-sm">Start date
            </th>
            <th class="th-sm">Salary
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
          </tr>
          <tr>
            <td>Jennifer Chang</td>
            <td>Regional Director</td>
            <td>Singapore</td>
            <td>28</td>
            <td>2010/11/14</td>
            <td>$357,650</td>
          </tr>
          <tr>
            <td>Brenden Wagner</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>28</td>
            <td>2011/06/07</td>
            <td>$206,850</td>
          </tr>
          <tr>
            <td>Fiona Green</td>
            <td>Chief Operating Officer (COO)</td>
            <td>San Francisco</td>
            <td>48</td>
            <td>2010/03/11</td>
            <td>$850,000</td>
          </tr>
        </tbody>
    </table>
</div>

@push('scripts')
<script type="text/javascript" src="{{ URL::asset ('js/inputkaryawan.js') }}"></script>
@endpush

@endsection