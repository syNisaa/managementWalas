<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Data Kasus Siswa</title>
</head>
<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Kasus Siswa
            </div>
            <div class="card-body">
                <button class="btn btn-success" data-toggle="modal" data-target="#addData"> Tambah</button>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Siswa </th>
                            <th>Jenis Kasus</th>
                            <th>Point Kasus</th>
                            <th>Tanggal Kasus</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kasussiswa as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->namaSiswa }}</td>
                            <td>{{ $k->jenisKasus }}</td>
                            <td>{{ $k->point }}</td>
                            <td>{{ $k->Tanggal }}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $k->id }}">Update</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#hapusData">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/kasus/tambah">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">

                    @if($errors->has('nama_siswa'))
                        <div class="text-danger">
                            {{ $errors->first('nama_siswa')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Jenis Kasus</label>
                    <input type="text" name="jenis_kasus" class="form-control" placeholder="Jenis Kasus">

                    @if($errors->has('jenis_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Point Kasus</label>
                    <input type="text" name="point_kasus" class="form-control" placeholder="Point Kasus">

                    @if($errors->has('point_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('point_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Tanggal Kasus</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="date">
                    <!-- <input type="date" name="jenis_kasus" class="form-control" placeholder="Tanggal Kasus"> --}} -->

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
            </div>
        </div>
        </div>

    @foreach($kasussiswa as $k)
    <div class="modal" tabindex="-1" id="hapusData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Absensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin anda ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/kasus/hapus/{{ $k-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($kasussiswa as $k)
    <div class="modal" tabindex="-1" id="updateData{{$k->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kasus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/kasus/update/{{$k->id}}" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="namasiswa" class="form-control" placeholder="Nama Siswa" value=" {{ $k->namaSiswa }}">

                        @if($errors->has('nama_siswa'))
                            <div class="text-danger">
                                {{ $errors->first('nama_siswa')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jenis Kasus</label>
                        <input type="text" name="jeniskasus" class="form-control" placeholder="Jenis Kasus" value=" {{ $k->jenisKasus }}">

                         @if($errors->has('jenis_kasus'))
                            <div class="text-danger">
                                {{ $errors->first('jenis_kasus')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Point Kasus</label>
                        <input type="text" name="pointkasus" class="form-control" placeholder="Point Kasus" value=" {{ $k->point }}">

                         @if($errors->has('point_kasus'))
                            <div class="text-danger">
                                {{ $errors->first('point_kasus')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Kasus</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="tanggal" value=" {{ $k->Tanggal }}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach
    
</body>
</html>