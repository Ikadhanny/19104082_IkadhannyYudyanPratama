@extends('template.base')
@section('content')

    <div id="container">
        <div class="col-lg-6">
            <h1>Edit Mahasiswa</h1>
            @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
            @endif
            <form action="/mahasiswa/{{ $student->id }}/edit" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" value="{{$student->nim}}" class="form-control" placeholder="NIM" name="nim" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" value="{{$student->name}}" class="form-control" placeholder="Nama" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control" required id="">
                        <option value="#" selected>Pilih Jenis Kelamin</option>

                        <option selected value="{{$student->gender}}">
                            {{$student->gender}}
                        </option>

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

                        <option selected value="{{$student->departement}}">
                            {{$student->departement}}
                        </option>

                        @foreach($departement as $d)
                            <option value="{{ $d }}">
                                {{ $d }}
                            </option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" value="{{$student->address}}" class="form-control" placeholder="Alamat" name="address" id="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
