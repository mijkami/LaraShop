@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-5 mb-5">
            <div class="card">
                <div class="card-header">Mon Compte</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !
                </div>
            </div>
        </div>
    </div>
</div>
{{-- #TODO : consider redirect to / root and add a flashmessage --}}
@endsection
