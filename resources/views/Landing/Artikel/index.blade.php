@extends('layouts.master', ['title' => 'sandingulik.com'])

@push('css')
    <style>
        .jumbotron {
            background-color: #fde3e2!important;
        }
        body{
            font-family: Quicksand,sans-serif;
            background-color: #e9e9e9;
        }
        .card-search{background-color:#fff;border-radius:.5rem;border:0px;box-shadow:0 1px 3px #939393,0 1px 2px #0000!important}
        .article-avatar{white-space:nowrap;background-color:#c3c3c3;border-radius:50%;position:relative;cursor:pointer;color:#fff;display:inline-flex;font-size:.75rem;text-align:center;vertical-align:middle}
        .article-avatar img{width:35px;height:35px;object-fit:cover;border-radius:50%}
    </style>
@endpush
@section('content')
     {{-- Jumbotron --}}
     <div class="p-5 mb-4 bg-light rounded-3 jumbotron">
        <div>
            <h1 class="display-4 fw-bold jumbotron-santri-koding text-dark d-flex align-item-center justify-content-center">Artikel</span></h1>
            <p class="lead mt-3 text-dark d-flex align-item-center justify-content-center" style="line-height: 35px">Daftar Artikel
            </p>
        </div>
    </div>
    {{-- artikel --}}
    <div class="container">
        <div class="col-md-12">
            <form action="" method="GET" class="card-sm card-search" style="margin-top: 20px">
                <div class="card-body row no-gutters align-items-center" style="padding: .5rem">
                    <div class="col-auto">
    
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg border-0" name="q" value="" type="search" placeholder="Apa yang ingin Anda pelajari?">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <div class="search" style="padding-right: 10px;margin-top: 6px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search mb-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                             </svg>
                        </div>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-4 col-lg-4 mb-5">
            <div class="card border-0 rounded shadow-custom h-100">
                <img src="https://santrikoding.com/storage/posts/0fe3eafe-c82f-43b0-b488-61705ca53065.webp" data-src="https://santrikoding.com/storage/posts/0fe3eafe-c82f-43b0-b488-61705ca53065.webp" data-srcset="https://santrikoding.com/storage/posts/0fe3eafe-c82f-43b0-b488-61705ca53065.webp" class="card-img-top" style="width: 100%;height: 200px;object-fit:cover" alt="Tutorial Laravel Livewire 3 : #7 Delete Data dari Database" srcset="https://santrikoding.com/storage/posts/0fe3eafe-c82f-43b0-b488-61705ca53065.webp">
                <div class="card-body">
                    <div class="topic">
                        <a href="https://santrikoding.com/tag/laravel" class="badge text-bg-danger shadow-sm" style="text-decoration: none">Laravel</a>
                        <a href="https://santrikoding.com/tag/livewire" class="badge text-bg-info shadow-sm" style="text-decoration: none">Livewire</a>
                    </div>
                    <a class="link-article text-decoration-none" href="https://santrikoding.com/tutorial-laravel-livewire-3-7-delete-data-dari-database">
                        <h6 class="card-title font-weight-bold text-dark" style="line-height: 30px;">Tutorial Laravel Livewire 3 : #7 Delete Data dari Database</h6>
                    </a>
                </div>
                <div class="card-footer">
                    <a href="https://santrikoding.com/profile/@maulayyacyber" class="text-decoration-none">
                        <div class="article-avatar avatar-sm">
                            <img src="https://santrikoding.com/storage/avatars/c3d5fd01-c981-4034-9d7f-3e9f5ec8db9c.webp" data-src="https://santrikoding.com/storage/avatars/c3d5fd01-c981-4034-9d7f-3e9f5ec8db9c.webp" data-srcset="https://santrikoding.com/storage/avatars/c3d5fd01-c981-4034-9d7f-3e9f5ec8db9c.webp" class="rounded-circle" alt="Fika Ridaul Maulayya" srcset="https://santrikoding.com/storage/avatars/c3d5fd01-c981-4034-9d7f-3e9f5ec8db9c.webp">
                        </div>
                        <span class="text-black-50 ml-2"> <strong>Fika Ridaul Maulayya</strong></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection