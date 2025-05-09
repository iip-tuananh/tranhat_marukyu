@extends('layouts.main.master')
@section('title')
{{languageName($pagecontentdetail->title)}}
@endsection
@section('description')
{{languageName($pagecontentdetail->title)}}
@endsection
@section('image')
{{url(''.$pagecontentdetail->image)}}
@endsection
@section('css')
<style>
    .breadcrumb-noheading .bread-crumb {
        padding-top: 150px;
    }
    @media (max-width: 768px) {
        .breadcrumb-noheading .bread-crumb {
            padding-top: 0px;
        }
        .banner_sidebar {
            display: none;
        }
    }
</style>
@endsection
@section('js')
@endsection
@section('content')
<div id="shopify-section-template--16764744073527__article_template" class="shopify-section">
    <!-- /sections/article-template.liquid -->
    <section id="content">
        <div class="breadcrumb-noheading">
            <div class="container container-v2">
                <!-- /snippets/breadcrumb.liquid -->
                <div class="bread-crumb">
                    <a href="{{route('home')}}" title="Back to the home">{{getLanguage('home')}}<i class="fa fa-angle-right"
                            aria-hidden="true"></i></a>
                    <a href="javascript:void(0)">Page <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <strong>{{ languageName($pagecontentdetail->title) }}</strong>
                </div>
            </div>
        </div>
        <div class="content-page article-page">
            <div class="container container-v2">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 order-2 order-lg-1">
                        <div class="article_sidebar">
                            <div class="widget widget-search">
                                <form class="wg-search-form" action="#">
                                    <input type="hidden" name="type" value="product">
                                    <input type="text" placeholder="Search..." name="q" value="" />
                                    <button type="submit" value=""><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <div class="blog_sidebar_recent">
                                <h2 class="widget-title ">{{getLanguage('recent_posts')}}</h2>
                                <div class="list-posts">
                                    @foreach ($bloglq as $item)
                                    <div class="item-post">
                                        <div class="post-thumb "><a
                                                href="{{route('detailBlog',['slug' => $item->slug])}}"
                                                class=""><img
                                                    src="{{url(''.$item->image)}}"
                                                    alt="{{ languageName($item->title) }}" loading="lazy"/></a>
                                        </div>
                                        <div class="post-info">
                                            <span class="date-post">{{$item->created_at->format('d.M.Y')}}</span>
                                            <h3 class="post-title mb-0 "><a
                                                    href="{{route('detailBlog',['slug' => $item->slug])}}"
                                                    class="dark">{{ languageName($item->title) }}</a></h3>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="banner_sidebar">
                                <a href="{{route('home')}}">
                                    <img class="w-100"
                                        src="{{url(''.$pagecontentdetail->image)}}" alt="{{$pagecontentdetail->title}}" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div style="" class=" col-lg-8 col-xl-9 order-1 order-lg-2">
                        <div class="content-single-blog">
                            <div class="post-details">
                                <div class="content-image-single">
                                    <div class="content-info">
                                        <h2 class="article_title">{{ languageName($pagecontentdetail->title) }}</h2>
                                        <div class="cmt-author">
                                            <span class="author"><i class="fa fa-user"></i><a
                                                    href="#">Admin</a></span>
                                            <span class="date-post"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$pagecontentdetail->created_at->format('d.M.Y')}}</a></span>
                                        </div>
                                    </div>
                                    <div class="single-post-thumb">
                                        <img src="{{url(''.$pagecontentdetail->image)}}"
                                            alt="{{ languageName($pagecontentdetail->title) }}" loading="lazy"/>
                                    </div>
                                </div>
                                <!-- End Single Post Thumb -->
                                <div class="content-post-default">
                                    {!! languageName($pagecontentdetail->content) !!}
                                </div>
                            </div>
                            <div class="single-related-post ">
                                <h2 class="title-single-related-post">{{getLanguage('related_posts')}}</h2>
                                <div class="row js_relate_post">
                                    @foreach ($page_related as $item)
                                    <div class="blog_grid col-12">
                                        <div class="post-thumb">
                                            <a href="{{route('pagecontent',['slug' => $item->slug])}}"
                                                class="article_img"><img
                                                    src="{{url(''.$item->image)}}"
                                                    alt="{{ languageName($item->title) }}" loading="lazy"></a>
                                            <div class="single-post-date">
                                                <span class="date">{{$item->created_at->format('d')}}</span>
                                                <span class="month">{{$item->created_at->format('M')}}</span>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <h3 class="post-title mb-0"><a
                                                    href="{{route('pagecontent',['slug' => $item->slug])}}"
                                                    class="dark"
                                                    title="{{ languageName($item->title) }}">{{ languageName($item->title) }}</a></h3>
                                            <a class="btn_readmore"
                                                href="{{route('pagecontent',['slug' => $item->slug])}}"><span>{{getLanguage('learn_more')}}</span></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- End Post Slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="shopify-section-template--16764744073527__082cefbe-81ac-4f30-8388-bcdfedec44b7" class="shopify-section">
    <div data-section-id="template--16764744073527__082cefbe-81ac-4f30-8388-bcdfedec44b7"
        data-section-type="section-product-v2" style=" ">
        <div class="section-product-v2 mt-all">
            <div class="container container-v2">
                <div class="text-center">
                    <h3 class="title_heading text-center mb-4" style="color: #222222">
                        {{ getLanguage('featured_product') }}</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs title-tab justify-content-center">
                            @foreach ($categoryhome as $key => $cate)
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
@endsection