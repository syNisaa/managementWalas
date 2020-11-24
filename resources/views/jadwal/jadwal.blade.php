@extends('bagian.sidebar')

@section('content')
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Jam</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection