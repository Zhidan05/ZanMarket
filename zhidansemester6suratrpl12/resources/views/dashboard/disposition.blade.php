<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Laporan Disposisi</title>
</head>

<body>
    <div class="text-center mb-3">
        <h2>Rekap Data Disposisi</h2>
        <h2>PT. MCU</h2>
    </div>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>#</th>
            <th>Surat Masuk</th>
            <th>No. Disposisi</th>
            <th>No. Agenda</th>
            <th>No. Surat</th>
            <th>Kepada</th>
            <th>Status Surat</th>
            <th>Tanggapan</th>
        </tr>
        @foreach ($disposition as $x)
        <tr>
            <td>{{ $loop->iteration }}</td>
                <td>{{ $x->sumuk->no_surat }}</td>
                <td>{{ $x->no_disposisi }}</td>
                <td>{{ $x->no_agenda }}</td>
                <td>{{ $x->no_surat }}</td>
                <td>{{ $x->kepada }}</td>
                <td>{{ $x->status_surat }}</td>
                <td>{{ $x->tanggapan }}</td>
        </tr>
        @endforeach
    </table>
    <div class="float-right text-center mt-3">
        <p class="mb-5">Pekanbaru, 9 March 2023</p>
        <p class="font-weight-bold">Zhidan Iannov Saaba</p>
        <p class="font-italic">Head Chief</p>
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
