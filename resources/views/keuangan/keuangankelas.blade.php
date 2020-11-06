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
                    <a href=""><button type="button" class="btn btn-info">Edit</button></a>
                    <a href=""><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

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
                <div class="input-group mb-3">  
                    <input type="text" class="form-control" placeholder="Bulan" aria-label="Bulan" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">  
                    <input type="text" class="form-control" placeholder="Pemasukan Kelas" aria-label="Pemasukan " aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">  
                    <input type="text" class="form-control" placeholder="Pengeluaran Kelas" aria-label="Pengeluaran" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">  
                    <input type="text" class="form-control" placeholder="Saldo Kelas" aria-label="Saldo" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan Data</button>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>