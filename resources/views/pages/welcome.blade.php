@extends ( "layouts.app" )

@section ( "title-page" )
    Laravel Migration Seeder
@endsection

@section ( "content" )


<div class="row">
    @foreach ($trains as $elem)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $elem->company }}</h4>
                    <div class="row">
                        <div class="col-6">
                            <span>{{ $elem->departure_station }}</span>
                        </div>
                        <div class="col-6">
                            <span>{{ $elem->arrival_station }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <span>{{ $elem->departure_time }}</span>
                        </div>
                        <div class="col-6">
                            <span>{{ $elem->arrival_time }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection