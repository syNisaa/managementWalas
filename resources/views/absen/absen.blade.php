<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Absensi Kelas</title>
</head>
<body>
    <div class="container">
        
        <button type="button" data-toggle="modal" data-target="#addData" style="margin-top:2%;" class="btn btn-success">Tambah</button>
        
        <table class="table table-striped" style="text-align:center; margin-top:2%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Siswa Hadir</th>
                    <th>Jumlah Ketidakhadiran</th>
                    <th>Siswa Yang tidak hadir</th>
                    <th>Bukti KBM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absen as $a)
                <tr>
                    <td>{{ $a->id}}</td>
                    <td>{{ $a-> tanggal }}</td>
                    <td>{{ $a-> jumlahSiswaHadir }}</td>
                    <td>{{ $a-> jumlahKetidakhadiran }}</td>
                    <td>{{ $a-> namaSiswaTidakHadir }}</td>
                    <td>{{ $a-> buktiKBM}}</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $a->id }}">Update</button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteData">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Absensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/absen/tambah" method="post">
            {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="date" id="tanggal" name="tanggal" class="form-control"  aria-label="tanggal" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="number" id="jumlahhadir" name="jumlahhadir" class="form-control"  aria-label="jumlahhadir" placeholder="Jumlah Siswa Hadir" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="number" id="ketidakhadiran" name="ketidakhadiran" class="form-control"  aria-label="ketidakhadiran" placeholder="Jumlah Ketidakhadiran" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="siswatidakhadir" name="siswatidakhadir" class="form-control"  aria-label="siswatidakhadir" placeholder="Siswa yang Tidak hadir" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="file"  name="buktigambar">
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

    @foreach ($absen as $a)
    <div class="modal" tabindex="-1" id="updateData{{$a->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Absensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/absen/update/{{$a->id}}" >
                        @csrf
                        @method('put')
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$a->id}}">
                    <div class="input-group mb-3">
                        <input type="date" id="tanggal" name="tanggal" class="form-control"  aria-label="tanggal" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" id="jumlahhadir" name="jumlahhadir" class="form-control"  aria-label="jumlahhadir" value="{{$a->jumlahSiswaHadir}}" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" id="ketidakhadiran" name="ketidakhadiran" class="form-control"  aria-label="ketidakhadiran" value="{{$a->jumlahKetidakhadiran}}" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="siswatidakhadir" name="siswatidakhadir" class="form-control"  aria-label="siswatidakhadir" value="{{$a->namaSiswaTidakHadir}}" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file"  name="buktigambar">
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

    @foreach($absen as $a)
    <div class="modal" tabindex="-1" id="deleteData">
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
                <a href="/absen/hapus/{{ $a-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>