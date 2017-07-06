@extends("layouts.app")
@section("content")
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><span>Committees</span> <a class="btn btn-primary pull-right" href="/committees/makee">Create
                                comiitee</a></h2>
                    </div>
                </div>
                @foreach($committees as $committee)
                    <div id="{{$committee->id}}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><strong>{!! $committee->name !!}</strong></h4>
                                <h4><strong>{!! $committee->chairperson !!}</strong></h4>
                                <h4><strong>{!! $committee->members !!}</strong></h4>
                                <h4><strong>{!! $committee->summary !!}</strong></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

@endsection

