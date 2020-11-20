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
    <title>Form Adm</title>
</head>
<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data ADM Walas
            </div>
            <div class="card-body">
                <button class="btn btn-info" data-toggle="modal" data-target="#addData">Input ADM Baru</button> 
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Materi Pokok</th>
                            <th>Target Pengerjaan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adm_walass as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->materiPokok }}</td>
                            <td>{{ $a->targetPengerjaan }}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $a->id }}">Update</button>
                                <button data-toggle="modal" data-target="#hapusData" type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Delete Data Keuangan -->
    @foreach ($adm_walass as $k)
    <div class="modal" tabindex="-1" id="hapusData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data ADM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda Yakin Ingin Menghapus Data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/adm/hapus/{{ $k->id }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
            @endforeach
            </div>
        </div>
        </div>
    
    <!-- Modal Update Barang-->
    @foreach($adm_walass as $a)
    <div class="modal fade" id="modalUpdate{{ $a->id }}" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Management Walas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="/adm/update/{{ $a->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Materi Pokok</label>
                        <input type="text" name="materiPokok" class="form-control" placeholder="Materi Pokok" value=" {{ $a->materiPokok }}">

                        @if($errors->has('materiPokok'))
                            <div class="text-danger">
                                {{ $errors->first('materiPokok')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Target Pengerjaan</label>
                        <input type="date" name="target" id="target">

                        @if($errors->has('target'))
                            <div class="text-danger">
                                {{ $errors->first('target')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    
    <!-- Tambah -->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Keuangan Kelas </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="/adm/tambah">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Materi Pokok</label>
                <input type="text" name="materiPokok" class="form-control" placeholder="Materi Pokok">

                @if($errors->has('materi_pokok'))
                    <div class="text-danger">
                        {{ $errors->first('materi_pokok')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label>Target Pengerjaan</label>
                <input type="date" name="target" id="target">

                @if($errors->has('target_pengerjaan'))
                    <div class="text-danger">
                        {{ $errors->first('target_pengerjaan')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

            </form>
        </div>
    </div>
</div>

   

</body>
</html>