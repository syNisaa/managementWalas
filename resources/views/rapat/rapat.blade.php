<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Kelompok Voyager Crud Rapat Ortu</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
            
                    <button type="button" data-toggle="modal" data-target="#addData" style="margin-top:2%;" class="btn btn-success">Tambah</button>
        
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Materi Pertemuan</th>
                                <th>Tgl Pertemuan</th>
                                <th>Jumlah Hadir</th>
                                <th>Bukti</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rapat as $p)
                            <tr>
                                <td>{{ $p->materiPertemuan}}</td>
                                <td>{{ $p->tglPertemuan}}</td>
                                <td>{{ $p->jumlahHadir}}</td>
                                <td>{{ $p->bukti }}</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $p->id }}">Update</button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteData">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

         <!-- Modal -->
         @foreach ($rapat as $p)
    <div class="modal" tabindex="-1" id="updateData{{$p->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Jadwal Rapat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/rapat/update/{{$p->id}}" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Materi Pertemuan</label>
                            <input type="text" name="materi_pertemuan" id ="materi_pertemuan" class="form-control" placeholder="materi pertemuan .." value=" {{ $p->materiPertemuan }}">

                            @if($errors->has('materi_pertemuan'))
                                <div class="text-danger">
                                    {{ $errors->first('materi_pertemuan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>tanggal pertemuan</label>
                            <input type="date" name="tgl_pertemuan" id="tgl_pertemuan">

                             @if($errors->has('tgl_pertemuan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pertemuan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="text" name="jumlah_hadir" id="jumlah_hadir" class="form-control" placeholder="Jumlah Hadir .." value="{{ $p->jumlahHadir }} "> 

                             @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Bukti</label>
                            <textarea name="bukti" id="bukti" class="form-control" placeholder="bukti .."> {{ $p->bukti }} </textarea>

                             @if($errors->has('bukti'))
                                <div class="text-danger">
                                    {{ $errors->first('bukti')}}
                                </div>
                            @endif

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

    

         @foreach($rapat as $p)
    <div class="modal" tabindex="-1" id="deleteData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Rapat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin anda ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/rapat/hapus/{{ $p-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Jadwal Rapat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/rapat/tambah" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Materi pertemuan</label>
                    <input type="text" name="materi_pertemuan" id ="materi_pertemuan" class="form-control" placeholder="materi pertemuan ..">

                        @if($errors->has('materi_pertemuan'))
                            <div class="text-danger">
                                {{ $errors->first('materi_pertemuan')}}
                            </div>
                        @endif
            </div>

            <div class="form-group">
                <label>Tanggal pertemuan</label>
                    <input type="date" name="tgl_pertemuan" id="tgl_pertemuan">

                        @if($errors->has('tgl_pertemuan'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_pertemuan')}}
                            </div>
                        @endif

            </div>

            <div class="form-group">
                <label>Jumlah Hadir</label>
                    <textarea name="jumlah_hadir" id ="jumlah_hadir" class="form-control" placeholder="jumlah hadir .."></textarea>

                         @if($errors->has('jumlah_hadir'))
                            <div class="text-danger">
                                {{ $errors->first('jumlah_hadir')}}
                            </div>
                        @endif

            </div>

            <div class="form-group">
                <label>Bukti</label>
                    <textarea name="bukti" id="bukti" class="form-control" placeholder="bukti .."></textarea>

                        @if($errors->has('bukti'))
                            <div class="text-danger">
                                {{ $errors->first('bukti')}}
                            </div>
                        @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
