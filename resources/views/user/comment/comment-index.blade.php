{{-- <div>
    <hr class="mt-3 mb-3">
        <livewire:user.comments.comment-create :answer-id="$answer->id" :commentModel="null" :parentId="null" :showProfile="true" :isEditing="false"/>
    <hr class="mt-3 mb-2">
    <div>
        @if($comments->count() > 0)
            @foreach($comments as $comment)
                <livewire:user.comments.comment-item wire:key="{{ $comment->id }}" :comment="$comment" />
            @endforeach
        @endif
    </div>
</div> --}}
<link rel="stylesheet" href="{{ asset('assets/css/comment.css') }}">
	<div class="comments-container">
		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<div class="comment-avatar rounded-circle"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href="#">Agustin Ortiz</a></h6>
							<span>20 min ago</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
                            ohh semoga berhasil ya exponyaa, semangatt
                        </div>
					</div>
				</div>
				<ul class="comments-list reply-list">
					<li>
						<div class="comment-avatar rounded-circle"><img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt=""></div>
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="#">Imam Nuralim</a></h6>
								<span>10 min ago</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
                                mangeak
                            </div>
						</div>
					</li>
					<li>
						<div class="comment-avatar rounded-circle"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name"><a href="#">Agustin Ortiz</a></h6>
								<span>10 min ago</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
                                yee iyalah
                            </div>
						</div>
					</li>
				</ul>
			</li>
			<li>
				<div class="comment-main-level">
					<div class="comment-avatar rounded-circle"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href="#">Muhammad Fadil</a></h6>
							<span>10 min ago</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
                            Masya allah
                        </div>
					</div>
				</div>
			</li>
		</ul>
	</div>
