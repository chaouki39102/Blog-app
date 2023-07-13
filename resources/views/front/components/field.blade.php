@isset($type)
    @switch($type)
        @case('select')
            <select name="{{ $name ?? '' }}" id="{{ $id ?? '' }}" placeholder="{{ $placeholder ?? '' }}">
                @foreach ($options ?? [] as $id => $text )
                <option value="{{ $id }}">{{$text}}</option>
                    
                @endforeach

            </select>
        @break

        @case('textarea')
            <textarea name="{{ $name ?? '' }}" id="{{ $id ?? '' }}" placeholder="{{ $placeholder ?? '' }}" cols="30"
                rows="10"></textarea>
        @break

        @default
            <div class="ud-form-group {{ $class ?? 'col-md-6' }}">
                <input type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
                    placeholder="{{ $placeholder ?? '' }}" />
            </div>
    @endswitch
@endisset
