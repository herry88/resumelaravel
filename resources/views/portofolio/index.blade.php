@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">PortoFolio</div>

            <div class="card-body">
                <a href="{{route('portofolio.create')}}" class="btn btn-primary">Add PortoFolio</a>
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>Nama</td>
                        <td>Tools</td>
                    </tr>
                        @forelse($portofolio as $pt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pt->nama_portofolio }}</td>
                            <td>&nbsp;</td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum Ada Data</td>
                        </tr>
                        @endforelse

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
