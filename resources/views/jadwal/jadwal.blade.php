@extends('bagian.sidebar')

@section('content')
<a href="/jadwal/cetak_pdf" class="btn btn-primary" target="_blank" style="margin-top:3%;">CETAK PDF</a>
        
    <table class="table table-striped" style="text-align:center; margin-top:2px;">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Bulan</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $j)
            <tr>
                <td>{{ $j->hari }}</td>
                <td>{{ $j->bulan }}</td>
                <td>{{ $j->nama_guru }}</td>
                <td>{{ $j->mata_pelajaran }}</td>
                <td>{{ $j->jam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection