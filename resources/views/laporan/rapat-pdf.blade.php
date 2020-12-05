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
            <th style="text-align: center">Materi Pertemuan</th>
            <th style="text-align: center">Tanggal Pertemuan</th>
            <th style="text-align: center">Jumlah Hadir</th>
            <th style="text-align: center">Bukti</th>
        </tr>
    </thead>
    <tbody>
        @foreach($r as $data)
            <tr style="text-align: center">
                <td>{{ $data->materi_pertemuan }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->jml_hadir }}</td>
                <td>{{ $data->bukti }}</td>
            </tr>
        @endforeach
    </tbody>
	</table>
 
</body>
</html>