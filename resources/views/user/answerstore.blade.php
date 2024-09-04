@extends('partials.navbar')

@section('answerstore')
<div class="container mt-3">
    <button class="btn btn-secondary mb-3" id="toggleFilterBtn">Filter</button>
    <!-- Filter Form -->
    <form method="GET" action="#" class="mb-4" id="filterForm" style="display: none;">
        <div class="row">
            <div class="col-md-4">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-select">
                    <option value="">Select Category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                    <!-- Tambahkan lebih banyak kategori sesuai kebutuhan -->
                </select>
            </div>

            <div class="col-md-4">
                <label for="date_range" class="form-label">Date Range</label>
                <select name="date_range" id="date_range" class="form-select">
                    <option value="">Select Date Range</option>
                    <option value="3days">3 Hari yang Lalu</option>
                    <option value="1week">Seminggu yang Lalu</option>
                    <option value="1month">Satu Bulan yang Lalu</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <div class="row justify-content-center">
        <div class="col-lg-8 content card-post col-12 ">
            @include('user.answer')
        </div>
    </div>
</div>

<script>
    document.getElementById('toggleFilterBtn').addEventListener('click', function() {
        var filterForm = document.getElementById('filterForm');
        if (filterForm.style.display === 'none') {
            filterForm.style.display = 'block';
        } else {
            filterForm.style.display = 'none';
        }
    });
</script>

@endsection
