<form ref="btn_form_submit" id="form_submit" action="{{ isset($data) ? URL::to('admin/' .$action.'/'.$data->id) : URL::to('admin/' . $action) }}" method="{{ $method }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input id="id" type="hidden" name="id_s" value="{{ isset($data) ? $data->id : '' }}" >
    @foreach ($inputNames as $index => $inputName)
    <label class='mb-2 mt-4' for="{{ $inputName }}">{{ $TitleNames[$index] }}</label>
        @if ($inputTypes && $inputTypes[$index] === 'textarea')
            <textarea class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}" id="editor">{{ isset($data) ? $data->$inputName : old($inputName) }}</textarea>
        @elseif ($inputTypes && $inputTypes[$index] === 'select')
            <select class="form-control" name="{{ $inputName }}" id="{{ $inputName }}">
                @php
                    $uniqueCategories = [];
                @endphp

                @foreach ($product as $category)
                    @if ($category->getCate() && !in_array($category->getCate()->id, $uniqueCategories))
                        <option value="{{ $category->getCate()->id }}" {{ isset($category) && $category->getCate()->id == $category->id ? 'selected' : '' }}>
                            {{ $category->getCate()->name }}
                        </option>
                        @php
                            $uniqueCategories[] = $category->getCate()->id;
                        @endphp
                    @endif
                @endforeach
            </select>

        @elseif ($inputTypes && $inputTypes[$index] === 'file')
            <div class="row">
                <div class="col-4">
                    <input ref="{{ $inputName }}" style="padding: 0px ; line-height: 31px;" type="file" name="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
                </div>
                
                <div class="col-6" id="image-preview" data-width = "{{ empty($width) ? '200px' : $width }}" data-height = "{{ empty($height) ? '200px' : $height }}">

                </div>
            </div>
            
        @else
            <input ref="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" type="{{ $inputTypes ? $inputTypes[$index] : 'text' }}" name="{{ $inputName }}" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
            
        @endif
            @error($inputName)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    @endforeach

    @if (count($inputNames) == 1 && $inputNames[0] === 'content')
        <label class='mb-2' for="{{ $inputNames[0] }}">{{ $TitleNames[0] }}</label>
        <textarea class="form-control" name="{{ $inputNames[0] }}" id="editor">{{ old($inputNames[0]) }}</textarea>
        @if(isset($data) && isset($data->dulieu))
            <input type="hidden" name="trường" value="{{ $data->dulieu }}">
        @endif
    @endif

    <button class="btn btn-danger mt-4 mb-3" type="submit">{{ $buttonText }}</button>
</form>