@extends("layouts.app")
@section("content")
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{--<section class="main-section">--}}
        {{--<div class="section-wrapper">--}}
            {{--<div class="row">--}}
                {{--<div class="small-12 large-12 columns">--}}
                    {{--<div class="box">--}}
                        {{--<div class="box-body">--}}
                            <a class="btn btn-primary pull-right" href="/meetings/create">
                                Create Meeting</a></div>
                            <table>
                                <caption>Meetings</caption>
                                <thead>
                                <tr>
                                    {{--<th>#</th>--}}
                                    <th>id</th>
                                    <th>Agenda</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Board</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($meetings as $meeting)
                                <tr>
                                    <td>{!!  $meeting->id!!}</td>
                                    <td>{!! ucwords($meeting->agenda)!!}</td>
                                    <td>{!! $meeting->date  !!} </td>
                                    <td>{!! ucwords($meeting->committee) !!}</td>
                                    <td><a href="https://maps.google.com/?q=alma"
                                           target="_blank">{!! ucwords($meeting->location)  !!}</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            </div>
                </div>
            </div>
        </div>
    </section>


@endsection





