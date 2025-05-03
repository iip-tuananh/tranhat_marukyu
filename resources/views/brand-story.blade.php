@extends('layouts.main.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $description }}
@endsection
@section('image')
    {{ url('' . $brand->imagehome) }}
@endsection
@section('css')
    <style>
        .aboutus-pages {
            padding-top: 150px;
        }

        @media (max-width: 768px) {
            .aboutus-pages {
                padding-top: 70px;
            }
        }
    </style>
@endsection
@section('js')
@endsection
@section('content')
    <div id="shopify-section-template--17533284679991__about_introduce_v3" class="shopify-section">
        <div class="aboutus-pages page_aboutus_v3">
            <div class="container container-v1">
                <div class="about-introduce">
                    <div class="row">
                        <div class="col-md-6 intro_image">
                            <img class="w-100" src="{{ url('' . $brand->imagehome) }}" loading="lazy">
                        </div>
                        <div class="col-md-6 intro_detail d-flex align-items-center">
                            <div class="info-intro">
                                <h3 class="spf-heading-title"></h3>
                                <p class="spf-sub-des">{{$title}}</p>
                                <div class="content_intro">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 intro_detail d-flex align-items-center">
                            <div class="info-intro ">
                                <h3 class="spf-heading-title"></h3>
                                <div class="content_intro">
                                    {!! $content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
