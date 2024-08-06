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
                    <!-- Tambahkan lebih banyak kategori statis sesuai kebutuhan -->
                </select>
            </div>

            <div class="col-md-4">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control">
            </div>

            <div class="col-md-4">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control">
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
