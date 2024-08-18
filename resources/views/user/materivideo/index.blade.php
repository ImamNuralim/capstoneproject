@extends('partials.navbar')
@section('materivideo')
    <div class="card-body">
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@fat">Open modal for @fat</button> --}}
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

        <!-- Modal untuk Tabel Manage Employees -->
        <div class="modal fade" id="manageEmployeesModal" tabindex="-1" aria-labelledby="manageEmployeesModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageEmployeesModalLabel">Restore Materi Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabel Manage Employees -->
                        <div class="container-xl">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2">
                                                            <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                            <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                        </g>
                                                    </svg><span>Restore</span></a>
                                                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                    <span>Delete</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]"
                                                            value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Kaidah Islam</td>
                                                <td>Pada hari ini Rabu 11, September 2024 kita membahas tentang Kaidah Islam
                                                </td>


                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                                <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                            </g>
                                                        </svg></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]"
                                                            value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Kaidah Islam</td>
                                                <td>Pada hari ini Rabu 11, September 2024 kita membahas tentang Kaidah Islam
                                                </td>


                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                                <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                            </g>
                                                        </svg></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]"
                                                            value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Kaidah Islam</td>
                                                <td>Pada hari ini Rabu 11, September 2024 kita membahas tentang Kaidah Islam
                                                </td>


                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                                <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                            </g>
                                                        </svg></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]"
                                                            value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Kaidah Islam</td>
                                                <td>Pada hari ini Rabu 11, September 2024 kita membahas tentang Kaidah Islam
                                                </td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                                <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                            </g>
                                                        </svg></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]"
                                                            value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Kaidah Islam</td>
                                                <td>Pada hari ini Rabu 11, September 2024 kita membahas tentang Kaidah Islam
                                                </td>


                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M3.06 13a9 9 0 1 0 .49-4.087" />
                                                                <path d="M3 4.001v5h5M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0" />
                                                            </g>
                                                        </svg></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3" />
                                                        </svg></a>
                                                </td>
                                            </tr>

                                            <!-- Tambahkan lebih banyak data karyawan di sini jika diperlukan -->
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
                        <!-- Akhir dari Tabel Manage Employees -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body mt-3">
            <div class="row">
                <div class="col-9">
                    <div class="d-flex justify-content-start mt-3">
                        <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal"
                            data-bs-target="#uploadModal" data-bs-whatever="@mdo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2m-5-10v6" />
                                    <path d="M9.5 13.5L12 11l2.5 2.5" />
                                </g>
                            </svg>
                            Upload
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#manageEmployeesModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3" />
                                </g>
                            </svg>
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('user.materivideo.materi')
    </div>
    <script>
        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('avatar').click();
        });

        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
@endsection
