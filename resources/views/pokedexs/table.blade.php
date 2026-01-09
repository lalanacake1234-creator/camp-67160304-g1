<h1>Pokedex Lists</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>species</th>
            <th>height</th>
            <th>weight</th>
            <th>hp</th>
            <th>attack</th>
            <th>defense</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pokedex as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->species }}</td>
            <td>{{ $item->height }}</td>
            <td>{{ $item->weight }}</td>
            <td>{{ $item->hp }}</td>
            <td>{{ $item->attack }}</td>
            <td>{{ $item->defense }}</td>
            <td><img src="{{ $item->image_url }}" width="50"></td>
            <td>
                <a class="btn btn-warning" href="{{ url('/pokedex/' . $item->id . '/edit') }}">
                    แก้ไข
                </a>
                <form style="display:inline-block" action="{{ url('/pokedex/' . $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
