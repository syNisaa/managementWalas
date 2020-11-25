
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Absensi</title>
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
                <th>Tanggal</th>
                <th>Jumlah Siswa Hadir</th>
                <th>Jumlah Ketidakhadiran</th>
                <th>Nama Siswa Tidak Hadir</th>
                <th>Bukti Kbm</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($absen as $j)
            <tr>
                <td>{{ $j->tanggal }}</td>
                <td>{{ $j->jumlahSiswaHadir }}</td>
                <td>{{ $j->jumlahKetidakhadiran }}</td>
                <td>{{ $j->namaSiswaTidakHadir }}</td>
                <td>{{ $j->buktiKBM }}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>