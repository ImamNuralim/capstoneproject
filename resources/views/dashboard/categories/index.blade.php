@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Kategori</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/categories/create" class="btn btn-success mb-3 mx-1"><span class="mb-1" data-feather="plus-square"></span> Kategori Baru</a>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

{{-- New Table --}}
<div class="container-fluid px-1 mt-1">
  <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Semua Kategori
      </div>
      <div class="card-body">
          <table class="table table-bordered" id="category-table">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->keterangan }}</td>
                  <td>{{ $category->created_at->toDateString() }}</td>
                  <td>
                    <a href="/dashboard/categories/{{ $category->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/categories/{{ $category->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="trash-2"></span></button>
                      </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#category-table').DataTable({
            paging: true,
            ordering: true,
            searching: true
        });
    });
@endsection