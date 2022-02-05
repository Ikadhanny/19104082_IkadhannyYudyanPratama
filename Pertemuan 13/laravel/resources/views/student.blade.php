@extends('base')
@section('content')

<div class="Container">
    <div class="row">
        <div class="col-lg-12">
            @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
            @endif

            <h4>
                Data Mahasiswa
            </h4>

            <h5>
                Menggunakan Datatables
            </h5>

            <a href="mahasiswa/create" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <td>
                                No
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
                    </thead>

                    @php
                        $no = 1
                    @endphp

                    <tbody>
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
                                    {{$s->address}}
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
                    </tbody>
                </table>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
            </script>

            <hr>
            <br>

            <h5>
                Data Mahasiswa Tanpa DataTable
            </h5>
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
