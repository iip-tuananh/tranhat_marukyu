@extends('layouts.main.master')
@section('title')
    Câu hỏi thường gặp
@endsection
@section('description')
    Câu hỏi thường gặp
@endsection
@section('image')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <div id="shopify-section-template--16764744761655__faq_template_v1" class="shopify-section">
        <section class="page_aboutus_v1 page_FQA">
            <div class="wrap-bread-crumb breadcrumb_collection2">
                <div class="text-center bg-breadcrumb">
                    <div class="title-page">
                        <h2 class="">{{getLanguage('faq')}}</h2>
                    </div>
                    <!-- /snippets/breadcrumb.liquid -->
                    <div class="bread-crumb">
                        <a href="{{route('home')}}" title="Back to the home">{{getLanguage('home')}}<i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                        <strong>{{getLanguage('faq')}}</strong>
                    </div>
                </div>
            </div>
            <div class="asked">
                <div class="container container-v2">
                    <div class="row">
                        <div class="col-lg-12 top_asked">
                            <h3>{{getLanguage('need_help')}}</h3>
                            <p class="mb-0">If you have questions or need assistance concerning your account, please feel
                                free to <strong><a href="{{route('contactUs')}}">contact us</a></strong></p>
                        </div>
                    </div>
                    <div class="row content_askeds">
                        <div class="col-lg-12 col-md-12">
                            @foreach ($faqs as $key => $item)
                            <div class="box_content_question">
                                <a class="title_question jstitleqs engoc-faq-heading" data-toggle="collapse"
                                    href="#faq_block_left_{{$key}}" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <svg class="engoc-faq-icon-plus" version="1.1" id="Capa_{{ $key }}"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <polygon
                                                    points="276,236 276,0 236,0 236,236 0,236 0,276 236,276 236,512 276,512 276,276 512,276 512,236 		" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                    <svg class="engoc-faq-icon-minus" version="1.1" id="Capa_{{ $key }}"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <rect y="236" width="512" height="40" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                    {{languageName($item->question)}}
                                </a>
                                <div class="collapse" id="faq_block_left_{{$key}}">
                                    <div class="card-body">
                                        {!! languageName($item->answer) !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function($) {
                $('.jstitleqs').on('click', function() {
                    $(this).toggleClass('engoc-toggle-icon');
                });

            })
        </script>
    </div>
@endsection
