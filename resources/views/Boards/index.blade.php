@extends("layouts.app")
@section("content")
    <div class="section-wrapper">@if(Auth::check())
            <p>Viewing as: {{Auth::user()->role}}. </p>
        @endif<a href="/boards/create" class="button">New Board</a>
        <div class="row">
            <div class="column column-12 no-padding">
                <div class="box">
                    <div class="box-header">Boards</div>
                    <div class="box-body">
                        @foreach($boards as $board)
                            <p><a href="/boards/{{$board->id}}">{!! $board->name !!}</a></p>
                            @endforeach
                    </div>
                    <div class="box-footer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

