<!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
<div class="block block-rounded block-bordered">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ $theatre->name }}s' Schedule</h3>
        <div class="block-options">
            <div class="block-options-item">
            </div>
        </div>
    </div>
    <div class="block-content">
        <table class="js-table-sections table table-hover table-vcenter">
            <thead>
                <tr>
                    <th style="width: 30px;"></th>
                    <th>Hall</th>
                    <th style="width: 15%;">Price</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Show Time</th>
                </tr>
            </thead>
            @foreach ($theatre->halls as $halls)
            <tbody class="js-table-sections-header show table-active">
                <tr>
                    <td class="text-center">
                        <i class="fa fa-angle-right text-muted"></i>
                    </td>
                    <td class="font-w600">
                        <div class="py-1">
                            {{ $halls->name }}</a>
                        </div>
                    </td>
                    <td>

                    </td>
                    <td class="d-none d-sm-table-cell">
                        <em class="text-muted"></em>
                    </td>
                </tr>
            </tbody>
            <tbody class="font-size-sm">
                @foreach ($halls->schedule as $schedule)
                <tr>
                    <td class="text-center"></td>
                    <td class="font-w600">
                        <a href="{{ route('movies.index', $schedule->movie->id) }}">{{ $schedule->movie->name }}</a>
                        </td>
                    <td>
                      Tsh  {{ number_format($schedule->price) }}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <em class="text-muted">{{ $schedule->showdate->format('d M Y') }} {{ $schedule->showtime }}</em>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endforeach
        </table>
    </div>
</div>
<!-- END Table Sections -->
