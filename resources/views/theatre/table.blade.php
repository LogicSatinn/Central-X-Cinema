<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
    <thead>
    <tr>
        <th class="text-center" style="width: 50px;">#</th>
        <th style="width: 60px;">Name</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Location</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Region</th>
        <th style="width: 15%;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($theatres as $theatre)
        <tr>
            <td class="text-center">{{$theatre->id}}</td>
            <td class="font-w600">
                <a href="{{route('theatre.show', $theatre->id)}}">{{$theatre->name}}</a>
            </td>
            <td class="d-none d-sm-table-cell">
                {{$theatre->location}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$theatre->region}}
            </td>
            <td>
                <form method="post" action="{{route('theatre.destroy', $theatre->id)}}">
                    @csrf
                    @method('delete')
                    <div>
                        <a class="btn btn-sm btn-success" href="{{route('theatre.edit', $theatre->id)}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-sm btn-light" href="{{route('theatre.show', $theatre->id)}}"><i class="fa fa-eye"></i></a>
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
