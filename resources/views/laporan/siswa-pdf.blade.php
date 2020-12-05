<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 
	<table class='table table-bordered'>
    <thead>
            <tr>
                <th>Nipd</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Taanggal Lahir</th>
                <th>Status Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $j)
            <tr>
                <td>{{ $j->nipd }}</td>
                <td>{{ $j->nisn }}</td>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->jurusan }}</td>
                <td>{{ $j->kelas }}</td>
                <td>{{ $j->tempatlahir }}</td>
                <td>{{ $j->tangallahir }}</td>
                <td><button class="btn btn-primary"> {{ $j->status }} </button></td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>