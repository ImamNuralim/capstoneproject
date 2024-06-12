@extends('partials.navbar')
@section('home')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-2 kategori">
                <h3 style="padding: 1.5px;">Kategori</h3>

                <li href="" style="list-style: none; padding:2px ">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Sholat
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Nikah
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Puasa
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Zakat
                    </a>
                </li>

            </div>
            <div class="col-lg-8 content card-post col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" class="form-control form-control-rounded"
                                    placeholder="What do you want to ask or share?" type="button" data-bs-toggle="modal"
                                    data-bs-target="#askQuestionModal">
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <button class="btn btn-ghost-secondary w-100 btn-pill" type="button"
                                            data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-message-question" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 9h8"></path>
                                                <path d="M8 13h6"></path>
                                                <path
                                                    d="M14 18h-1l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5">
                                                </path>
                                                <path d="M19 22v.01"></path>
                                                <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483">
                                                </path>
                                            </svg>
                                            Ask
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn btn-ghost-secondary w-100 btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                </path>
                                                <path
                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                </path>
                                                <path d="M16 5l3 3"></path>
                                            </svg>
                                            Answer
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-ghost-secondary w-100 btn-pill" type="button"
                                            data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-pencil-plus" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                                </path>
                                                <path d="M13.5 6.5l4 4"></path>
                                                <path d="M16 19h6"></path>
                                                <path d="M19 16v6"></path>
                                            </svg>
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $from = 'home';
                @endphp


                @include('user.answer')

                {{-- <div class="mb-4">
                    @foreach ($answers as $answer)
                        <livewire:user.answer :$answer wire:key="{{ $answer->id }}" :$from />
                    @endforeach
                </div> --}}
            </div>

            <div class="modal" id="askQuestionModal" tabindex="-1" wire:ignore.self>
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form wire:submit="addQuestion">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Question</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="form-label required">Question</label>
                                <input type="text"
                                    class="form-control form-control-flush mt-3 @error('title') is-invalid @enderror"
                                    wire:model="title"
                                    placeholder="Start your question with 'What', 'How', 'Why', etc." />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-ghost-secondary btn-pill"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-pill">
                                    <div wire:loading wire:target="addQuestion">
                                        <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    </div>
                                    Add Question
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 call-to-action">
                <h3>Iklan</h3>

                <!-- Isi call to action di sini -->
            </div>
        </div>
    </div>
@endsection
