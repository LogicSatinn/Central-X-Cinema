<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
    <thead>
    <tr>
        <th class="text-center" style="width: 50px;">#</th>
        <th style="width: 60px;">Name</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Quality</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Theatre</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">No of Seats</th>
        <th style="width: 15%;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($halls as $hall)
        <tr>
            <td class="text-center">{{$hall->id}}</td>
            <td class="font-w600">
                <a href="{{route('hall.show', $hall->id)}}">{{$hall->name}}</a>
            </td>
            <td class="d-none d-sm-table-cell">
                {{$hall->experience}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$hall->theatre->name}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$hall->no_of_seats}}
            </td>
            <td>
                <form method="post" action="{{route('hall.destroy', $hall->id)}}">
                    @csrf
                    @method('delete')
                    <div>
                        <a class="btn btn-sm btn-success" href="{{route('hall.edit', $hall->id)}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-sm btn-light" href="{{route('hall.show', $hall->id)}}"><i class="fa fa-eye"></i></a>
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
