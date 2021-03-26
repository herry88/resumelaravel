@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">About</div>

              <div class="card-body">
                <form  action="{{ route('about.store') }}" method="post">
                  @csrf
                  @method('POST')

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>description</label>
                      <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Save Data</button>
                    </div>
                  </div>

                </form>
          </div>
      </div>
  </div>
</div>
@endsection
