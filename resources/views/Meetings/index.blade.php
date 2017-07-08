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
                            <div class="box-header"><span>Meetings</span></div>
                            <a class="btn btn-primary pull-left" href="/meetings/create">
                                Create Meeting</a></div>
                        @foreach($meetings as $meeting)
                            <div id="{{$meeting->id}}">
                                <div class="meeting-content">
                                    <dl class="fields-list">
                                        <dt>Title:</dt>
                                        <dd>{!! $meeting->title !!}</dd>
                                        <dt>Commitee:</dt>
                                        <dd>{!! $meeting->committee !!}</dd>

                                        <dt>Date:</dt>
                                        <dd class="date">{!! $meeting->date  !!} <span
                                                    class="repeat-description"></span></dd>
                                        <dt>Location:</dt>
                                        <dd><a href="https://maps.google.com/?q=alma"
                                               target="_blank">{!! $meeting->location  !!}</a></dd>
                                    </dl>
                                </div>
                            </div></div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

@endsection





