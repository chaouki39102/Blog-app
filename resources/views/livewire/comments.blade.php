<section class="ud-blog-grids ud-related-comments">
    <div class="container">
        <div class="row col-lg-12">
            <div class="ud-related-title">
                <h2 class="ud-related-comments-title">{{ __('Comments') }}({{ $this->commentCount }}) </h2>
            </div>
        </div>

        <div class="ud-comments-box">
            <ul class="ud-comments-list">
                @forelse ($comments as $comment)
                    <li>
                        <div class="ud-comment-image">
                            <img src="{{ getFile( $comment->user->avatar) }}" alt="author" />
                        </div>
                        <div class="ud-comment-content">
                            <h5 class=" ud-comment-author">
                                <a href="javascript:void(0)">
                                    {{ $comment->user->name}}
                                </a>
                            </h5>
                            <p class="ud-comment-title">{{ $comment->comment}} </p>
                            <p class="ud-comment-time">{{ $comment->created_at->diffForHumans()}}</p>
                        </div>
                        <div>
                        </div>
                    </li>
                @empty
                    <p>{{ __('There are no comments yet.') }} </p>
                @endforelse
            </ul>
        </div>
        @auth

            <form wire:submit.prevent="save">
                <div class="row mt-4">
                    @include('front.components.field', [
                        'type' => 'textarea',
                        'name' => 'comment',
                        'class' => 'col-md-12',
                    ])
                </div>
                <button type="submit" class="ud-main-btn ud-main-btn-sm ud-white-btn mt-2" href="#">
                    {{ __('Submit') }}
                </button>
            </form>
        @endauth
        @guest
            <div class="alert alert-warning">
                <p>{{ __('You must be login to comment.') }} </p>
            </div>
        @endguest
    </div>
</section>
