@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
@endsection
@section('js')
    </script>
@endsection
@section('content')
    <div id="shopify-section-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133"
        class="shopify-section index-section">
        <div data-section-id="template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133"
            data-section-type="section-slideshow-v2" style="  ">
            <div class="section-slideshow-v2">
                <div class="slick-side-h2">
                    @foreach ($banner as $item)
                        <div class="itemv-slide-h2">
                            <div class="info-sideh1">
                                <div class="picture-slideshow d-none d-md-block">
                                    <a href="{{ $item->link }}">
                                        <img data-src="{{ url($item->image) }}" class="lazyload img_desktop img-fluid w-100"
                                            alt="slideshow">
                                    </a>
                                </div>
                                <div class="picture-slideshow d-block d-md-none">
                                    <a href="{{ $item->link }}">
                                        <img data-src="{{ url($item->image) }}" class="lazyload img-fluid w-100 img_desktop"
                                            alt="slideshow">
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div
                                        class="box-info box-info-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-1">
                                        <div class="sub-title">
                                            <h3 class="" style="color: #010101">{{ $item->subimg1 }}</h3>
                                        </div>
                                        <div class="box-title">
                                            <h3 class="titlebig mb-0" style="color:#010101;">{{ $item->title }}
                                            </h3>
                                        </div>
                                        <div class="box-title2">
                                            <h3 class="title-small mb-0" style="color:#010101;">{{ $item->description }}
                                            </h3>
                                        </div>
                                        <div class="button-main">
                                            <a class="button-shop button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-1 "
                                                href="{{ $item->link }}">
                                                <span style="color:#ffffff">{{ getLanguage('learn_more') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <style>
            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-1 {
                background: #7fa15a;
            }

            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-1:hover {
                background: #222222;
            }

            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-1:hover span {
                color: #ffffff !important;
            }

            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-0 {
                background: #7fa15a;
            }

            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-0:hover {
                background: #222222;
            }

            .section-slideshow-v2 .slick-side-h2 .itemv-slide-h2 .info-sideh1 .box-content .box-info .button-main .button-shop-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-template--16764744466743__34e94999-fb8e-497d-8a30-9ca7875b9133-16712308946a20eaec-0:hover span {
                color: #ffffff !important;
            }
        </style>
    </div>
    <div id="shopify-section-template--16764744466743__436a9c6e-1ca6-48c5-9b1a-33847fa461d7" class="shopify-section">
        <div data-section-id="template--16764744466743__436a9c6e-1ca6-48c5-9b1a-33847fa461d7"
            data-section-type="section-info-v1" style=" ">
            <div class="section-info-v1">
                <div class="container container-v2">
                    <div class="d-flex justify-content-center">
                        <div class="title-info text-center">
                            <h2 class="title_heading mb-0" style="color: ">{{ getLanguage('brand_products') }}</h2>
                        </div>
                    </div>
                    <p class="content_info" style="color: ">{{ getLanguage('brand_products_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16764744466743__aebb2e92-551c-4c8e-9bda-ee38d506e3b4"
        class="shopify-section index-section">
        <div data-section-id="template--16764744466743__aebb2e92-551c-4c8e-9bda-ee38d506e3b4"
            data-section-type="section-brand-v1" style="  ">
            <div class="section-brand-v1" style="background : ">
                <div class="container container-v1">
                    <div class="jsbrand_list_v1">
                        @foreach ($categories as $cate)
                            <div class="item" style="margin: 0 25px">
                                <a href="{{ route('brandStory', $cate->slug) }}">
                                    <img src="{{ url($cate->avatar) }}" class="img-fluid" alt="_brand" loading="lazy">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16764744466743__5960fb63-12aa-4e4b-be54-f69be4ece928" class="shopify-section">
        <div data-section-id="template--16764744466743__5960fb63-12aa-4e4b-be54-f69be4ece928"
            data-section-type="section-banner-v7" style=" ">
            <div class="section-banner-v7">
                <div class="relative banner-v7  " style="background-image: url({{ url($gioithieu->image) }})">
                    <div class="content-banner text-center ">
                        <h3 class="title-banner" style="color: #ffffff">{{ languageName($gioithieu->title) }}<br></h3>
                        <div class="content" style="color: #ffffff">{!! languageName($gioithieu->description) !!}</div>
                        <a href="{{ route('pagecontent', ['slug' => $gioithieu->slug]) }}"
                            class="button-banner button-banner-template--16764744466743__5960fb63-12aa-4e4b-be54-f69be4ece928">{{ getLanguage('learn_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .section-banner-v7 .banner-v7 .content-banner .button-banner-template--16764744466743__5960fb63-12aa-4e4b-be54-f69be4ece928 {
                color: #000000;
                background: #5a8c34;
            }

            .section-banner-v7 .banner-v7 .content-banner .button-banner-template--16764744466743__5960fb63-12aa-4e4b-be54-f69be4ece928:hover {
                color: #ffffff;
                background: #ffffff;
            }
        </style>
    </div>
    @foreach ($categories as $key => $cate)
        @if ($key % 2 == 0)
            <div id="shopify-section-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                class="shopify-section">
                <div data-section-id="template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                    data-section-type="section-banner-v1" style=" ">
                    <div class="section-banner-v1 ">
                        <div class="row no-gutters align-items-center" style="background-color:#7fa15a">
                            <div class=" col-banner-6  order-lg-1 ">
                                <div class="box-img1 img-left" style="background-color:#7fa15a; padding: 50px 0">
                                    <div class="banner-content">
                                        <h3 class="title-banner" style="color: #ffffff">{{ languageName($cate->name) }}
                                        </h3>
                                        <div class="sub-title" style="color: #ffffff">{!! languageName($cate->description) !!}</div>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}"
                                                class="button-shop button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                                                title="">{{ getLanguage('show_shop_brand') }}</a>
                                            <div class="btn_bottom">
                                                <a href="{{ route('brandStory', ['slug' => $cate->slug]) }}"
                                                    class="button-shop button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                                                    title="">{{ getLanguage('story_brand') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-banner-4  order-lg-2  ">
                                <div class="box-img img-right">
                                    <img data-src="{{ url($cate->imagehome) }}" class="lazyload img-fluid w-100"
                                        alt="{{ languageName($cate->name) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28 {
                        color: #ffffff;
                        border: 1px solid #ffffff;
                        background: transparent;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28:hover {
                        color: #ffffff;
                        background: #000000;
                        border: 1px solid #000000;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28 {
                        color: #010101;
                        border: 1px solid #010101;
                        background: transparent;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28:hover {
                        color: #010101;
                        background: #b2c651;
                        border: 1px solid #b2c651;
                    }
                </style>
            </div>
        @else
            <div id="shopify-section-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                class="shopify-section">
                <div data-section-id="template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                    data-section-type="section-banner-v1" style=" ">
                    <div class="section-banner-v1 ">
                        <div class="row no-gutters align-items-center" style="background-color:#7fa15a">
                            <div class=" col-banner-6  order-lg-2 ">
                                <div class="box-img1 img-left" style="background-color:#7fa15a; padding: 50px 0">
                                    <div class="banner-content">
                                        <h3 class="title-banner" style="color: #ffffff">{{ languageName($cate->name) }}
                                        </h3>
                                        <div class="sub-title" style="color: #ffffff">{!! languageName($cate->description) !!}</div>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}"
                                                class="button-shop button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                                                title="">{{ getLanguage('show_shop_brand') }}</a>
                                            <div class="btn_bottom">
                                                <a href="{{ route('brandStory', ['slug' => $cate->slug]) }}"
                                                    class="button-shop button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28"
                                                    title="">{{ getLanguage('story_brand') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-banner-4  order-lg-1  ">
                                <div class="box-img img-right">
                                    <img data-src="{{ url($cate->imagehome) }}" class="lazyload img-fluid w-100"
                                        alt="{{ languageName($cate->name) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28 {
                        color: #ffffff;
                        border: 1px solid #ffffff;
                        background: transparent;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28:hover {
                        color: #ffffff;
                        background: #000000;
                        border: 1px solid #000000;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28 {
                        color: #010101;
                        border: 1px solid #010101;
                        background: transparent;
                    }

                    .section-banner-v1 .col-banner-6 .img-left .banner-content .button-shop2-template--16764744466743__ff00ae5d-6487-4e2f-9519-98073ae22e28:hover {
                        color: #010101;
                        background: #b2c651;
                        border: 1px solid #b2c651;
                    }
                </style>
            </div>
        @endif
    @endforeach
    <div id="shopify-section-template--16764744466743__16367045888895e876" class="shopify-section">
        <div data-section-id="template--16764744466743__16367045888895e876" data-section-type="section-product-v2"
            style=" ">
            <div class="section-product-v2 mt-all">
                <div class="container container-v2">
                    <div class="text-center">
                        <h3 class="title_heading text-center mb-4" style="color: #222222">
                            {{ getLanguage('featured_product') }}</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs title-tab justify-content-center">
                                @foreach ($categories as $key => $cate)
                                    <li>
                                        <a href="#a{{ $cate->id }}" data-toggle="tab"
                                            class="{{ $key == 0 ? 'active' : '' }} ds-prod-1">{{ languageName($cate->name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        @foreach ($categoryhome as $key => $cate)
                            <div id="a{{ $cate->id }}" class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}">
                                <div class="row">
                                    @foreach ($cate->product as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 product-tab-pd ">
                                            @include('layouts.product.item', ['product' => $product])
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16764744466743__ae64d2ed-fe4c-434e-b88a-54981f3561f6" class="shopify-section">
        <div data-section-id="template--16764744466743__ae64d2ed-fe4c-434e-b88a-54981f3561f6"
            data-section-type="section-banner-v3" style=" ">
            <div class="section-banner-v3 mt-all">
                <div class="container container-v2">
                    <div class="text-center">
                        <h3 class="title_heading" style="color: #000000">{{ getLanguage('featured_categories') }}</h3>
                        {{-- <p class="sub_heading" style="color: #666666">{{getLanguage('our_service_committed_you_to_discover_the_best_japanese_tea_you_are_looking_for')}}</p> --}}
                    </div>
                    <div class="row">
                        @foreach ($typeProducts as $key => $type)
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="banner-ver">
                                    <div class="banner-item">
                                        <a href="{{ route('allListType', ['danhmuc' => $type->category->slug, 'loaidanhmuc' => $type->slug]) }}"
                                            class="box-img d-block">
                                            <img data-src="{{ url($type->avatar) }}" class="lazyload img-fluid w-100"
                                                alt="_img">
                                        </a>
                                        <div class="content">
                                            <h3 class="title-banner" style="color: #ffffff">
                                                {{ languageName($type->name) }}</h3>
                                            <a href="{{ route('allListType', ['danhmuc' => $type->category->slug, 'loaidanhmuc' => $type->slug]) }}"
                                                class="btn-template--16764744466743__ae64d2ed-fe4c-434e-b88a-54981f3561f6">{{ getLanguage('learn_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <style>
            .section-banner-v3 .banner-item .content .btn-template--16764744466743__ae64d2ed-fe4c-434e-b88a-54981f3561f6 {
                color: #ffffff;
                background: #B2C651;
            }

            .section-banner-v3 .banner-item .content .btn-template--16764744466743__ae64d2ed-fe4c-434e-b88a-54981f3561f6:hover {
                color: #000000;
                background: #ffffff;
            }
        </style>
    </div>
    <section id="shopify-section-template--16764744466743__custom_liquid_MLtYUt"
        class="shopify-section section section-template--16764744466743__custom_liquid_MLtYUt-padding">
        <style data-shopify>
            .section-template--16764744466743__custom_liquid_MLtYUt-padding {
                padding-top: calc(40px * 0.75);
                padding-bottom: calc(52px * 0.75);
            }

            @media screen and (min-width: 750px) {
                .section-template--16764744466743__custom_liquid_MLtYUt-padding {
                    padding-top: 40px;
                    padding-bottom: 52px;
                }
            }
        </style>
        <div class="color-background-1 gradient">
            <div class="youtube-embed-wrapper">
                @php
                    $video = $video->link;
                    $link = str_replace('watch?v=', 'embed/', $video);
                @endphp
                <iframe width="100%" height="500" src="{{ $link }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <style>
                    .youtube-embed-wrapper {
                        width: 100%;
                        max-width: 100%;
                        /* 必要に応じて調整 */
                        margin: 0 auto;
                        position: relative;
                        padding-bottom: 56.25%;
                        /* 16:9 のアスペクト比に合わせた余白 */
                        height: 0;
                    }

                    .youtube-embed-wrapper iframe {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>
            </div>
        </div>
    </section>
    <div id="shopify-section-template--16764744466743__16b4bad1-30c9-4dde-9d36-d670327b130e" class="shopify-section">
        <div data-section-id="template--16764744466743__16b4bad1-30c9-4dde-9d36-d670327b130e"
            data-section-type="section-banner-v7" style=" ">
            <div class="section-banner-v7  mt-all ">
                <div class="relative banner-v7  " style="background-image: url({{ url($history->image) }})">
                    <div class="content-banner  text-left ">
                        <h3 class="title-banner" style="color: #ffffff">{{ languageName($history->title) }}</h3>
                        <div class="content" style="color: #ffffff">{!! languageName($history->description) !!}</div>
                        <a href="{{ route('pagecontent', ['slug' => $history->slug]) }}"
                            class="button-banner button-banner-template--16764744466743__16b4bad1-30c9-4dde-9d36-d670327b130e">{{ getLanguage('learn_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .section-banner-v7 .banner-v7 .content-banner .button-banner-template--16764744466743__16b4bad1-30c9-4dde-9d36-d670327b130e {
                color: #5A8C34;
                background: #ffffff;
            }

            .section-banner-v7 .banner-v7 .content-banner .button-banner-template--16764744466743__16b4bad1-30c9-4dde-9d36-d670327b130e:hover {
                color: #ffffff;
                background: #B2C651;
            }
        </style>
    </div>
    <div id="shopify-section-template--16764744466743__17e41e04-b025-4d25-8217-4d380dfb5f0f" class="shopify-section">
        <div data-section-id="template--16764744466743__17e41e04-b025-4d25-8217-4d380dfb5f0f"
            data-section-type="section-banner-v11" style=" margin-bottom: 80px;">
            <div class="section-banner-v11 mt-all" style="background: #f5f8f2">
                <div class="">
                    <div class="row no-gutters">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="banner-img">
                                <img data-src="{{ url($quality->image) }}" class="lazyload img-fluid w-100"
                                    alt="_img_banner_">
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-md-2">
                            <div class="banner-info">
                                <p class="title-top" style="color: #7bae23">{!! languageName($quality->description) !!}</p>
                                <h3 class="title-banner" style="color: #000000">{{ languageName($quality->title) }}</h3>
                                <div class="subtitle-banner" style="color: #666666">{!! languageName($quality->content) !!}</div>
                                <div class="btn-banner">
                                    <a href="{{ route('pagecontent', ['slug' => $quality->slug]) }}"
                                        class="btn-banner-template--16764744466743__17e41e04-b025-4d25-8217-4d380dfb5f0f ">{{ getLanguage('learn_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .section-banner-v11 .banner-info .btn-banner .btn-banner-template--16764744466743__17e41e04-b025-4d25-8217-4d380dfb5f0f {
                color: #ffffff;
                background: #7bae23;
                transition: all .3s;
            }

            .section-banner-v11 .banner-info .btn-banner .btn-banner-template--16764744466743__17e41e04-b025-4d25-8217-4d380dfb5f0f:hover {
                color: #ffffff;
                background: #000000;
            }
        </style>
    </div>
    <div id="shopify-section-template--16764744466743__section_testimonial_v1" class="shopify-section index-section">
        <div data-section-id="template--16764744466743__section_testimonial_v1" data-section-type="section-testimonial-v1"
            style=" ">
            <div class="section-testimonial-v1 mt-all">
                <div class="container container-v2">
                    <div class="text-center">
                        <h3 class="title_heading mb-3 mb-lg-4" style="color: #222222">
                            {{ getLanguage('what_partners_are_saying') }}</h3>
                    </div>
                    <div class="js-testimonial-v1">
                        @foreach ($reviewcus as $review)
                            <div class="">
                                <div class="testimonial-inner">
                                    <div class="testimonial-info">
                                        <div class="avatar ">
                                            <img width="88" height="88" data-src="{{ url($review->avatar) }}"
                                                class="lazyload img-responsive" alt="testimonial">
                                        </div>
                                        <div class="author-info">
                                            <h3 class="mb-1">{{ languageName($review->name) }}</h3>
                                            <p class="text-position">{{ languageName($review->position) }}</p>
                                        </div>
                                        <div class="content mar-bottom-15">{!! languageName($review->content) !!}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16764744466743__e7c6375a-c223-483c-8262-c77b29a34549" class="shopify-section">
        <div data-section-id="template--16764744466743__e7c6375a-c223-483c-8262-c77b29a34549"
            data-section-type="section-blog-v1" style="  ">
            <div class="section-blog-v1" style="background: #f5f5f5">
                <div class="container container-v2">
                    <div class="text-center ">
                        <h3 class="title_heading mb-0" style="color: #222222">{{ getLanguage('featured_news') }}</h3>
                    </div>
                    <div class="row js-blog-v1 content-blog-v1">
                        @foreach ($hotBlogs as $blog)
                            <div class="col-12">
                                <div class="content-section-blog-v1">
                                    <div class="picrure">
                                        <a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}" class="image_url">
                                            <img data-src="{{ url($blog->image) }}"
                                                alt="{{ languageName($blog->title) }}" class="lazyload img-fluid">
                                        </a>
                                        <div class="date">
                                            <span class="day">{{ date('d', strtotime($blog->created_at)) }}</span>
                                            <span class="month">{{ date('M', strtotime($blog->created_at)) }}</span>
                                            <span class="year">{{ date('Y', strtotime($blog->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="info_blog">
                                        <a class="blog_cate"
                                            href="{{ route('detailBlog', ['slug' => $blog->slug]) }}">{{ languageName($blog->cate->name) }}</a>
                                        <h4 class="mb-0 title-blog"><a
                                                href="{{ route('detailBlog', ['slug' => $blog->slug]) }}">{{ languageName($blog->title) }}</a>
                                        </h4>
                                        <p class="content mb-0">
                                            {!! languageName($blog->description) !!}
                                        </p>
                                        <div class="btn_readmore">
                                            <a class=""
                                                href="{{ route('detailBlog', ['slug' => $blog->slug]) }}">{{ getLanguage('learn_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16764744466743__ec171fcc-6fd0-4ac5-8c3a-96b05b5bbfb8"
        class="shopify-section index-section">
        <div data-section-id="template--16764744466743__ec171fcc-6fd0-4ac5-8c3a-96b05b5bbfb8"
            data-section-type="section-slideshow-v5" style="  ">
            <div class="section-slideshow-v5">
                <div class="slick-side-h5">
                </div>
            </div>
        </div>
        <style>
        </style>
    </div>
    <div id="shopify-section-template--16764744466743__940043ac-c187-4b4a-8bd5-29ea9ad0b810" class="shopify-section">
        <div data-section-id="template--16764744466743__940043ac-c187-4b4a-8bd5-29ea9ad0b810"
            data-section-type="section-banner-v6" style=" margin-bottom: 70px;">
            <div class="section-banner-v6  mt-all ">
                <div class=" container container-v2 ">
                    <div class="relative banner-v6" style="background-image: url({{ url($whychooseus->image) }})">
                        <div class="content-banner">
                            <h3 class="title-banner" style="color: #ffff">{{ languageName($whychooseus->title) }}</h3>
                            <a href="{{ route('pagecontent', ['slug' => $whychooseus->slug]) }}"
                                class="button-banner button-banner-template--16764744466743__940043ac-c187-4b4a-8bd5-29ea9ad0b810">{{ getLanguage('learn_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .section-banner-v6 .banner-v6 .content-banner .button-banner-template--16764744466743__940043ac-c187-4b4a-8bd5-29ea9ad0b810 {
                color: #ffffff;
                background: #5a8c34;
                transition: all .3s;
            }

            .section-banner-v6 .banner-v6 .content-banner .button-banner-template--16764744466743__940043ac-c187-4b4a-8bd5-29ea9ad0b810:hover {
                color: #ffffff;
                background: #161616;
            }
        </style>
    </div>
@endsection
