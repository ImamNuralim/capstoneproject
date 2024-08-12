@extends('dashboard.index')
@section('ustaz')
    <link rel="stylesheet" href="css/ustaz.css">
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                <style>
                    body {
                        color: #566787;
                        background: #f5f5f5;
                        font-family: 'Varela Round', sans-serif;
                        font-size: 13px;
                    }

                    .table-responsive {
                        margin: 30px 0;
                    }

                    .table-wrapper {
                        min-width: 1000px;
                        background: #fff;
                        padding: 20px 25px;
                        border-radius: 3px;
                        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                    }

                    .table-title {
                        padding-bottom: 15px;
                        background: #299be4;
                        color: #fff;
                        padding: 16px 30px;
                        margin: -20px -25px 10px;
                        border-radius: 3px 3px 0 0;
                    }

                    .table-title h2 {
                        margin: 5px 0 0;
                        font-size: 24px;
                    }

                    .table-title .btn {
                        color: #566787;
                        float: right;
                        font-size: 13px;
                        background: #fff;
                        border: none;
                        min-width: 50px;
                        border-radius: 2px;
                        border: none;
                        outline: none !important;
                        margin-left: 10px;
                    }

                    .table-title .btn:hover,
                    .table-title .btn:focus {
                        color: #566787;
                        background: #f2f2f2;
                    }

                    .table-title .btn i {
                        float: left;
                        font-size: 21px;
                        margin-right: 5px;
                    }

                    .table-title .btn span {
                        float: left;
                        margin-top: 2px;
                    }

                    table.table tr th,
                    table.table tr td {
                        border-color: #e9e9e9;
                        padding: 12px 15px;
                        vertical-align: middle;
                    }

                    table.table tr th:first-child {
                        width: 60px;
                    }

                    table.table tr th:last-child {
                        width: 100px;
                    }

                    table.table-striped tbody tr:nth-of-type(odd) {
                        background-color: #fcfcfc;
                    }

                    table.table-striped.table-hover tbody tr:hover {
                        background: #f5f5f5;
                    }

                    table.table th i {
                        font-size: 13px;
                        margin: 0 5px;
                        cursor: pointer;
                    }

                    table.table td:last-child i {
                        opacity: 0.9;
                        font-size: 22px;
                        margin: 0 5px;
                    }

                    table.table td a {
                        font-weight: bold;
                        color: #566787;
                        display: inline-block;
                        text-decoration: none;
                    }

                    table.table td a:hover {
                        color: #2196F3;
                    }

                    table.table td a.settings {
                        color: #2196F3;
                    }

                    table.table td a.delete {
                        color: #F44336;
                    }

                    table.table td i {
                        font-size: 19px;
                    }

                    table.table .avatar {
                        border-radius: 50%;
                        vertical-align: middle;
                        margin-right: 10px;
                    }

                    .status {
                        font-size: 30px;
                        margin: 2px 2px 0 0;
                        display: inline-block;
                        vertical-align: middle;
                        line-height: 10px;
                    }

                    .text-success {
                        color: #10c469;
                    }

                    .text-info {
                        color: #62c9e8;
                    }

                    .text-warning {
                        color: #FFC107;
                    }

                    .text-danger {
                        color: #ff5b5b;
                    }

                    .pagination {
                        float: right;
                        margin: 0 0 5px;
                    }

                    .pagination li a {
                        border: none;
                        font-size: 13px;
                        min-width: 30px;
                        min-height: 30px;
                        color: #999;
                        margin: 0 2px;
                        line-height: 30px;
                        border-radius: 2px !important;
                        text-align: center;
                        padding: 0 6px;
                    }

                    .pagination li a:hover {
                        color: #666;
                    }

                    .pagination li.active a,
                    .pagination li.active a.page-link {
                        background: #03A9F4;
                    }

                    .pagination li.active a:hover {
                        background: #0397d6;
                    }

                    .pagination li.disabled i {
                        color: #ccc;
                    }

                    .pagination li i {
                        font-size: 16px;
                        padding-top: 6px
                    }

                    .hint-text {
                        float: left;
                        margin-top: 10px;
                        font-size: 13px;
                    }
                </style>
                <script>
                    $(document).ready(function() {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
            </head>

            <body>
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h2>Data Ustaz</b></h2>
                                    </div>
                                    <div class="col-sm-7">
                                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                                            <span>Add New User</span></a>
                                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i>
                                            <span>Export to Excel</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#"><img src="/examples/images/avatar/1.jpg" class="avatar"
                                                    alt="Avatar"> Michael Holz</a></td>
                                        <td>04/10/2013</td>
                                        <td>Admin</td>
                                        <td><span class="status text-success">&bull;</span> Active</td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="material-icons">&#xE5C9;</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            <div class="modal fade " id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="uploadModalLabel">Video baru</h1>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="title-name" class="col-form-label">Judul :</label>
                                    <input type="text" class="form-control" id="title-name">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi-text" class="col-form-label">Deskripsi :</label>
                                    <textarea class="form-control" id="deskripsi-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Link Youtube:</label>
                                    <input type="text" class="form-control" id="link">
                                </div>
                                <div class="media">
                                    <!-- Input file disembunyikan dengan multiple -->
                                    <P><b>Pilih Thumbnail</b></P>
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"
                                        style="display: none;" multiple />
                                    <!-- Ikon pengganti yang akan ditampilkan -->
                                    <button id="uploadButton" class="icon-button" type="button" aria-label="Upload Images">
                                        <!-- Tambahkan ikon Tabler di sini -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path
                                                    d="M15 8h.01M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z" />
                                                <path d="m3 16l5-5c.928-.893 2.072-.893 3 0l5 5" />
                                                <path d="m14 14l1-1c.928-.893 2.072-.893 3 0l3 3" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Tempat untuk menampilkan pratinjau gambar -->
                                <div id="preview" class="image-preview"></div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
