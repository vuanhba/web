<table class="table">
    <thead>
        <tr>
            <td><input style="position: relative;" class="form-check-input" id="all" v-model="isChecked" @change="checkAll" type="checkbox"></td>
            <td>#</td>
            @foreach ($nameTitle as $lableName)
            <td>{{ $lableName }}</td>
            @endforeach
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $index => $product)
        <tr>
            <td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="{{ $product->id }}" ref="{{ $product->id }}" ></td>
            <td>{{ $index + 1 }}</td>
            @foreach ($list as $title)
                @if($title === 'image')
                    <td><img width="200px" height="200px" src="{{ asset($product->image) }}" alt="Your Image"></td>
                @else
                    <td>{!! $product->{$title} !!}</td>
                @endif
            @endforeach
            <td><a href="{{ URL::to('admin/' . "$url/$product->id") }}" class="btn btn-danger">Sửa</a></td>
            <td>
                <form action="{{ URL::to('admin/' ."$url_delete/$product->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

