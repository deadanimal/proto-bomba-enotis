@extends('layouts.base')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <i class="fas fa-list me-sm-1 text-dark"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Notis Baru</a></li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Notis Baru</h6>
            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div> -->
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0" target="_blank">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Log Masuk</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Mesej baru</span> daripada Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minit yg lepas
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Album baru</span> daripada Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 hari
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mt-5">NOTIS BARU</h3>
                <h6 class="text-secondary font-weight-normal">JADUAL PERTAMA AKTA PERKHIDMATAN BOMBA 1988</h6>
                <h6 class="text-secondary font-weight-normal">BORANG A SEKSYEN 8(1)</h6>
                <h6 class="text-secondary font-weight-normal">NOTIS MENGHAPUS BAHAYA KEBAKARAN</h6>
                <div class="multisteps-form mb-5">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-5">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                    <span>Maklumat Premis</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">
                                    <span>Kesalahan</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                    <span>Gambar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form" method="POST" action="/notis-baru">
                                @csrf
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Sila isi maklumat berikut:</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                <label>TARIKH PEMERIKSAAN</label>
                                                <input class="multisteps-form__input form-control mb-3" type="date" value="2020-01-01" />
                                                <label>NAMA PREMIS</label>
                                                <input class="multisteps-form__input form-control mb-3" name="nama" type="text" value="Pipeline Network Sdn Bhd" />
                                                <label>ALAMAT PREMIS</label>
                                                <textarea class="multisteps-form__input form-control mb-3" name="alamat" placeholder="C3A12, Metropolitan Square, Center Wing, Jalan PJU 8/1, 47820 Petaling Jaya, Selangor"></textarea>
                                                <label>NO. SIRI RUJUKAN</label>
                                                <!-- <input class="multisteps-form__input form-control mb-3" type="text" placeholder="Eg. JPBM" /> -->
                                                <div class="input-group">
                                                    <span class="input-group-text">JPBM/KL/TDI: 700-</span>
                                                    <input type="text" aria-label="input1" class="multisteps-form__input form-control">
                                                    <span class="input-group-text">/</span>
                                                    <input type="text" aria-label="input2" class="multisteps-form__input form-control">
                                                    <span class="input-group-text">/</span>
                                                    <input type="text" aria-label="input3" class="multisteps-form__input form-control">
                                                    <span class="input-group-text">TDI</span>
                                                    <input type="text" aria-label="input2" class="multisteps-form__input form-control">
                                                    <span class="input-group-text">/2021</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Kesalahan</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                <label>JENIS PPK</label>
                                                <select class="multisteps-form__input form-control mb-3">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <optgroup label="PAM">
                                                        <option value="11">PAM JOKEY</option>
                                                        <option value="12">PAM DUTY</option>
                                                    </optgroup>
                                                    <!-- <option value="1">PAM</option> -->
                                                    <option value="2">PINTU API</option>
                                                    <option value="3">ALAT PEMADAM API</option>
                                                    <option value="4">LAMPU KECEMASAN</option>
                                                    <option value="5">TANGGA</option>
                                                </select>
                                                <label>KESALAHAN</label>
                                                <select class="multisteps-form__input form-control mb-3">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="1">TIADA</option>
                                                    <option value="2">TIDAK DISELENGGARA</option>
                                                    <option value="3">TAMAT TEMPOH DAN TIDAK DISELENGGARA</option>
                                                    <option value="4">ROSAK</option>
                                                    <!-- <option value="5">5</option> -->
                                                </select>
                                                <label>LOKASI</label>
                                                <select class="multisteps-form__input form-control mb-3">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="1">TINGKAT 1</option>
                                                    <option value="2">TINGKAT 2</option>
                                                    <option value="3">TINGKAT 3</option>
                                                    <option value="4">TINGKAT 4</option>
                                                    <option value="5">TINGKAT 5</option>
                                                    <option value="6">LAIN-LAIN (SILA NYATAKAN)</option>
                                                </select>
                                                <label>PEMBETULAN</label>
                                                <select class="multisteps-form__input form-control mb-3">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="1">MENGADAKAN</option>
                                                    <option value="2">MEMBAIK PULIH</option>
                                                    <option value="3">MEMBUAT PENYELENGARAAN</option>
                                                    <option value="4">MEMBUKA HALANGAN</option>
                                                    <option value="5">LAIN-LAIN (SILA NYATAKAN)</option>
                                                </select>
                                                <label>SEKSYEN</label>
                                                <select class="multisteps-form__input form-control mb-3">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="1">SEKSYEN 2(A)</option>
                                                    <option value="2">SEKSYEN 2(B)</option>
                                                    <option value="3">SEKSYEN 2(C)</option>
                                                    <option value="4">SEK SYEN 2(D)</option>
                                                    <option value="5">SEKSYEN 2(E)</option>
                                                </select>
                                                <label>TEMPOH</label>
                                                <select class="multisteps-form__input form-control mb-3" name="tempoh_notis">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="1">30 HARI</option>
                                                    <option value="2">60 HARI</option>
                                                    <option value="3">90 HARI</option>
                                                    <option value="4">120 HARI</option>
                                                    <option value="5">150 HARI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">MUAT NAIK GAMBAR</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row text-start">
                                            <!-- <div class="col-12 col-md-8 ms-auto mt-3">
                                                <label>Street Name</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Eg. Soft" />
                                            </div> -->
                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                <div action="/file-upload" class="form-control dropzone" id="productImg"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                                <a class="btn bg-gradient-dark ms-auto mb-0" href="/papar-borang" type="submit" title="Send">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/multistep-form.js"></script>
<script src="../../assets/js/plugins/choices.min.js"></script>
<script src="../../assets/js/plugins/dropzone.min.js"></script>
<script>
    if (document.getElementById('choices-country')) {
        var country = document.getElementById('choices-country');
        const example = new Choices(country);
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>

@stop