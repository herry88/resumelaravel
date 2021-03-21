@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if(Session::get('success'))
                <div class="alert alert-success">
                  <strong>{{ Session::get('success') }}</strong>
                </div>
              @endif
                <div class="card-header">About</div>


                <div class="card-body">
                  <a href="{{route('about.create')}}" class="btn btn-primary">Add About Page</a>

                  <table class="table table-bordered">
                      <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Deskripsi</td>
                        <td>Tools</td>
                      </tr>
                      <tr>
                        @forelse($about as $ab)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$ab->nama}}</td>
                            <td>{{$ab->description}}</td>
                            <td>#</td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="4" class="text-center">Belum Ada Data</td>
                          </tr>

                        @endforelse
                      </tr>
                  </table>
            </div>
        </div>
    </div>
  </div>
@endsection
