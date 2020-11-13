<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan Kelas</title>
</head>
<body>
<div class="container">

    <button type="button" data-toggle="modal" data-target="#addData" style="margin-top:2%;" class="btn btn-success">Tambah</button>
                    
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bulan</th>
                <th scope="col">Pemasukan Kelas</th>
                <th scope="col">Pengeluaran Kelas</th>
                <th scope="col">Saldo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach ($keuangan as $k)
        <tbody>
            <tr>
                <th scope="row">{{ $k -> id}}</th>
                <td>{{ $k -> bulan}}</td>
                <td>{{ $k -> pemasukan}}</td>
                <td>{{ $k -> pengeluaran}}</td>
                <td>{{ $k -> saldo }}</td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $k->id }}">Update</button>
                    <!-- <a href=""><button type="button" class="btn btn-info">Edit</button></a> -->
                    <button data-toggle="modal" data-target="#hapusData" type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>


    <!-- Modal Update Barang-->
    @foreach($keuangan as $k)
    <div class="modal fade" id="modalUpdate{{ $k->id }}" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Management Walas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form method="post" action="/keuangan/update/{{$k->id}}" >
                        @csrf
                        @method('put')
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$k->id}}">
                    <div class="form-group">
                        <label for="">Bulan</label>
                        <input type="text" class="form-control" id="bulan" name="bulan" value="{{$k->bulan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Pemasukan</label>
                        <input type="text" class="form-control" id="pemasukan" name="pemasukan" value="{{ $k->pemasukan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Pengeluaran</label>
                        <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ $k->pengeluaran}}">
                    </div>
                    <div class="form-group">
                        <label for="">Saldo</label>
                        <input type="text" class="form-control" id="saldo" name="saldo" value="{{ $k->saldo}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                    <!--END FORM UPDATE BARANG-->
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Modal UPDATE Barang-->

    <!-- Add Data Keuangan -->
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
                <form method="post" action="/keuangan/tambah">
                    {{ csrf_field() }}
                <div class="input-group mb-3">  
                    <input type="text" name="bulan" id="bulan" class="form-control" placeholder="Bulan" aria-label="Bulan" aria-describedby="basic-addon1">
                        @if($errors->has('bulan'))
                                <div class="text-danger">
                                    {{ $errors->first('bulan')}}
                                </div>
                        @endif
                </div>
                <div class="input-group mb-3">  
                    <input type="text" name="pemasukan" id="pemasukan" class="form-control" placeholder="Pemasukan Kelas" aria-label="Pemasukan " aria-describedby="basic-addon1">
                        @if($errors->has('pemasukan'))
                                <div class="text-danger">
                                    {{ $errors->first('pemasukan')}}
                                </div>
                        @endif
                </div>
                <div class="input-group mb-3">  
                    <input type="text" name="pengeluaran" id="pengeluaran" class="form-control" placeholder="Pengeluaran Kelas" aria-label="Pengeluaran" aria-describedby="basic-addon1">
                        @if($errors->has('pengeluaran'))
                                <div class="text-danger">
                                    {{ $errors->first('pengeluaran')}}
                                </div>
                        @endif
                </div>
                <div class="input-group mb-3">  
                    <input type="text" name="saldo" id="saldo" class="form-control" placeholder="Saldo Kelas" aria-label="Saldo" aria-describedby="basic-addon1">
                        @if($errors->has('saldo'))
                                <div class="text-danger">
                                    {{ $errors->first('saldo')}}
                                </div>
                        @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
            </div>
        </form>
        </div>
    </div>

    <!-- Delete Data Keuangan -->
    @foreach ($keuangan as $k)
    <div class="modal" tabindex="-1" id="hapusData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Keuangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda Yakin Ingin Menghapus Data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/keuangan/hapus/{{ $k->id }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
            @endforeach
            </div>
        </div>
        </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>