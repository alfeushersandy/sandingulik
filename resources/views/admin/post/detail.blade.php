@extends('layouts.admin.master', ['subtitle' => 'Detail Artikel', 'breadcrumbs' => 'Artikel'])

@section('section')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$artikel->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $artikel->title }}</h4>
                        <p class="tmt-3">
                        {!! $artikel->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection