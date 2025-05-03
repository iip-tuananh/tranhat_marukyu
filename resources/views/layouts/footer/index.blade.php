<div id="shopify-section-footer" class="shopify-section index-section">
    <!-- /sections/footer.liquid -->
    <footer class="footer_v1">
        <div class="top-footer">
            <div class="container container-v1">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="info_footer end">
                            <div class="logo-top">
                                <a href="{{route('home')}}" class="logo">
                                    <img src="{{url(''.$setting->logo)}}"
                                        width="135" alt="{{languageName($setting->company)}}" class="img-fluid" loading="lazy">
                                </a>
                            </div>
                            <p class="mb-0 content_footer">{{$setting->webname}} <br>
                                {{getLanguage('address')}}: {{$setting->address1}}<br>
                                {{getLanguage('address2')}}: {{$setting->address2}}<br>
                                Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                            </p>
                            <div class="list-icon">
                                <ul class="list-inline list-unstyled mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{$setting->instagram}}" title=""
                                            target="_blank" class="social-item"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{$setting->facebook}}" title="" target="_blank"
                                            class="social-item"><i class="fa fa-facebook-square"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{$setting->youtube}}" title="" target="_blank"
                                            class="social-item"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="info_footer">
                            <div class="title_footer">
                                <h4 class="mb-0 title_border">{{getLanguage('shop')}}</h4>
                            </div>
                            <ul class="list-unstyled mb-0">
                                @foreach ($categoryhome as $category)
                                <li><a href="{{route('allListProCate',['danhmuc' => $category->slug])}}" title="{{languageName($category->name)}}">{{languageName($category->name)}}</a>
                                </li>
                                @endforeach
                                @foreach ($type_cates as $type)
                                <li><a href="{{route('allListType',['danhmuc' => $type->cate_slug, 'loaidanhmuc' => $type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="info_footer">
                            <div class="title_footer">
                                <h4 class="mb-0 title_border">{{getLanguage('about_us')}}</h4>
                            </div>
                            <ul class="list-unstyled mb-0">
                                @foreach ($pageContent as $item)
                                <li><a href="{{route('pagecontent',['slug' => $item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></li>
                                @endforeach
                                @foreach ($blogCate as $item)
                                <li><a href="{{route('listCateBlog',['slug' => $item->slug])}}" title="{{languageName($item->name)}}">{{languageName($item->name)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="info_footer">
                            <div class="title_footer">
                                <h4 class="mb-0 title_border">{{getLanguage('customer_support')}}</h4>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{route('faq')}}" title="{{getLanguage('faq')}}">{{getLanguage('faq')}}</a></li>
                                @foreach ($customerSupport as $item)
                                <li><a href="{{route('pagecontent',['slug' => $item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></li>
                                @endforeach
                                <li><a href="{{route('contactUs')}}" title="{{getLanguage('contact_us')}}">{{getLanguage('contact_us')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container container-v1">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6  text-lg-left text-md-left">
                        <p class="text-copyright mb-0">
                        <div class="text-copyright mb-0">
                            © 2025 <a href="{{route('home')}}" rel="nofollow" target="_blank"
                                class="underline_hover bold">{{$setting->company}}.</a>
                        </div>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-lg-right text-md-right ">
                        <img src="{{url('frontend/images/payment.png')}}"
                            alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .footer_v1 .top-footer {
            background: #f5f8f2;
        }

        .footer_v1 .copyright {
            background: #f5f8f2;
        }

        .footer_v1 .top-footer .info_footer .title_border:after {
            background-color: #000000;
        }

        .footer_v1 .top-footer .info_footer h4 {
            color: #000000;
        }

        .footer_v1 .top-footer .info_footer ul li a {
            color: #000000;
        }

        .footer_v1 .top-footer .info_footer .content_footer {
            color: #000000;
        }

        .footer_v1 .copyright .text-copyright {
            color: #000000;
        }

        .footer_v1 .copyright .text-copyright a {
            color: #000000;
        }

        .footer_v1 .top-footer .info_footer.end .list-icon ul li a {
            color: #000000;
        }
    </style>
</div>
