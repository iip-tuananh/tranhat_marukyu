<div class="d-none d-md-block promo_topbar relative text-center"
    style="background-image : url(//osadateajapan.com/cdn/shop/files/Announcements_1920x150_372c7c1c-a4f0-440f-bb7d-bd6a9bf8972d.png?v=1671305991)">
    <div class=" relative">
        <span><em>{{getLanguage('try_right_japanese_tea_for_you')}}</em></span>
        <a href="{{route('contactUs')}}" class="btn_promo">{{getLanguage('contact_now')}}</a>
        <a href="#" class="absolute inline-block close_promo_topbar">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="12px"
                viewBox="0 0 12 12" enable-background="new 0 0 12 12" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.437,12c-0.014-0.017-0.026-0.035-0.042-0.051
                    c-1.78-1.78-3.562-3.561-5.342-5.342c-0.016-0.016-0.028-0.034-0.07-0.064c-0.01,0.02-0.016,0.045-0.031,0.06
                    c-1.783,1.784-3.566,3.567-5.35,5.352C0.587,11.968,0.576,11.984,0.563,12c-0.004,0-0.008,0-0.013,0
                    C0.367,11.816,0.184,11.633,0,11.449c0-0.004,0-0.009,0-0.013c0.017-0.014,0.035-0.026,0.051-0.041
                    c1.781-1.781,3.562-3.562,5.342-5.342c0.017-0.016,0.036-0.027,0.06-0.044c-0.025-0.026-0.04-0.043-0.056-0.058
                    C3.613,4.168,1.83,2.385,0.046,0.601C0.032,0.587,0.016,0.576,0,0.563c0-0.004,0-0.008,0-0.013C0.184,0.367,0.367,0.184,0.551,0
                    c0.004,0,0.008,0,0.013,0C0.578,0.017,0.59,0.035,0.606,0.05c1.78,1.781,3.561,3.562,5.341,5.342
                    c0.016,0.016,0.027,0.035,0.045,0.059c0.025-0.024,0.041-0.039,0.057-0.054c1.783-1.784,3.566-3.567,5.35-5.351
                    C11.413,0.032,11.424,0.016,11.437,0c0.004,0,0.009,0,0.013,0C11.633,0.184,11.816,0.367,12,0.551c0,0.004,0,0.008,0,0.013
                    c-0.017,0.014-0.035,0.027-0.051,0.042c-1.78,1.78-3.561,3.561-5.342,5.341c-0.016,0.016-0.035,0.026-0.054,0.04
                    c-0.004,0.01-0.007,0.021-0.011,0.03c0.021,0.01,0.045,0.017,0.06,0.031c1.784,1.783,3.567,3.566,5.352,5.35
                    c0.014,0.014,0.03,0.025,0.046,0.038c0,0.004,0,0.009,0,0.013c-0.184,0.184-0.367,0.367-0.551,0.551C11.445,12,11.44,12,11.437,12z" />
            </svg>
        </a>
    </div>
