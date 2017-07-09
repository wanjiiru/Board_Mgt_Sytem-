@extends("layouts.app")
@section("content")
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><span>BoardMemberships</span><a class="btn btn-primary pull-right" href="/boardmembershipss/create">
                                Board</a></h2>
                    </div>
                </div>
                @foreach($boardmemberships as $boardmembership)
                    <div id="{{$boardmembership->id}}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="/boardmembershis/{{$boardmembership->id}}">{!! $boardmembership->name !!}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

@endsection

