<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Looping Forelse </title>
    </head>
    <body>
        <h3> Teknik Count Rows sebelum Looping </h3> <hr>
        @if (count($employees) > 0)
            @foreach ($employees as $key_nama => $value_job_desk)
                <p> Nama Siswa : <strong> {{ $key_nama }} </strong>, Pekerjaan : <strong> {{ $value_job_desk }} </strong> </p>
            @endforeach
        @else
            <strong> Tidak Ada Siswa Ditemukan </strong>
        @endif
        
        <h3> Teknik Laravel dengan Forelse </h3> <hr>
        @forelse ($employees as $key_nama => $value_job_desk)
            <p> Nama Siswa : <strong> {{ $key_nama }} </strong>, Pekerjaan : <strong> {{ $value_job_desk }} </strong> </p>
        @empty
            <strong> Tidak Ada Siswa Ditemukan </strong>
        @endforelse
    </body>
</html>