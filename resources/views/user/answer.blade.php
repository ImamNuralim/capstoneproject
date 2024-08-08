<head>
    <link href="{{ asset('assets/css/answer.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
</head>
<div>
    <div id="" x-data="{ open: false }">
        <div class="card mt-2 mb-3">
            <div class="card-body">
                <div class="row" x-data="{ open: false }">
                    <div class="col-1">
                        <span class="avatar rounded-circle" style="color: aquamarine, padding-left:5px">
                            <img class="avatar rounded-circle" src="{{ asset('assets/images/profile/user-1.jpg') }}"
                                alt="">
                        </span>
                    </div>
                    <div class="col-11" style="padding-left:25px">
                        <a class="username no-underline" href="{{ route('user.profile.index') }}">
                            <b>
                                <span style="text-direction: none">Imam Nuralim</span>
                            </b>
                        </a>
                        <a class="follow no-underline" href="#" id="follow-btn"
                            style="padding-left: 10px; position: relative;">
                            Follow
                            <span id="loading-icon" style="display: none; margin-left: 5px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader">
                                    <line x1="12" y1="2" x2="12" y2="6"></line>
                                    <line x1="12" y1="18" x2="12" y2="22"></line>
                                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                    <line x1="2" y1="12" x2="6" y2="12"></line>
                                    <line x1="18" y1="12" x2="22" y2="12"></line>
                                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                </svg>
                            </span>
                        </a>
                        <div class="text-secondary">
                            <a class="credential" href="">Mahasiswa Universitas Diponegoro</a>
                            &#8226; <span id="created-at"></span>
                        </div>
                    </div>

                    {{-- untuk photo/caption --}}
                    <div class="mt-3">
                        <p class="caption">Haloo disini saya membuat tampilan postingan</p>
                        <a href="#" class="text-dark" data-toggle="modal" data-target="#imageModal">
                            <div class="image-container">
                                <img src="{{ asset('img/no-image.png') }}" class="img-fluid"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                        aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('img/test.png') }}" class="img-fluid">
                                    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-1">
                        <small class="text-secondary">10 views</small>
                    </div>
                    <div class="mt-2">
                        <button wire:click="votes('up')"
                            class="btn btn-pill btn-outline-secondary active border-secondary">
                            <div wire:loading.remove wire:target="votes('up')">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-big-up" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M9 20v-8h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v8a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                    </path>
                                </svg>
                            </div>

                            &#8226; 5
                            {{-- &#8226; {{ number_format_short($total_upvotes) }} --}}
                        </button>
                        <button wire:click="votes('down')" class="btn btn-pill btn-outline-secondary )  ">
                            <div wire:loading.remove wire:target="votes('up')">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-big-down" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M15 4v8h3.586a1 1 0 0 1 .707 1.707l-6.586 6.586a1 1 0 0 1 -1.414 0l-6.586 -6.586a1 1 0 0 1 .707 -1.707h3.586v-8a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>

                            {{-- &#8226; {{ number_format_short($total_upvotes) }} --}}
                        </button>
                        <button class="btn btn-pill btn-ghost-secondary" @click="open = ! open">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-message-circle" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1">
                                </path>
                            </svg>
                            {{-- {{ number_format_short($total_comments) }} --}}
                        </button>
                        <button class="btn btn-pill btn-ghost-secondary" data-bs-toggle="modal" id="shareButton"
                            data-bs-target="#shareModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M8.7 10.7l6.6 -3.4"></path>
                                <path d="M8.7 13.3l6.6 3.4"></path>
                            </svg>
                            {{-- {{ number_format_short($total_shares) }} --}}
                        </button>
                        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog"
                            aria-labelledby="shareModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="width: 30%">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="shareModalLabel">Bagikan ke Sosial Media</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://example.com"
                                            target="_blank" class="btn btn-primary mx-2">
                                            Facebook
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url=https://example.com&text=Check%20this%20out!"
                                            target="_blank" class="btn btn-info mx-2">
                                            Twitter
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text=https://example.com"
                                            target="_blank" class="btn btn-success mx-2">
                                            WhatsApp
                                        </a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('share-popup')
                        <div class="float-end">
                            <svg role="button" data-bs-toggle="dropdown" xmlns="http://www.w3.org/2000/svg"
                                class="mt-2 icon icon-tabler icon-tabler-dots" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#editAnswerModal">
                                    <svg role="button" xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-edit me-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                        </path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                    Edit</a>
                                <a class="dropdown-item" href="#" wire:click.prevent="delete"
                                    wire:confirm="Delete answer?">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-trash me-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                    Delete</a> --}}

                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#reportModal">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="me-2 icon icon-tabler icon-tabler-alert-circle" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                        <path d="M12 8v4"></path>
                                        <path d="M12 16h.01"></path>
                                    </svg>
                                    Report
                                </a>
                            </div>
                        </div>
                        <div class="modal fade" id="reportModal" tabindex="-1" role="dialog"
                            aria-labelledby="reportModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="width: 30%">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reportModalLabel">Report Issue</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Isi modal di sini -->
                                        <textarea name="" id="" cols="50" rows="3" placeholder="Tuliskan sesuatu..."
                                            style="height: 40px"></textarea>
                                        Apakah Anda yakin ingin melaporkan masalah ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Kirim Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments" x-show="open">
                        @include('user.comment.comment-index')
                    </div>
                </div>
                {{-- @if ($from == 'home')
                    <div class="mt-3">
                        <a href="{{ route('question.index', $answer->question->title_slug) }}"
                            class="text-dark"><b>{{ $answer->question->title }}</b></a>
                    </div>
                @endif
                <p class="mt-3" style="font-size: 15px">
                    {{ $answer->answer }}
                </p>
                <div class="mt-3">
                    <small class="text-secondary">{{ $total_views }} views</small>
                </div>
                <div x-show="open">
                    <livewire:user.comments.comment-index :$answer />
                </div> --}}
            </div>
        </div>
        <div class="card mt-2 mb-3">
            <div class="card-body">
                <div class="row" x-data="{ open: false }">
                    <div class="col-1">
                        <span class="avatar rounded-circle" style="color: aquamarine, padding-left:5px">
                            <img class="avatar rounded-circle" src="{{ asset('img/user2.png') }}" alt="">
                        </span>
                    </div>
                    <div class="col-11" style="padding-left:25px">
                        <a class="username no-underline" href="{{ route('user.profile.index') }}">
                            <b>
                                <span style="text-direction: none">Mukhamad Ferry</span>
                            </b>
                        </a>
                        <a class="follow no-underline" href="#" id="follow-btn"
                            style="padding-left: 10px; position: relative;">
                            Follow
                            <span id="loading-icon" style="display: none; margin-left: 5px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader">
                                    <line x1="12" y1="2" x2="12" y2="6"></line>
                                    <line x1="12" y1="18" x2="12" y2="22"></line>
                                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                    <line x1="2" y1="12" x2="6" y2="12"></line>
                                    <line x1="18" y1="12" x2="22" y2="12"></line>
                                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                </svg>
                            </span>
                        </a>
                        <div class="text-secondary">
                            <a class="credential" href="">Mahasiswa Universitas Diponegoro</a>
                            &#8226; <span id="created-at"></span>
                        </div>
                    </div>

                    {{-- untuk photo/caption --}}
                    <div class="mt-3">
                        <p class="caption">Assalamualaikum</p>
                        <a href="#" class="text-dark" data-toggle="modal" data-target="#imageModal">
                            <div class="image-container">
                                <img src="{{ asset('img/test.png') }}" class="img-fluid"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                        aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('img/test.png') }}" class="img-fluid">
                                    <button type="button" class="close-btn" data-dismiss="modal"
                                        aria-label="Close">
                                        &times;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-1">
                        <small class="text-secondary">10 views</small>
                    </div>
                    <div class="mt-2">
                        <button wire:click="votes('up')"
                            class="btn btn-pill btn-outline-secondary active border-secondary">
                            <div wire:loading.remove wire:target="votes('up')">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-big-up" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M9 20v-8h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v8a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                    </path>
                                </svg>
                            </div>

                            &#8226; 5
                            {{-- &#8226; {{ number_format_short($total_upvotes) }} --}}
                        </button>
                        <button wire:click="votes('down')" class="btn btn-pill btn-outline-secondary )  ">
                            <div wire:loading.remove wire:target="votes('up')">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-big-down" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M15 4v8h3.586a1 1 0 0 1 .707 1.707l-6.586 6.586a1 1 0 0 1 -1.414 0l-6.586 -6.586a1 1 0 0 1 .707 -1.707h3.586v-8a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>

                            {{-- &#8226; {{ number_format_short($total_upvotes) }} --}}
                        </button>
                        <button class="btn btn-pill btn-ghost-secondary" @click="open = ! open">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-message-circle" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1">
                                </path>
                            </svg>
                            {{-- {{ number_format_short($total_comments) }} --}}
                        </button>
                        <button class="btn btn-pill btn-ghost-secondary" data-bs-toggle="modal" id="shareButton"
                            data-bs-target="#shareAnswer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M8.7 10.7l6.6 -3.4"></path>
                                <path d="M8.7 13.3l6.6 3.4"></path>
                            </svg>
                            {{-- {{ number_format_short($total_shares) }} --}}
                        </button>
                        @include('share-popup')
                        <div class="float-end">
                            <svg role="button" data-bs-toggle="dropdown" xmlns="http://www.w3.org/2000/svg"
                                class="mt-2 icon icon-tabler icon-tabler-dots" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#editAnswerModal">
                                    <svg role="button" xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-edit me-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                        </path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                    Edit</a>
                                <a class="dropdown-item" href="#" wire:click.prevent="delete"
                                    wire:confirm="Delete answer?">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-trash me-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                    Delete</a>

                                <a class="dropdown-item" href="#">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="me-2 icon icon-tabler icon-tabler-alert-circle" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </button>

                                    Report</a>
                            </div>
                        </div>
                    </div>
                    <div x-show="open">
                        @include('user.comment.comment-index')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>
<script>
    // Manual setting of the date for demonstration
    var createdAt = new Date('2023-12-29T12:00:00Z');

    // Function to format date to "29 Des"
    function formatDate(date) {
        var options = {
            day: 'numeric',
            month: 'short'
        };
        return date.toLocaleDateString('id-ID', options);
    }

    // Set the formatted date to the span
    document.getElementById('created-at').textContent = formatDate(createdAt);
</script>
<script src="{{ asset('js/follow.js') }}"></script>
