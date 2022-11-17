@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @can('isAdmin')
                            <div class="btn btn-success btn-lg">
                                Accèss Administarteur 
                            </div>
                        @elsecan('isManager')
                            <div class="btn btn-primary btn-lg">
                                Accèss Manager
                            </div>
                        @else
                            <div class="btn btn-info btn-lg">
                                Accèss utilisateur 
                            </div>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
