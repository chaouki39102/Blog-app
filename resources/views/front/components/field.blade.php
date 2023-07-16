<div class="text-start ud-form-group @error($name) is-invalid @enderror {{ $class ?? 'col-md-6' }}">
    @isset($type)
        @switch($type)
            @case('select')
                <select class="ud-form-select form-select " name="{{ $name ?? '' }}" id="{{ $id ?? ($name ??'') }}"
                    placeholder="{{ $placeholder ?? '' }}">
                    <option value="">{{__('choose an item') }}</option>
                    @foreach ($options ?? [] as $id => $text)
                        <option value="{{ $id }}" @selected(old($name) == $id ) > {{ $text }}</option>
                    @endforeach
                </select>
            @break

            @case('textarea')
                <textarea class="ud-form-textarea " name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}"
                    placeholder="{{ $placeholder ?? '' }}" cols="30" rows="5"> {{ old($name)}} </textarea>
            @break

            @default
                <input  type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" id="{{ $id ?? ($name ?? '') }}"
                    placeholder="{{ $placeholder ?? '' }}" value="{{ old($name)}}" />
        @endswitch
    @endisset
    @isset($name)
        @error($name)
            <span class=" text-danger"> {{$message}} </span>
        @enderror
    @endisset
</div>
