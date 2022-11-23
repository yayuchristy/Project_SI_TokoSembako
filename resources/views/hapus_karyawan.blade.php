
@extends('layouts.main2')

@push('styles')
 <link href="{{ asset('css/hapusKaryawan.css') }}" rel="stylesheet">
@endpush

@section('container')
<h1 class="h1">Hapus Data Karyawan</h1>  

    <input id="searching"  onkeyup="myFunction()"  type="text" placeholder="Cari..." required>	

    <div class="tableKaryawan">

      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th class="th-sm">No
                  </th>
                  <th class="th-sm">Kode_karywan
                  </th>
                  <th class="th-sm">Nama_Karyawan
                  </th>
                  <th class="th-sm">Nomor Telepon
                  </th>
              </tr>
          </thead>
          <tbody>
              @php
                  $s = 1;
              @endphp
              @foreach ($data_karyawan as $data)
                  <tr>
                      <td>@php
                          echo $s;
                          $s++;
                      @endphp</td>
                      <td>{{ $data['Kode_Karyawan'] }}</td>
                      <td>{{ $data['Nama_Karyawan'] }}</td>
                      <td>{{ $data['No_Telp_Karyawan'] }}</td>
                  </tr>
              @endforeach

          </tbody>

      </table>
     
</div>
{{-- <button> </button> --}}
<button class="btn"><i class="bi-trash-fill"><span>Hapus</span></i></i></button>


@push('scripts')
<script type="text/javascript" src="{{ URL::asset ('js/lihatkaryawan.js') }}"></script>
@endpush

@endsection

