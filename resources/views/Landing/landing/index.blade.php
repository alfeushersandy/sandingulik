@extends('layouts.master', ['title' => 'sandingulik.com'])

@push('css')
    <style>
        .text-koding {
            background-color:#e44740;
            color:#fff;
            padding:0 13px;
            border-radius:.5rem;
            font-weight:700
        }
        .jumbotron {
            background-color: #fde3e2!important;
        }
        .article-avatar{white-space:nowrap;background-color:#c3c3c3;border-radius:50%;position:relative;cursor:pointer;color:#fff;display:inline-flex;font-size:.75rem;text-align:center;vertical-align:middle}
        .article-avatar img{width:35px;height:35px;object-fit:cover;border-radius:50%}
        .jumbotron-santri-koding{text-align:center}
    </style>
@endpush

@section('content')
    {{-- Jumbotron --}}
    <div class="p-5 mb-4 bg-light rounded-3 jumbotron">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold jumbotron-santri-koding text-dark">SANDI <span class="text-koding">NGULIK</span></h1>
            <p class="lead mt-3 text-dark" style="line-height: 35px">Website Tempat Sandi Sharing Soal 
                <span class="badge text-bg-danger rounded shadow-sm border-0">Pemrogaman</span> 
                <span class="badge text-bg-warning rounded shadow-sm border-0">Server</span> 
                <span class="badge text-bg-info rounded shadow-sm border-0">Jaringan</span>
            Secara Gratis Lewat Tulisan.
            </p>
        </div>
    </div>
    {{-- artikel --}}
    <div class="container pt-5 pb-4">
        <div class="row">
            <div class="col-md-12">
                <h4 class="font-weight-bold text-dark">ARTIKEL</h4>
                <p class="text-dark" style="font-size: 1.1rem">
                    Daftar Artikel Terbaru :
                </p>
                <div class="divider-custom"></div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
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
                </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 rounded shadow-custom" style="border-radius: 5px;margin-bottom: 30px">
                            <div class="card-body">
                                <h4 class="font-weight-bold text-dark mt-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 4h6v6h-6z"></path>
                                        <path d="M14 4h6v6h-6z"></path>
                                        <path d="M4 14h6v6h-6z"></path>
                                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                     </svg>
                                    KATEGORI</h4>
                                <hr>
                                <div class="list-group my-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="https://santrikoding.com/kategori/adonis-js" class="text-decoration-none">
                                                <span class="pull-left ">
                                                    <img src="https://santrikoding.com/storage/categories/792f61e1-013f-4d04-8e47-49e657713e3c.webp" data-src="https://santrikoding.com/storage/categories/792f61e1-013f-4d04-8e47-49e657713e3c.webp" data-srcset="https://santrikoding.com/storage/categories/792f61e1-013f-4d04-8e47-49e657713e3c.webp" style="width: 45px;height: 45px" class="img-reponsive img-rounded" alt="Adonis Js" srcset="https://santrikoding.com/storage/categories/792f61e1-013f-4d04-8e47-49e657713e3c.webp">
                                                </span>
                                                <span style="font-size: 1.2rem" class="text-dark mt-2">Adonis Js</span>
                                            </a>
                                        </li>                                           
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection