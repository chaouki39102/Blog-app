
@foreach ($sectionLinks as $Section )
    
    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
        <div class="ud-widget">
            <h5 class="ud-widget-title">{{$Section->title}}</h5>
            <ul class="ud-widget-links">
                @foreach ($Section->menuLinks as $item)
                <li>
                    <a href="{{ $item->url}}">{{ $item->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
