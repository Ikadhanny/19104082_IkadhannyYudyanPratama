@extends('template.base')
@section('content')

<div class="Container">
    <div class="row">
        <div class="col-lg-12">
            @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
            @endif

            <a href="mahasiswa/create" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            NIM
                        </td>
                        <td>
                            Name
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            Jurusan
                        </td>
                        <td>
                            Alamat
                        </td>
                        <td>
                            Aksi
                        </td>
                    </tr>

                    @php
                        $no = 1
                    @endphp

                    @foreach($students as $s)
                        <tr>
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $s->nim }}
                            </td>
                            <td>
                                {{ $s->name }}
                            </td>
                            <td>
                                {{ $s->gender }}
                            </td>
                            <td>
                                {{ $s->departement }}
                            </td>
                            <td>
                                {{ $s->address }}
                            </td>
                            <td>
                                <a href="{{ url('/mahasiswa/'.$s->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('/mahasiswa/hapus/'.$s->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
