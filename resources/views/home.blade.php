@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Permission</div>

                    <div class="panel-body">

                        @if(checkPermission(['user','admin','superadmin']))
                            <a href="{{ url('permissions-all-users') }}"><button class =btn btn-primary>Access All Users</button></a>
                        @endif

                        @if(checkPermission(['admin','superadmin']))
                            <a href="{{ url('permissions-admin-superadmin') }}"><button>Access Admin and Superadmin</button></a>
                        @endif

                        @if(checkPermission(['superadmin']))
                            <a href="{{ url('permissions-superadmin') }}"><button>Access Only Superadmin</button></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
