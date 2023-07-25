    <div class="ud-single-blog">
        <div class="ud-blog-image">
            <a href="{{route('posts.show',$post->slug)}}">
                <img src="{{getFile($post->image_thumbnail)}}" alt="{{$post->title}}">
            </a>
        </div>
        <div class="ud-blog-content">
            <span class="ud-blog-date">{{$post->created_at->format('M d,Y')}}</span>
            <h3 class="ud-blog-title">
                <a href="{{route('posts.show',$post->slug)}}">
                    {{$post->title}}
                </a>
            </h3>
            <p class="ud-blog-desc">
                {{Str::limit($post->description, 75, '...') }}
            </p>
        </div>
    </div>
