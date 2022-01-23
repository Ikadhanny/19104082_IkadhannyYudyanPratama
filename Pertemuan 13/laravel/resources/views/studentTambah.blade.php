@extends('base')
@section('content')
    <div id="container">
        <div class="col-lg-6">
            <h1>Tambah Mahasiswa</h1>
            @if (session('pesan'))
                <div class="alert alert-success">
                    {{ session('pesan') }}
                </div>
            @endif
            <form action="/mahasiswa/create" method="post">
                @csrf

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" placeholder="NIM" name="nim" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control" required id="">
                        <option value="#" selected>Pilih Jenis Kelamin</option>

                        @foreach($gender as $g)
                        <option value="{{ $g }}">
                            {{ $g }}
                        </option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="departement">Jurusan</label>
                    <select name="departement" class="form-control" required id="">
                        <option value="#" selected>Pilih Jurusan</option>

                        @foreach($departement as $d)
                            <option value="{{ $d }}">
                                {{ $d }}
                            </option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="address" id="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
