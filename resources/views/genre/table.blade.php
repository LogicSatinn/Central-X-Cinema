<!-- table -->
<table class="table datatables" id="dataTable-1">
    <thead>
    <tr>
        <th></th>
        <th>#</th>
        <th>Name</th>
        <th>Added On</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($genre as $genres)
        <tr>
            <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <label class="custom-control-label"></label>
                </div>
            </td>
            <td>{{$genres->id}}</td>
            <td>{{$genres->name}}</td>
            <td>{{($genres->created_at)->format('d M, Y')}}</td>
            <td>
                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                </button>
                <form method="post" action="{{route('genre.destroy', $genres->id)}}">
                    @csrf
                    @method('delete')
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{route('genre.edit', $genres->id)}}">Edit</a>
                        <button class="dropdown-item" type="submit">Remove</button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
