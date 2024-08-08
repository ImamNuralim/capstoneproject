@extends('partials.navbar')
@section('profile')
    <div>
        <div class="mt-4">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">
                            <span src="" >
                                <img class="avatar avatar-xl rounded-circle" src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="">
                            </span>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12">
                                    <b style="font-size: 27px">
                                        <p>Imam Nuralim</p>
                                    </b>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">Edit profile</a>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-secondary">
                                    Following
                                </h4>
                            </div>

                            <div>

                                <button class="btn btn-pill btn-primary btn-sm" wire:click="follow">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="me-1 icon icon-tabler icon-tabler-user-plus" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                    Follow
                                </button>

                                <button class="btn btn-pill btn-primary btn-sm" wire:click="unfollow">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="me-1 icon icon-tabler icon-tabler-user-plus" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                    Following
                                </button>

                            </div>

                        </div>
                    </div>
                    <div class="mt-3 ms-1">
                        <a href="" class="text-secondary" data-bs-toggle="modal" data-bs-target="#profileModal">Write
                            a description about yourself</a>
                    </div>
                    <div class="mt-4">
                        <div class="row text-center">
                            <div class="col-3">
                                <a href="" class="text-danger text-secondary"
                                    wire:click.prevent="showAnswers">Answers</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="text-danger text-secondary"
                                    wire:click.prevent="showQuestions">Questions</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="text-danger text-secondary"
                                    wire:click.prevent="showFollowers">Followers</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="text-danger text-secondary"
                                    wire:click.prevent="showFollowing">Following</a>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3 mb-3">
                    <div>
                        <div>
                            <a href="#" class="text-dark"><b></b></a>
                        </div>
                        <div class="mt-1">

                        </div>
                        <hr class="mt-3 mb-3">
                    </div>

                    <div class="text-center">
                        No answers
                    </div>


                    <div>
                        <div>
                            <a href="#" class="text-dark"><b></b></a>
                        </div>
                        <hr class="mt-3 mb-3">
                    </div>

                    <div class="text-center">
                        No questions
                    </div>


                    <a href="">
                        <div class="row">
                            <div class="col-1">
                                <span class="avatar avatar-sm rounded-circle"></span>
                            </div>
                            <div class="col-11 mt-1">
                                <span class="text-dark"></span>
                            </div>
                        </div>
                    </a>
                    <hr class="mt-3 mb-3">

                    <div class="text-center">
                        No followers
                    </div>


                    <a href="">
                        <div class="row">
                            <div class="col-1">
                                <span class="avatar avatar-sm rounded-circle""></span>
                            </div>
                            <div class="col-11 mt-1">
                                <span class="text-dark"></span>
                            </div>
                        </div>
                    </a>
                    <hr class="mt-3 mb-3">

                    <div class="text-center">
                        No following
                    </div>

                </div>
                <div class="col-2">

                </div>
                <div class="col-4">
                    <div>
                        Credentials & Highlights
                        <span class="float-end">
                            <a href="" data-bs-target="#profileModal"></a>
                            <svg role="button" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                            </svg>
                        </span>

                        <hr class="mt-3 mb-3">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-briefcase"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                </path>
                                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                <path d="M12 12l0 .01"></path>
                                <path d="M3 13a20 20 0 0 0 18 0"></path>
                            </svg>
                            <a href="" data-bs-toggle="modal" data-bs-target="#employmentModal">Add employment
                                credential</a>
                            <a href="" class="text-dark" data-bs-toggle="modal"
                                data-bs-target="#employmentModal">
                                <small class="text-secondary"></small>
                            </a>
                            <small class="text-secondary"></small>
                        </div>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-school"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                            </svg>
                            <a href="" data-bs-toggle="modal" data-bs-target="#educationModal">Add education
                                credential</a>
                            <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#educationModal">
                                <small class="text-secondary"></small>
                            </a>
                            <small class="text-secondary"></small>
                        </div>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-map-pin"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                </path>
                            </svg>
                            <a href="" data-bs-toggle="modal" data-bs-target="#locationModal">Add location
                                credential</a>
                            <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#locationModal">
                                <small class="text-secondary"></small>
                            </a>
                            <small class="text-secondary"></small>
                        </div>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                </path>
                                <path d="M16 3v4"></path>
                                <path d="M8 3v4"></path>
                                <path d="M4 11h16"></path>
                                <path d="M11 15h1"></path>
                                <path d="M12 15v3"></path>
                            </svg>
                            Joined
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="profileModal" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form wire:submit="updateProfile">
                        <div class="modal-header">
                            <b>Edit profile</b>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-2">
                                    <span class="avatar avatar-lg rounded-circle"></span>
                                    <span class="avatar avatar-lg rounded-circle"></span>
                                </div>
                                <div class="col-10">
                                    <label class="form-label">
                                        <div wire:loading wire:target="image">
                                            <span class="spinner-border spinner-border-sm me-1" role="status"></span>
                                        </div>
                                        Image
                                    </label>
                                    <input type="file" class="form-control" wire:model="image">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <label class="form-label required mt-3">Username</label>
                            <input type="text" class="form-control" wire:model="username" />
                            <div class="invalid-feedback">
                            </div>
                            <label class="form-label mt-3">Credential</label>
                            <input type="text" class="form-control" wire:model="credential" />
                            <div class="invalid-feedback">
                            </div>
                            <label class="form-label mt-3">Description</label>
                            <input type="text" class="form-control" wire:model="description" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-ghost-secondary btn-pill"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-pill" wire:loading.attr="disabled"
                                wire:target="image">
                                <div wire:loading wire:target="updateProfile">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                </div>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
