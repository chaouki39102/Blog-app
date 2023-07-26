@extends('front.layout.app')

@section('content')
    <div class="ud-blog-grids">
        <div class="container">
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        @include('front.posts.components.post-item', ['post' => $post])
                    </div>
                @empty
                    <p>{{ __('There are no posts yet.') }} </p>
                @endforelse
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
