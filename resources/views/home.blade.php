@extends('layouts.app')

@section('breadcrumbs')
<ul class="breadcrumb">
    <li class="breadcrumb-item active">Главная</li>
</ul>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hello</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Your site
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
