<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Test</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Jadwal Guru
                </div>
                <div class="card-body">
                <button type="button" data-toggle="modal" data-target="#addData" style="margin-top:2%;" class="btn btn-success">Tambah</button>
       
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Jam</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwal as $j)
                            <tr>
                                <td>{{ $j->hari }}</td>
                                <td>{{ $j->tanggal }}</td>
                                <td>{{ $j->nama_guru }}</td>
                                <td>{{ $j->mata_pelajaran }}</td>
                                <td>{{ $j->jam }}</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $j->id }}">Update</button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteData">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>