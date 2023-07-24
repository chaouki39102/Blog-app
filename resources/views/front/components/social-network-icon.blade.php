@foreach ($socialNetwork as $item)
    <li>
        <a href="{{ setting($item) }}">
            <i class="lni lni-{{ $item }}-original"></i>
        </a>
    </li>
@endforeach

