<div class="text-start ud-form-group {{ $class ?? 'col-md-6' }}">
    @isset($type)
        @switch($type)
            @case('select')
                <select class="ud-form-select form-select " name="{{ $name ?? '' }}" id="{{ $id ?? ($name ??'') }}"
                    placeholder="{{ $placeholder ?? '' }}">
                    @foreach ($options ?? [] as $id => $text)
                        <option value="{{ $id }}">{{ $text }}</option>
                    @endforeach
                </select>
            @break

            @case('textarea')
                <textarea class="ud-form-textarea {{($errors->first('name') ? " border-danger" : "")}}" name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}"
                    placeholder="{{ $placeholder ?? '' }}" cols="30" rows="5"></textarea>
            @break

            @default
                <input class="{{($errors->first('name') ? " border-danger" : "")}}" type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}"
                    placeholder="{{ $placeholder ?? '' }}" />
        @endswitch
    @endisset
    @isset($name)
        @error($name)
            <span class=" text-danger"> {{$message}} </span>
        @enderror
    @endisset
</div>
