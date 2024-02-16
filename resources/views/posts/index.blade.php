{{-- @extends('layouts.main')

@section('content')
    <h1>Postingan</h1>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    </div>
                    <div class="card-body">
                        <p>{{ $post->excerpt }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection --}}
