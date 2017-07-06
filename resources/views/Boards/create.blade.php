@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
@section('content')
    <div class="container">
        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">Create Board</h1>
                </div>
            </div>
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="/boards">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">First Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Enter your Firrst Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">last Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Enter your Last Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa"
                                                                   area-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Committee</label>
                        <span class="desc"></span>
                        <div class="controls">
                            <select class="form-control" data-val="true"
                                    data-val-number="The field Committee must be a number."
                                    data-val-required="The Committee field is required." id="Committee"
                                    name="Committee">
                                <option value="">Select Committee</option>
                                <option selected="selected" value="131626">Full Board</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Position</label>
                        <span class="desc"></span>
                        <div class="controls">
                            <select class="form-control width-100-percent" id="Position" name="Position">
                                <option value="">Select Member Position</option>
                                <option value="Board Chair">Board Chair</option>
                                <option value="Executive Director (ED)">Executive Director (ED)</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Treasurer">Treasurer</option>
                                <option value="Board Member">Board Member</option>
                                <option value="Board Chair-Elect">Board Chair-Elect</option>
                                <option value="Vice Chair">Vice Chair</option>
                                <option value="President">President</option>
                                <option value="President &amp; CEO">President &amp; CEO</option>
                                <option value="President &amp; Chairperson">President &amp; Chairperson</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Director">Director</option>
                                <option value="Trustee">Trustee</option>
                                <option value="Commissioner">Commissioner</option>
                                <option value="Committee Chair">Committee Chair</option>
                                <option value="Immediate Past President">Immediate Past President</option>
                                <option value="Immediate Past Chair">Immediate Past Chair</option>
                                <option value="Parliamentarian ">Parliamentarian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group "><button type="button" class="btn btn-primary btn-lg btn-block login-button">Invite</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>
    @if (count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        </div>
        </section>
@endsection
