@extends('partials.navbar')

@section('notifikasi')
    <div class="container notifications-container shadow">
        <div class="row header">
            <div class="col-7">
                <p class="title">
                    Notifications
                    <span class="unread-notifications-number">3</span>
                </p>
            </div>
            <div class="col-5 mark-as-read text-end">
                <a href="#" id="markAllAsRead" class="mark-as-read-button align-middle">Mark all as read</a>
            </div>
        </div>
        <div class="row notifications">
            <div class="col-12">

                <div class="row single-notification-box unread">
                    <div class="col-1 profile-picture">
                        <img src="./assets/images/avatar-mark-webber.webp" alt="profile picture" class="img-fluid">
                    </div>
                    <div class="col-11 notification-text">
                        <p>
                            <a href="#" class="link name">Mark Webber</a>
                            <span class="description">reacted to your recent post</span>
                            <a class="link" href="http://">My first tournament today!</a>
                            <span class="unread-symbol">•</span>
                        </p>
                        <p class="time">1m ago</p>
                    </div>
                </div>
                <div class="row single-notification-box read">
                    <div class="col-1 profile-picture">
                        <img src="./assets/images/avatar-nathan-peterson.webp" alt="profile picture" class="img-fluid">
                    </div>
                    <div class="col-11 notification-text">
                        <p>
                            <a href="#" class="link name">Nathan Petersa</a>
                            <span class="description">reacted to your recent post</span>
                            <a class="link" href="http://">5 end-game strategies to increase your win rate</a>
                            <span class="unread-symbol">•</span>
                        </p>
                        <p class="time">2 weeks ago</p>
                    </div>
                </div>

                <div class="row single-notification-box read">
                    <div class="col-1 profile-picture">
                        <img src="./assets/images/avatar-anna-kim.webp" alt="profile picture" class="img-fluid">
                    </div>
                    <div class="col-11 notification-text">
                        <p>
                            <a href="#" class="link name">Anna Kim</a>
                            <span class="description">left the group</span>
                            <a class="link" href="http://">Chess Club</a>
                            <span class="unread-symbol">•</span>
                        </p>
                        <p class="time">2 weeks ago</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
