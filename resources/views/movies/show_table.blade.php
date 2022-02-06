<!-- Hover Table -->
<div class="block block-rounded block-bordered mt-4">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{$movie->name}}'s Schedule</h3>
        <div class="block-options">
            <div class="block-options-item">
            </div>
        </div>
    </div>
    <div class="block-content">
        <table class="table table-hover table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th class="d-none d-sm-table-cell" style="width: 25%;">Theatre</th>
                <th class="d-none d-sm-table-cell" style="width: 25%;">Hall</th>
                <th class="d-none d-sm-table-cell" style="width: 25%;">Show Time</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($movieSchedule as $schedule)
                <tr>
                    <th class="text-center" scope="row">{{$i++}}</th>
                    <td class="font-w600">
                        <a href="#">{{$schedule->hall->theatre->name}}</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{$schedule->hall->name}}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{$schedule->showdate->format('d M Y')}} | {{$schedule->showtime}}
                    </td>
                    <td class="text-center">
                        <form method="post" action="{{route('schedule.destroy', $schedule->id)}}">
                            @csrf
                            @method('delete')
                        <div class="btn-group">
                            <a class="btn btn-sm btn-primary" href="{{route('schedule.edit', $schedule->id)}}" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END Hover Table -->
