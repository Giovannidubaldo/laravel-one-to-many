@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div>
                    <a href="{{ route('admin.projects.index') }}">Vai ai miei progetti</a>
                </div>
                <div>
                    <a href="{{ route('admin.types.index') }}">Vai ai tipi di progetti</a>
                </div>
            </div>
        </div>
    </div>
@endsection