</div>
<div id="shopify-section-header" class="shopify-section index-section">
    <!-- /sections/header.liquid -->
    <header id="header"
        class="homepage header-v1-h1 js_height_hd jsheader_sticky d-none d-xl-block header-absolute ">
        <div class="container container-v1">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo">
                        <div class="center logo delay05">
                            <a href="{{ route('home') }}">
                                <img src="{{ url($setting->logo) }}" width="45" alt="{{ $setting->company }}" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <div class="menu right">
                        <nav class="navbar navbar-expand-lg navbar-light p-0 text-center justify-content-between">
                            <div class="collapse navbar-collapse justify-content-center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a href="{{ route('home') }}" title="{{getLanguage('home')}}"
                                            class="delay03  relative menu_lv1 nav-link">{{getLanguage('home')}}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" title="{{getLanguage('product')}}"
                                            class="delay03 nav-link  menu_lv1 ">{{getLanguage('product')}}</a>
                                        <div class="dropdown-menu list-woman page show">
                                            <div class="list-clothing">
                                                <ul class="mb-0 list-unstyled">
                                                    @foreach ($categoryhome as $category)
                                                    <li class="dropdownmenu_lv2 relative px-3">
                                                        <a href="{{route('allListProCate',['danhmuc' => $category->slug])}}" title="{{languageName($category->name)}}"
                                                            class="delay03 relative menu_lv1 ">{{languageName($category->name)}} <i
                                                                class="fa fa-angle-right right mt-1"></i></a>
                                                        @if ($category->typeCate->count() > 0)
                                                            <div class="dropdown-menu menu_lv2 show">
                                                                <div class="list-clothing">
                                                                    <ul class="px-0">
                                                                        @foreach ($category->typeCate as $type)
                                                                        <li class="list-unstyled px-3 py-1">
                                                                            <a href="{{route('allListType',['danhmuc' => $category->slug,'loaidanhmuc' => $type->slug])}}"
                                                                                title="{{languageName($type->name)}}"
                                                                                class=" relative menu_lv3 ">{{languageName($type->name)}}</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" title="{{getLanguage('about_us')}}"
                                            class="delay03 nav-link  menu_lv1 ">{{getLanguage('about_us')}}</a>
                                        <div class="dropdown-menu list-woman page show">
                                            <div class="list-clothing">
                                                <ul class="mb-0 list-unstyled">
                                                    @foreach ($pageContent as $item)
                                                    <li class="px-3">
                                                        <a href="{{route('pagecontent',['slug' => $item->slug])}}" title="{{languageName($item->title)}}"
                                                            class=" relative menu_lv1 ">{{languageName($item->title)}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" title="{{getLanguage('blogs')}}"
                                            class="delay03 nav-link  menu_lv1 ">{{getLanguage('blogs')}}</a>
                                        <div class="dropdown-menu list-woman page show">
                                            <div class="list-clothing">
                                                <ul class="mb-0 list-unstyled">
                                                    @foreach ($blogCate as $item)
                                                    <li class="px-3">
                                                        <a href="{{route('listCateBlog',['slug' => $item->slug])}}" title="{{languageName($item->name)}}"
                                                            class=" relative menu_lv1 ">{{languageName($item->name)}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('faq')}}" title="{{getLanguage('faq')}}"
                                            class="delay03  relative menu_lv1 nav-link">{{getLanguage('faq')}}</a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a href="/en-vn/collections/materials" title="Contents"
                                            class="delay03  relative menu_lv1 nav-link">Contents</a>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a href="{{route('contactUs')}}" title="{{getLanguage('contact_us')}}"
                                            class="delay03  relative menu_lv1 nav-link">{{getLanguage('contact_us')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 currencies-login">
                    <div class="cart-login-search align-items-center">
                        <ul class="list-inline list-unstyled mb-0">
                            <li class="list-inline-item mr-0">
                                <a href="javascript:void(0)" class="search js-search-destop">
                                    <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 400 400" height="400"
                                        width="400" id="svg2" version="1.1"
                                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                                        xmlns:cc="http://creativecommons.org/ns#"
                                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve">
                                        <metadata id="metadata8">
                                            <rdf>
                                                <work rdf:about="">
                                                    <format>image/svg+xml</format>
                                                    <type rdf:resource="http://purl.org/dc/dcmitype/StillImage">
                                                    </type>
                                                </work>
                                            </rdf>
                                        </metadata>
                                        <defs id="defs6"></defs>
                                        <g transform="matrix(1.3333333,0,0,-1.3333333,0,400)" id="g10">
                                            <g transform="scale(0.1)" id="g12">
                                                <path id="path14"
                                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                    d="m 1312.7,795.5 c -472.7,0 -857.204,384.3 -857.204,856.7 0,472.7 384.504,857.2 857.204,857.2 472.7,0 857.3,-384.5 857.3,-857.2 0,-472.4 -384.6,-856.7 -857.3,-856.7 z M 2783.9,352.699 2172.7,963.898 c 155.8,194.702 241.5,438.602 241.5,688.302 0,607.3 -494.1,1101.4 -1101.5,1101.4 -607.302,0 -1101.399,-494.1 -1101.399,-1101.4 0,-607.4 494.097,-1101.501 1101.399,-1101.501 249.8,0 493.5,85.5 687.7,241 L 2611.7,181 c 23,-23 53.6,-35.699 86.1,-35.699 32.4,0 63,12.699 86,35.699 23.1,22.801 35.8,53.301 35.8,85.898 0,32.602 -12.7,63 -35.7,85.801">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0 language-select">
                                @if (session()->get('locale') == 'vi')
                                    <a href="javascript:void(0)" class="language-display">
                                        <img src="{{asset('frontend/images/Vietnam.svg')}}" alt="Vietnamese" loading="lazy" width="30" height="30">
                                        {{getLanguage('vietnamese')}}
                                    </a>
                                @elseif (session()->get('locale') == 'en-US')
                                    <a href="javascript:void(0)" class="language-display">
                                        <img src="{{asset('frontend/images/United-Kingdom.svg')}}" alt="English" loading="lazy" width="25" height="25">
                                        {{getLanguage('english')}}
                                    </a>
                                @else
                                    <a href="javascript:void(0)" class="language-display">
                                        <img src="{{asset('frontend/images/Japan.svg')}}" alt="Japanese" loading="lazy" width="30" height="30">
                                        {{getLanguage('japanese')}}
                                    </a>
                                @endif
                                <div class="dropdown-menu list-language-display">
                                    <div class="language-item-display">
                                        <a href="{{route('languages')}}?code=en-US" class="choose-language-item">
                                            <img src="{{asset('frontend/images/United-Kingdom.svg')}}" alt="English" loading="lazy" width="20" height="20">
                                            {{getLanguage('english')}}
                                        </a>
                                        <a href="{{route('languages')}}?code=vi" class="choose-language-item">
                                            <img src="{{asset('frontend/images/Vietnam.svg')}}" alt="Vietnamese" loading="lazy" width="20" height="20">
                                            {{getLanguage('vietnamese')}}
                                        </a>
                                        <a href="{{route('languages')}}?code=ja-JP" class="choose-language-item">
                                            <img src="{{asset('frontend/images/Japan.svg')}}" alt="Japanese" loading="lazy" width="20" height="20">
                                            {{getLanguage('japanese')}}
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <script>
                                $(document).ready(function() {
                                    $('.language-select').click(function() {
                                        $('.list-language-display').toggleClass('show');
                                    });
                                    $('.choose-language-item').click(function() {
                                        $('.list-language-display').removeClass('show');
                                    });
                                });
                            </script>
                            <li class="list-inline-item mr-0">
                                <a href="javascript:void(0)" class="cart js-call-minicart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 297.78668 398.66666"
                                        height="398.66666" width="297.78668" id="svg2" version="1.1"
                                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                                        xmlns:cc="http://creativecommons.org/ns#"
                                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve">
                                        <metadata id="metadata8">
                                            <rdf>
                                                <work rdf:about="">
                                                    <format>image/svg+xml</format>
                                                    <type rdf:resource="http://purl.org/dc/dcmitype/StillImage">
                                                    </type>
                                                </work>
                                            </rdf>
                                        </metadata>
                                        <defs id="defs6"></defs>
                                        <g transform="matrix(1.3333333,0,0,-1.3333333,0,398.66667)" id="g10">
                                            <g transform="scale(0.1)" id="g12">
                                                <path id="path14"
                                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                    d="M 2233.36,2432.71 H 0 V 0 h 2233.36 v 2432.71 z m -220,-220 V 220 H 220.004 V 2212.71 H 2021.36">
                                                </path>
                                                <path xmlns="http://www.w3.org/2000/svg" id="path16"
                                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                    d="m 1116.68,2990 v 0 C 755.461,2990 462.637,2697.18 462.637,2335.96 V 2216.92 H 1770.71 v 119.04 c 0,361.22 -292.82,654.04 -654.03,654.04 z m 0,-220 c 204.58,0 376.55,-142.29 422.19,-333.08 H 694.492 C 740.117,2627.71 912.102,2770 1116.68,2770">
                                                </path>
                                                <path xmlns="http://www.w3.org/2000/svg" id="path18"
                                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                    d="M 1554.82,1888.17 H 678.543 v 169.54 h 876.277 v -169.54">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="js-number-cart number-cart "></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header>
    <script>
        jQuery(document).ready(function($) {

            function hexToRgb(hex) {
                var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                    r: parseInt(result[1], 16),
                    g: parseInt(result[2], 16),
                    b: parseInt(result[3], 16)
                } : null;
            }
            var r = (hexToRgb("#ffffff").r);
            var g = (hexToRgb("#ffffff").g);
            var b = (hexToRgb("#ffffff").b)

            function menudestopscroll1() {
                var $nav = $(".jsheader_sticky");
                $nav.removeClass('menu_scroll_v1');

                $(document).scroll(function() {

                    $nav.toggleClass('menu_scroll_v1', $(this).scrollTop() > $nav.height());
                    var r = (hexToRgb("#ffffff").r);
                    var g = (hexToRgb("#ffffff").g);
                    var b = (hexToRgb("#ffffff").b)
                    $('.header-v1-h1.menu_scroll_v1').css({
                        'background': 'rgba(' + r + ' ,' + g + ',' + b + ',1)'
                    });

                    if ($(this).scrollTop() < $nav.height()) {
                        $('.header-v1-h1').css({
                            'background': 'none'
                        });
                        $nav.removeClass('menu_scroll_v1')
                    }

                });
            }
            menudestopscroll1();
        });
    </script>
    <style>
        #header .menu ul li .nav-link {
            color: #010101;
        }

        #header .currencies-login .cart-login-search ul li a svg {
            fill: #010101;
        }

        #header .currencies-login .cart-login-search ul li a i {
            color: #010101;
        }

        #header .currencies-login .cart-login-search ul li a svg {
            fill: #010101;
        }

        #header .currencies-login .cart-login-search ul li .cart .number-cart {
            color: #010101;
        }

        .header-v1-h1.menu_scroll_v1 {
            background-color: rgba(#ffffff, 1);
        }
        .language-select {
            position: relative;
        }
        .language-select .language-display {
            display: flex;
            align-items: center;
            justify-content: center;
            justify-items: center;
            gap: 2px;
        }
        .list-language-display {
            display: none;
        }
        .list-language-display.show {
            display: block;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            background-color: #fff;
            border-radius: 5px;
        }
        .list-language-display .language-item-display {
            display: flex;
            gap: 10px;
            padding: 0 10px;
            flex-flow: column;
        }
    </style>
</div>
<div class="search-full-destop">
    <div class="search-eveland js-box-search">
        <div class="drawer-search-top">
            <h3 class="drawer-search-title">Start typing and hit Enter</h3>
        </div>
        <form class="wg-search-form" action="/search">
            <input type="hidden" name="type" value="product">
            <input type="text" name="q" placeholder="Search anything"
                class="search-input js_engo_autocomplate">
            <button type="submit" class="set-20-svg">
                <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 400 400" height="400" width="400"
                    id="svg2" version="1.1" xmlns:dc="http://purl.org/dc/elements/1.1/"
                    xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                    xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve">
                    <metadata id="metadata8">
                        <rdf>
                            <work rdf:about="">
                                <format>image/svg+xml</format>
                                <type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></type>
                            </work>
                        </rdf>
                    </metadata>
                    <defs id="defs6"></defs>
                    <g transform="matrix(1.3333333,0,0,-1.3333333,0,400)" id="g10">
                        <g transform="scale(0.1)" id="g12">
                            <path id="path14" style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                d="m 1312.7,795.5 c -472.7,0 -857.204,384.3 -857.204,856.7 0,472.7 384.504,857.2 857.204,857.2 472.7,0 857.3,-384.5 857.3,-857.2 0,-472.4 -384.6,-856.7 -857.3,-856.7 z M 2783.9,352.699 2172.7,963.898 c 155.8,194.702 241.5,438.602 241.5,688.302 0,607.3 -494.1,1101.4 -1101.5,1101.4 -607.302,0 -1101.399,-494.1 -1101.399,-1101.4 0,-607.4 494.097,-1101.501 1101.399,-1101.501 249.8,0 493.5,85.5 687.7,241 L 2611.7,181 c 23,-23 53.6,-35.699 86.1,-35.699 32.4,0 63,12.699 86,35.699 23.1,22.801 35.8,53.301 35.8,85.898 0,32.602 -12.7,63 -35.7,85.801">
                            </path>
                        </g>
                    </g>
                </svg>
            </button>
        </form>
        <div class="drawer_back">
            <a href="javascript:void(0)" class="close-search js-drawer-close set-16-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 298.667 298.667"
                    style="enable-background:new 0 0 298.667 298.667;" xml:space="preserve">
                    <g>
                        <g>
                            <polygon
                                points="298.667,30.187 268.48,0 149.333,119.147 30.187,0 0,30.187 119.147,149.333 0,268.48 30.187,298.667     149.333,179.52 268.48,298.667 298.667,268.48 179.52,149.333   ">
                            </polygon>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="result_prod js_productSearchResults">
            <div class="js_search_results row">
            </div>
        </div>
    </div>
    <div class="bg_search_box">
    </div>
</div>
<div class="js-minicart minicart">
    <div class="relative" style="height: 100%;">
        <div class="mini-content ">
            <div class="mini-cart-head">
                <a href="javascript:void(0)" class="mini-cart-undo close-mini-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Capa_1" x="0px" y="0px" viewBox="0 0 298.667 298.667"
                        style="enable-background:new 0 0 298.667 298.667;" xml:space="preserve">
                        <g>
                            <g>
                                <polygon
                                    points="298.667,30.187 268.48,0 149.333,119.147 30.187,0 0,30.187 119.147,149.333 0,268.48 30.187,298.667     149.333,179.52 268.48,298.667 298.667,268.48 179.52,149.333   " />
                            </g>
                        </g>
                    </svg>
                </a>
                <h3 class="title">Shopping Cart</h3>
                <div class="mini-cart-counter"><span class="cart-counter enj-cartcount">0</span></div>
            </div>
            <div class="mini-cart-bottom enj-minicart-ajax">
                <div class="list_product_minicart empty">
                    <div class="empty-product_minicart">
                        <p class="mb-0">Your shopping bag is empty</p>
                        <a href="/collections/all" class="to-cart">Go to the shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="js-bg bg-minicart"></div>
<div class="menu_moblie d-flex d-xl-none jsmenumobile align-items-center ">
    <a href="javascript:void(0)" title="" class="menuleft">
        <span class="iconmenu">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
    <div class="logo_menumoblie">
        <a href="{{route('home')}}">
            <img src="{{url($setting->logo)}}"
                width="35" alt="logo" loading="lazy">
        </a>
    </div>
    <div class="menuright">
        <span class="pr-3 js-search-destop">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 400 400" height="400" width="400"
                id="svg2" version="1.1" xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve">
                <metadata id="metadata8">
                    <rdf>
                        <work rdf:about="">
                            <format>image/svg+xml</format>
                            <type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></type>
                        </work>
                    </rdf>
                </metadata>
                <defs id="defs6"></defs>
                <g transform="matrix(1.3333333,0,0,-1.3333333,0,400)" id="g10">
                    <g transform="scale(0.1)" id="g12">
                        <path id="path14" style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none"
                            d="m 1312.7,795.5 c -472.7,0 -857.204,384.3 -857.204,856.7 0,472.7 384.504,857.2 857.204,857.2 472.7,0 857.3,-384.5 857.3,-857.2 0,-472.4 -384.6,-856.7 -857.3,-856.7 z M 2783.9,352.699 2172.7,963.898 c 155.8,194.702 241.5,438.602 241.5,688.302 0,607.3 -494.1,1101.4 -1101.5,1101.4 -607.302,0 -1101.399,-494.1 -1101.399,-1101.4 0,-607.4 494.097,-1101.501 1101.399,-1101.501 249.8,0 493.5,85.5 687.7,241 L 2611.7,181 c 23,-23 53.6,-35.699 86.1,-35.699 32.4,0 63,12.699 86,35.699 23.1,22.801 35.8,53.301 35.8,85.898 0,32.602 -12.7,63 -35.7,85.801">
                        </path>
                    </g>
                </g>
            </svg>
        </span>
        <a href="javascript:void(0)" title="" class="js-call-minicart">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 400 400" height="400" width="400"
                id="svg2" version="1.1" xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve">
                <metadata id="metadata8">
                    <rdf>
                        <work rdf:about="">
                            <format>image/svg+xml</format>
                            <type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></type>
                        </work>
                    </rdf>
                </metadata>
                <defs id="defs6"></defs>
                <g transform="matrix(1.3333333,0,0,-1.3333333,0,400)" id="g10">
                    <g transform="scale(0.1)" id="g12">
                        <path id="path14" style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none"
                            d="M 2565.21,2412.71 H 450.992 V 0 H 2565.21 V 2412.71 Z M 2366.79,2214.29 V 198.43 H 649.418 V 2214.29 H 2366.79">
                        </path>
                        <path id="path16" style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none"
                            d="m 1508.11,2990 h -0.01 c -361.22,0 -654.037,-292.82 -654.037,-654.04 V 2216.92 H 2162.14 v 119.04 c 0,361.22 -292.82,654.04 -654.03,654.04 z m 0,-198.43 c 224.16,0 411.02,-162.7 448.69,-376.23 h -897.39 c 37.66,213.53 224.53,376.23 448.7,376.23">
                        </path>
                        <path id="path18" style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none"
                            d="m 1946.24,1868.17 h -876.27 v 169.54 h 876.27 v -169.54"></path>
                    </g>
                </g>
            </svg>
            <span class="count_pr_incart enj-cartcount">0</span>
        </a>
    </div>
</div>
<div class="box_contentmenu_background"></div>
<div class="box_contentmenu">
    <div class="tab_content_menu_mobile">
        <ul class="nav nav-tabs toptab_box_content list-unstyled mb-0" role="tablist">
            <li class="toptab_li">
                <a class="tab_navar active" href="#tab_menu_mobile" role="tab" data-toggle="tab">
                    <span class="tab-menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="ml-3">Menu</span>
                </a>
            </li>
            <li class="toptab_li">
                <a class="tab_navar" href="#tab_language" role="tab" data-toggle="tab">
                    <span class="ml-3">{{getLanguage('language')}}</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane show in active tab_children_menu" id="tab_menu_mobile">
                <div class="menu-horizon-list ">
                    <a href="{{route('home')}}" title="{{getLanguage('home')}}" class="nammenu w-100 menu_lv1 "><span>{{getLanguage('home')}}</span></a>
                </div>
                <div class="menu-horizon-list">
                    <a href="javascript:void(0)" title="{{getLanguage('product')}}" class="relative nammenu ">{{getLanguage('product')}}</a>
                    <a data-check="c1" class="toggle-menumobile  js_icon_horizon-menu">
                        <i class=" fa fa-angle-right"></i>
                    </a>
                    <div class="c1 menu_lv2">
                        <a href="javascript:void(0)" title="{{getLanguage('product')}}" class="js-back back-to"> {{getLanguage('product')}} <i
                                class="fa fa-angle-right pl-2 "></i> </a>
                        @foreach ($categoryhome as $item)
                        <h2 class="title_menu_mb relative">
                            <a href="{{route('allListProCate',['danhmuc' => $item->slug])}}" title="{{languageName($item->name)}}"
                                class="delay03 uppercase menu_lv1 "><span>{{languageName($item->name)}}</span></a>
                        </h2>
                        @if ($item->typeCate->count() > 0)
                        <ul class="list-unstyled mb-0 menu_lv3">
                            @foreach ($item->typeCate as $type)
                            <li>
                                <a href="{{route('allListType',['danhmuc' => $item->slug,'loaidanhmuc' => $type->slug])}}" title="{{languageName($type->name)}}"
                                    class="delay03 uppercase menu_lv1 "><span>{{languageName($type->name)}}</span></a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="menu-horizon-list">
                    <a href="javascript:void(0)" title="{{getLanguage('about_us')}}" class="relative nammenu ">{{getLanguage('about_us')}}</a>
                    <a data-check="c2" class="toggle-menumobile  js_icon_horizon-menu">
                        <i class=" fa fa-angle-right"></i>
                    </a>
                    <div class="c2 menu_lv2">
                        <a href="javascript:void(0)" title="{{getLanguage('about_us')}}" class="js-back back-to"> {{getLanguage('about_us')}} <i
                                class="fa fa-angle-right pl-2 "></i> </a>
                        @foreach ($pageContent as $item)
                        <h2 class="title_menu_mb title_only_one"><a href="{{route('pagecontent',['slug' => $item->slug])}}">{{languageName($item->title)}}</a></h2>
                        @endforeach
                    </div>
                </div>
                <div class="menu-horizon-list">
                    <a href="javascript:void(0)" title="{{getLanguage('blogs')}}" class="relative nammenu ">{{getLanguage('blogs')}}</a>
                    <a data-check="c3" class="toggle-menumobile  js_icon_horizon-menu">
                        <i class=" fa fa-angle-right"></i>
                    </a>
                    <div class="c3 menu_lv2">
                        <a href="javascript:void(0)" title="{{getLanguage('blogs')}}" class="js-back back-to"> {{getLanguage('blogs')}} <i
                                class="fa fa-angle-right pl-2 "></i> </a>
                        @foreach ($blogCate as $item)
                        <h2 class="title_menu_mb title_only_one"><a href="{{route('listCateBlog',['slug' => $item->slug])}}">{{languageName($item->name)}}</a></h2>
                        @endforeach
                    </div>
                </div>
                <div class="menu-horizon-list ">
                    <a href="{{route('faq')}}" title="{{getLanguage('faq')}}"
                        class="nammenu w-100 menu_lv1 "><span>{{getLanguage('faq')}}</span></a>
                </div>
                {{-- <div class="menu-horizon-list ">
                    <a href="/en-vn/collections/materials" title="Contents"
                        class="nammenu w-100 menu_lv1 "><span>Contents</span></a>
                </div> --}}
                <div class="menu-horizon-list ">
                    <a href="{{route('contactUs')}}" title="{{getLanguage('contact_us')}}"
                        class="nammenu w-100 menu_lv1 "><span>{{getLanguage('contact_us')}}</span></a>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_language">
                <div class="language-list ">
                    <div class="language-item">
                        <a href="{{route('languages')}}?code=en-US">
                            <img src="{{asset('frontend/images/United-Kingdom.svg')}}" alt="English" loading="lazy" width="30" height="30">
                            {{getLanguage('english')}}
                        </a>
                    </div>
                    <div class="language-item">
                        <a href="{{route('languages')}}?code=vi">
                            <img src="{{asset('frontend/images/Vietnam.svg')}}" alt="Vietnamese" loading="lazy" width="30" height="30">
                            {{getLanguage('vietnamese')}}
                        </a>
                    </div>
                    <div class="language-item">
                        <a href="{{route('languages')}}?code=ja-JP">
                            <img src="{{asset('frontend/images/Japan.svg')}}" alt="Japanese" loading="lazy" width="30" height="30">
                            {{getLanguage('japanese')}}
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="close-menu-mobile text-center js-eveland-close">
            Close
        </div>
    </div>
</div>
<div class="bg-login-popup js-bg-login-popup"></div>
<style>
    .language-list {
        display: flex;
        gap: 10px;
        justify-content: center;
        flex-flow: column;
        padding: 10px;
    }
    .language-item {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .language-item img {
        margin-right: 10px;
    }
</style>