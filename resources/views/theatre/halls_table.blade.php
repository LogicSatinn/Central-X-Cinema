<!-- Hover Table -->
<div class="block block-rounded block-bordered">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ $theatre->name }}s' Halls</h3>
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
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Experience</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Number of Seats</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($theatre->halls as $halls)
                <tr>
                    <th class="text-center" scope="row">{{ $i++ }}</th>
                    <td class="font-w600">
                       {{$halls->name}}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{ $halls->experience }}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{ $halls->no_of_seats }}
                    </td>
                    <td class="text-center">
                        <form method="post" action="{{route('hall.destroy', $halls->id)}}">
                            @csrf
                            @method('delete')
                        <div class="btn-group">
                            <a href="{{ route('hall.edit', $halls->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END Hover Table -->
