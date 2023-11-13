@php
$nama = "Budi";
$nilai = 59.58;
@endphp

@if ($nilai >= 60) @php $ket = "Lulus"; @endphp
@else @php $ket = "Gagal"; @endphp
@endif

Siswa {{$nama}} dengan nilai {{$nilai}} dinyatakan {{$ket}}