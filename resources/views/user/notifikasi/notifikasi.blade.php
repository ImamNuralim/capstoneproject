@extends('partials.navbar')

@section('notifikasi')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-8 content card-post col-11 ">
            <div class="container notifications-container shadow">
                <div class="row header">
                    <div class="col-7">
                        <p class="title">
                            Notifikasi
                            <span class="unread-notifications-number">3</span>
                        </p>
                    </div>
                    <div class="col-5 mark-as-read text-end">
                        <a href="#" id="markAllAsRead" class="mark-as-read-button align-middle">Tandai dibaca</a>
                    </div>
                </div>
                <div class="row notifications">
                    <div class="col-12">
                        <div class="row single-notification-box unread">
                            <div class="col-1 profile-picture">
                                <img class="rounded-circle" src="{{ asset('img/user3.jpg') }}" alt="profile picture" >
                            </div>
                            <div class="col-11 notification-text">
                                <p>
                                    <a href="#" class="link name">Mukhamad Ferry</a>
                                    <span class="description"> Menyukai Postingan Anda</span>
                                    <a class="link" href="http://">Haloo</a>
                                    <span class="unread-symbol">•</span>
                                </p>
                                <p class="time">1 menit yang lalu</p>
                            </div>
                        </div>
                        <div class="row single-notification-box read">
                            <div class="col-1 profile-picture">
                                <img class="rounded-circle" src="{{ asset('img/user4.jpg') }}" alt="profile picture" >
                            </div>
                            <div class="col-11 notification-text">
                                <p>
                                    <a href="#" class="link name">Imam Nuralim</a>
                                    <span class="description">Menyukai Balasan Anda</span>
                                    <a class="link" href="http://">Wah.. Keren..</a>
                                    <span class="unread-symbol">•</span>
                                </p>
                                <p class="time">2 minggu yang lalu</p>
                            </div>
                        </div>

                        <div class="row single-notification-box read">
                            <div class="col-1 profile-picture">
                                <img class="rounded-circle" src="{{ asset('img/user5.jpg') }}" alt="profile picture" >
                            </div>
                            <div class="col-11 notification-text">
                                <p>
                                    <a href="#" class="link name">Muhammad Fadhil</a>
                                    <span class="description">Mengikuti Anda</span>
                                    <a class="link" href="http://"></a>
                                    <span class="unread-symbol">•</span>
                                </p>
                                <p class="time">1 Jam yang lalu</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
