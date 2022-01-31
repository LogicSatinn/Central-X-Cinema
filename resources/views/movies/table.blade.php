<!-- table -->
<table class="table datatables" id="dataTable-1">
    <thead>
    <tr>
        <th></th>
        <th>No:</th>
        <th>Name</th>
        <th>Release Date</th>
        <th>Movie Runtime</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <label class="custom-control-label"></label>
                </div>
            </td>
            <td>{{$movie->id}}</td>
            <td>{{$movie->name}}</td>
            <td>{{($movie->release_date)->format('d M, Y')}}</td>
            <td> {{$movie->runtime}}</td>
            <td>
                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                </button>
                <form method="post" action="{{route('movies.destroy', $movie->id)}}">
                    @csrf
                    @method('delete')
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{route('movies.edit', $movie->id)}}">Edit</a>
                        <a class="dropdown-item" href="{{route('movies.show', $movie->id)}}">View</a>
                        <button class="dropdown-item" type="submit">Remove</button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
