<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
    <thead>
    <tr>
        <th class="text-center" style="width: 50px;">#</th>
        <th style="width: 60px;">Name</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Release Date</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Movie Runtime</th>
        <th style="width: 15%;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($movies as $movie)
        <tr>
            <td class="text-center">{{$movie->id}}</td>
            <td class="font-w600">
                <a href="{{route('movies.show', $movie->id)}}">{{$movie->name}}</a>
            </td>
            <td class="d-none d-sm-table-cell">
                {{($movie->release_date)->format('d M, Y')}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$movie->runtime}}
            </td>
            <td>
                <form method="post" action="{{route('movies.destroy', $movie->id)}}">
                    @csrf
                    @method('delete')
                    <div>
                        <a class="btn btn-sm btn-success" href="{{route('movies.edit', $movie->id)}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-sm btn-light" href="{{route('movies.show', $movie->id)}}"><i class="fa fa-eye"></i></a>
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
