@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('about.index')}}" class="btn btn-primary">Menu About</a>
                    <a href="{{route('portofolio.index')}}" class="btn btn-info">Menu PortoFolio</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
