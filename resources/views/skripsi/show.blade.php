@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Skripsi /Detail Skripsi </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-11 col-md-8 col-sm-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{$skripsi->gambar_url}}" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-striped table-hover ms-3">
                                <tr>
                                    <td>Judul Skripsi</td>
                                    <td>{{$skripsi->judul_skripsi}}</td>
                                </tr>
                                <tr>
                                    <td>Kode skripsi</td>
                                    <td>{{$skripsi->kode_skripsi}}</td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>{{$skripsi->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Skripsi</td>
                                    <td>{{$skripsi->tahun}}</td>
                                </tr>
                                <tr>
                                    <td>Abstrak</td>
                                    <td>{!! $skripsi->abstrak !!}</td>
                                </tr>
                                {{-- <tr>
                                    <td>File Skripsi</td>
                                    <td><a href="{{$skripsi->file_url}}" target="_blank" rel="noopener noreferrer">download</a></td>
                                </tr> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection