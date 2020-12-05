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
                <th scope="col">Bulan</th>
                <th scope="col">Pemasukan Kelas</th>
                <th scope="col">Pengeluaran Kelas</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        @foreach ($u as $k)
        <tbody>
            <tr>
                <td>{{ $k -> bulan}}</td>
                <td>{{ $k -> pemasukan}}</td>
                <td>{{ $k -> pengeluaran}}</td>
                <td>{{ $k -> saldo }}</td>
            </tr>
        </tbody>
        @endforeach
	</table>
 
</body>
</html>