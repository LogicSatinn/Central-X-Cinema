<!-- table -->
<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
    <thead>
    <tr>
        <th class="text-center" style="width: 50px;">#</th>
        <th style="width: 30px;">Name</th>
        <th style="width: 30%;">Added On</th>
        <th style="width: 15%;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($genre as $genres)
        <tr>
            <td class="text-center">{{$genres->id}}</td>
            <td class="font-w600">
                <a href="{{route('movies.show', $genres->id)}}">{{$genres->name}}</a>
            </td>
            <td class="d-none d-sm-table-cell">
                {{($genres->created_at)->format('d M, Y')}}
            </td>
            <td>
                <form method="post" action="{{route('genre.destroy', $genres->id)}}">
                    @csrf
                    @method('delete')
                    <div>
                        <a class="btn btn-sm btn-success" href="{{route('genre.edit', $genres->id)}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-sm btn-light" href="{{route('genre.show', $genres->id)}}"><i class="fa fa-eye"></i></a>
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
