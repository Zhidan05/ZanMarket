<!DOCTYPE html>
<html lang="en">
<base href="http://127.0.0.1:8000/dashboard/">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dashboard for ShoSo Marketplace" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>Halaman @yield('judul')</title>

    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('template.inc.side')
    <main class="content flex-fill">
        <section>
            <button aria-controls="sidebar" data-bs-toggle="offcanvas" data-bs-target=".sidebar"
                aria-label="Button Hamburger" class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none">
                <i class="fa-solid fa-bars"></i>
            </button>
            @include('template.inc.nav')
        </section>

        <section class="d-flex flex-column gap-4">
            <div class="d-flex justify-content-between align-items-center gap-3">
                <h4 class="title-section-content">@yield('judul')</h4>

            </div>
            <div class="d-flex gap-4 flex-wrap">
                @yield('konten')
            </div>
        </section>
    </main>

    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    </script>
</body>

</html>
