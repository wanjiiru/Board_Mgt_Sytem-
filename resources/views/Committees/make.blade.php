@extends('layouts.app')

@section('content')
        <div id="user-committee-list">
            <div class="col-sm -12">
                <section class="box">
                    <header class="panel_header">
                        <div class="col--6 col-md-12 col-sm-12  col-xs-12 mainlistdata-right no-padding option-btn">
                            <div class="mainlistdata-right-inner">
                                <a href="#add-committee-modal" data-target="#add-committee-modal" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add Committee</a>
                            </div>
                        </div>
                        <h2 class="title pull-left">Committees List</h2>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class='row'>
                                    <div class="table-responsive">
                                        <table id="grouplist" class="table display" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th class="sorting_desc">Committee Name</th>
                                                <th>Total Members</th>
                                                <th>Chair</th>
                                                <th>Chair Start</th>
                                                <th>Chair End</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <strong>
                                                        Full Board
                                                    </strong>
                                                    <br />
                                                </td>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a href="" class="btn btn-primary user-edit-committee" data-c="131626"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>

    </section>


    </div>

    </section>





@endsection