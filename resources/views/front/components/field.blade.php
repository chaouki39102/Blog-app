@isset($type)
    @switch($type)
        @case('select')
        Select input
        @break
        @default
            <div class="ud-form-group">
                <input type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
                    placeholder="{{ $placeholder ?? '' }}" />
            </div>
    @endswitch
@endisset
