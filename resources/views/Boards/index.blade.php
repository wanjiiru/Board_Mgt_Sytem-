@extends("layouts.app")
@section("content")
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                </div>
                @foreach($boards as $board)
                    <div id="{{$board->id}}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><strong>{!! $board->name !!}</strong></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

@endsection

