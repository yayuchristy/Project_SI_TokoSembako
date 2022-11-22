@extends('layouts.main')

@section('container')

    <div>
        @php
            if(DB::connection()->getPdo()){
                echo "berhasil";
            }else{
                echo "gagal";
            }
        @endphp
    </div>
 @endsection
