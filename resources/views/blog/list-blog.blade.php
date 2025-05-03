@extends('layouts.main.master')
@section('title')
    {{ $title_page }}
@endsection
@section('description')
    {{ $title_page }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <div id="shopify-section-template--16764744106295__blog_template" class="shopify-section">
        <section>
            <div class="wrap-bread-crumb breadcrumb_collection2">
                <div class="text-center bg-breadcrumb">
                    <div class="title-page">
                        <h2 class="">{{$title_page}}</h2>
                    </div>
                    <!-- /snippets/breadcrumb.liquid -->
                    <div class="bread-crumb">
                        <a href="{{route('home')}}" title="Back to the home">{{getLanguage('home')}}<i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <strong>{{$title_page}}</strong>
                    </div>
                </div>
            </div>
            <!-- End Bread Crumb -->
            <div class="content-page blog-page">
                <div class="container container-v2">
                    <div class="content-blog-page row">
                        <div style="" class="blog-list-view  col-lg-8 col-xl-9 ">
                            <div class="row">
                                @foreach ($blogs as $blog)
                                <div class=" col-lg-6 col-md-6 col-12">
                                    <div class="blog_grid">
                                        <div class="post-thumb">
                                            <a href="{{route('detailBlog',['slug' => $blog->slug])}}"
                                                class="article_img"><img
                                                    src="{{url(''.$blog->image)}}"
                                                    alt=""></a>
                                            <div class="single-post-date">
                                                <span class="date">{{$blog->created_at->format('d')}}</span>
                                                <span class="month">{{$blog->created_at->format('M')}}</span>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <h4 class="blog-title mb-0">{{$title_page}}</h4>
                                            <h3 class="post-title mb-0"><a
                                                    href="{{route('detailBlog',['slug' => $blog->slug])}}"
                                                    class="dark"
                                                    title="{{ languageName($blog->title) }}">{{ languageName($blog->title) }}</a></h3>
                                            <div class="desc mb-0">
                                                {!! languageName($blog->description) !!}
                                            </div>
                                            <a class="btn_readmore"
                                                href="{{route('detailBlog',['slug' => $blog->slug])}}"><span>{{getLanguage('learn_more')}}</span></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div style="  padding-top: 20px " class="pagi-nav  justify-content-center  ">
                                {{$blogs->links()}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="blog_sidebar">
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
                                        @foreach ($blognew as $item)
                                        <div class="item-post">
                                            <div class="post-thumb "><a
                                                    href="{{route('detailBlog',['slug' => $item->slug])}}"
                                                    class=""><img
                                                        src="{{url(''.$item->image)}}"
                                                        alt="{{ languageName($item->title) }}" /></a>
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
                                <div class="banner_sidebar ">
                                    <a href="{{route('home')}}">
                                        <img class="w-100"
                                            src="{{url(''.$cate_image)}}" alt="{{$title_page}}" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
