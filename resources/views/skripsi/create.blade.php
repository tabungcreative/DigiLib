@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Skripsi / Tambah Skripsi</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-11 col-md-8 col-sm-6">
            <a class="btn btn-primary mb-3" href="{{ route('skripsi.index') }}">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form action="{{ route('skripsi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="nim">Nim</label>
                            <input class="form-control" id="nim" type="text" placeholder="Nim" name="nim" value="{{ old('nim') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="nama">Nama</label>
                            <input class="form-control" id="nama" type="text" placeholder="nama" name="nama" value="{{ old('nama') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="prodi">Prodi</label>
                            <select class="form-control" id="prodi" name="prodi">
                                <option ><-- Pilih Prodi --></option>
                                <option value="akuntansi" {{ old('prodi') == "akuntansi" ? 'selected' : '' }}>Akuntansi</option>
                                <option value="manajemen" {{ old('prodi') == "manajemen" ? 'selected' : '' }}>Manajemen</option>
                                <option value="perbankan syariah" {{ old('prodi') == "perbankan syariah" ? 'selected' : '' }}>Perbankan syariah</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="pembimbing1">Pembimbing 1</label>
                            <select class="form-select form-control" name="pembimbing1" id="pembimbing1">
                                <option selected>Pilih pembimbing</option>
                                @foreach ($dosen as $data)
                                    <option value="{{$data['nama']}}">{{$data['nama']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="pembimbing2">Pembimbing 2</label>
                            <select class="form-select form-control" name="pembimbing2" id="pembimbing2">
                                <option selected>Pilih pembimbing</option>
                                @foreach ($dosen as $data)
                                    <option value="{{$data['nama']}}">{{$data['nama']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="judul_skripsi">Judul Skripsi</label>
                            <input class="form-control" id="judul_skripsi" type="text" placeholder="Judul Skripsi" name="judul_skripsi" value="{{ old('judul_skripsi') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="tahun">Tahun Skripsi</label>
                            <input class="form-control" id="tahun" type="text" placeholder="Tahun Skripsi" name="tahun" value="{{ old('tahun') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="kode_skripsi">Kode Skripsi</label>
                            <input class="form-control" id="kode_skripsi" type="text" placeholder="kode skripsi" name="kode_skripsi" value="{{ old('kode_skripsi') }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="abstrak">Abstrak</label>
                            <textarea name="abstrak" id="abstrak" cols="30" rows="10" class="form-control ckeditor" required>{{ old('abstrak') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="file">File Skripsi</label>
                            <input class="form-control" id="file" type="file" placeholder="file" name="file">
                        </div>
                        <div class="mb-3">
                            <label class="text-danger">*</label>
                            <label for="gambar">Cover Skripsi</label>
                            <input class="form-control" id="gambar" type="file" placeholder="gambar" name="gambar">
                        </div>
                        <button button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection