@extends('front.layout.app')

@section('content')
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-blog-details-image">
                        <img src="{{ getFile($post->image_cover) }}" alt="{{ $post->title }}" />
                        <div class="ud-blog-overlay">
                            <div class="ud-blog-overlay-content">

                                <div class="ud-blog-author">
                                    <img src="{{ getFile($post->createdBy->avatar) }}" alt="{{ $post->createdBy->name }}" />
                                    <span>
                                        {{ __('By') }} <a href="javascript:void(0)"> {{ $post->createdBy->name }} </a>
                                    </span>
                                </div>
                                <div class="ud-blog-author">
                                    <span>
                                        <i class="lni lni-tag"></i>
                                        <a href="{{ route('posts.index', ['category_id' => $post->category_id]) }}">
                                            {{ $post->category->name }} </a>
                                    </span>
                                </div>
                                <div class="ud-blog-meta">
                                    <p class="date">
                                        <i class="lni lni-calendar"></i>
                                        <span>{{ $post->created_at->format('d M Y') }}</span>
                                    </p>
                                    <p class="comment">
                                        <i class="lni lni-comments"></i> <span>{{ $post->comments_count }} </span>
                                    </p>
                                    <p class="view">
                                        <i class="lni lni-eye"></i> <span>{{ $post->views_count }} </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="ud-blog-details-content">
                        <h2 class="ud-blog-details-title"> {{ $post->title }} </h2>
                        <p class="ud-blog-details-para">{{ $post->description }} </p>


                        <div class="ud-blog-details-action">
                            <ul class="ud-blog-tags">
                                @foreach (explode('-', $post->seo_keywords) as $keyWord)
                                    <li>
                                        <a href="{{ route('posts.index', ['q' => $keyWord]) }}">{{ $keyWord }} </a>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="ud-blog-share">
                                <h6>{{ __('Share this post') }} </h6>
                                @include('front.posts.components.share-social-network', [
                                    'url' => request()->fullUrl(),
                                    'text' => $post->title,
                                ])
                            </div>
                        </div>
                    </div>
                    @livewire('comments', ['post' => $post])
                </div>
                <div class="col-lg-4">
                    <div class="ud-blog-sidebar">
                        <div class="ud-newsletter-box">
                            <img src="{{ getFile('assets/images/blog/dotted-shape.svg') }}" alt="shape"
                                class="shape shape-1" />
                            <img src="{{ getFile('assets/images/blog/dotted-shape.svg') }}" alt="shape"
                                class="shape shape-2" />
                            <h3 class="ud-newsletter-title">Join our newsletter!</h3>
                            <p>Enter your email to receive our latest newsletter.</p>
                            <form class="ud-newsletter-form">
                                <input type="email" name="email" placeholder="Your Email address" />
                                <button class="ud-main-btn">Subscribe Now</button>
                                <p class="ud-newsletter-note">Don't worry, we don't spam</p>
                            </form>
                        </div>

                        <div class="ud-articles-box">
                            <h3 class="ud-articles-box-title">Popular Articles</h3>

                            <ul class="ud-articles-list">
                                <li>
                                    <div class="ud-article-image">
                                        <img src="{{ getFile('assets/images/blog/article-author-01.png') }}"
                                            alt="author" />
                                    </div>
                                    <div class="ud-article-content">
                                        <h5 class="ud-article-title">
                                            <a href="javascript:void(0)">
                                                The 8 best landing page builders, reviewed
                                            </a>
                                        </h5>
                                        <p class="ud-article-author">Martin Fedous</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ud-article-image">
                                        <img src="{{ getFile('assets/images/blog/article-author-02.png') }}"
                                            alt="author" />
                                    </div>
                                    <div class="ud-article-content">
                                        <h5 class="ud-article-title">
                                            <a href="javascript:void(0)">
                                                Create engaging online courses your student…
                                            </a>
                                        </h5>
                                        <p class="ud-article-author">Glomiya Lucy</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ud-article-image">
                                        <img src="{{ getFile('assets/images/blog/article-author-03.png') }}"
                                            alt="author" />
                                    </div>
                                    <div class="ud-article-content">
                                        <h5 class="ud-article-title">
                                            <a href="javascript:void(0)">
                                                The ultimate formula for launching online course
                                            </a>
                                        </h5>
                                        <p class="ud-article-author">Andrio jeson</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ud-article-image">
                                        <img src="{{ getFile('assets/images/blog/article-author-04.png') }}"
                                            alt="author" />
                                    </div>
                                    <div class="ud-article-content">
                                        <h5 class="ud-article-title">
                                            <a href="javascript:void(0)">
                                                50 Best web design tips & tricks that will help you
                                            </a>
                                        </h5>
                                        <p class="ud-article-author">Samoyel Dayno</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Details End ====== -->
    <section class="ud-blog-grids ud-related-articles">
        <div class="container">
            <div class="row col-lg-12">
                <div class="ud-related-title">
                    <h2 class="ud-related-articles-title">Related Articles</h2>
                </div>
            </div>
            <div class="row">
                @forelse ($reletedPosts as $reletedpost)
                    <div class="col-lg-4 col-md-6">
                        @include('front.posts.components.post-item', ['post' => $reletedpost])
                    </div>
                @empty
                    <p>{{ __('There are no posts yet.') }} </p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
