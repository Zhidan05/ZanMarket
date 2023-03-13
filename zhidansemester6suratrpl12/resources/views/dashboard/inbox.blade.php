<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Laporan Inbox</title>
</head>

<body>
    <div class="text-center mb-3">
        <h2>Rekap Data Surat Masuk</h2>
        <h2>PT. MCU</h2>
    </div>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>#</th>
            <th>No. Agenda</th>
            <th>Jenis Surat</th>
            <th>Tanggal Kirim</th>
            <th>Tanggal Terima</th>
            <th>No. Surat</th>
            <th>Pengirim</th>
            <th>Perihal</th>
        </tr>
        @foreach ($inbox as $y)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $y->no_agenda }}</td>
            <td>{{ $y->jenis_surat }}</td>
            <td>{{ Carbon\Carbon::create($y->tanggal_kirim)->format('d F y') }}</td>
            <td>{{ Carbon\Carbon::create($y->tanggal_terima)->format('d F y') }}</td>
            <td>{{ $y->no_surat }}</td>
            <td>{{ $y->pengirim }}</td>
            <td>{{ $y->perihal }}</td>
        </tr>
        @endforeach
    </table>
    <div class="float-right text-center mt-3">
        <p class="mb-5">Pekanbaru, 28 Februari 2023</p>
        <p class="font-weight-bold">Zhidan Iannov Saaba</p>
        <p class="font-italic">IT Manager</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
