<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
    <thead>
    <tr>
        <th class="text-center" style="width: 50px;">#</th>
        <th style="width: 60px;">Movie</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Hall</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Price</th>
        <th class="d-none d-sm-table-cell" style="width: 20%;">Show Time</th>
        <th style="width: 15%;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($schedules as $schedule)
        <tr>
            <td class="text-centers">{{$schedule->id}}</td>
            <td class="font-w600">
                <a href="{{route('movies.show', $schedule->movie_id)}}s">{{$schedule->movie->name}}</a>
            </td>
            <td class="d-none d-sm-table-cell">
                {{$schedule->hall->name}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$schedule->price}}
            </td>
            <td class="d-none d-sm-table-cell">
                {{$schedule->showdate->format('d M Y')}} | {{$schedule->showtime}}
            </td>
            <td>
                <form method="post" action="{{route('schedule.destroy', $schedule->id)}}">
                    @csrf
                    @method('delete')
                    <div>
                        <a class="btn btn-sm btn-success" href="{{route('schedule.edit', $schedule->id)}}"><i
                                class="fa fa-pen"></i></a>
                        <a class="btn btn-sm btn-light" href="{{route('schedule.show', $schedule->id)}}"><i
                                class="fa fa-eye"></i></a>
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
