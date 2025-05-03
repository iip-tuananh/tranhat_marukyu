@extends('layouts.main.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    Danh sách {{ $title }}
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('js')
@endsection
@section('css')
<style>
    #shopify-section-template--16764744270135__collection_template {
        padding-top: 150px;
    }
    @media(max-width: 768px) {
        #shopify-section-template--16764744270135__collection_template {
            padding-top: 0px;
        }
    }
</style>
@endsection
@section('content')
    <div id="shopify-section-template--16764744270135__collection_template" class="shopify-section">
        <!-- collection-template.liquid -->
        <div class="wrap-bread-crumb breadcrumb_collection style1">
            <div class="text-center bg_bread " style="background-color : #5A8C34">
                <div class="title-page">
                    <h2 class="">{{$title}}</h2>
                </div>
                <!-- /snippets/breadcrumb.liquid -->
                <div class="bread-crumb">
                    <a href="{{route('home')}}" title="Back to the frontpage">{{getLanguage('home')}}<i class="fa fa-angle-right"
                            aria-hidden="true"></i></a>
                    <strong>{{$title}}</strong>
                </div>
            </div>
        </div>
        <style>
            .breadcrumb_collection .title-page h2 {
                color: #ffffff !important;
            }

            .breadcrumb_collection .bread-crumb a {
                color: #ffffff !important;
            }

            .breadcrumb_collection .bread-crumb a i {
                color: #ffffff !important;
            }

            .breadcrumb_collection .bread-crumb strong {
                color: #ffffff !important;
            }

            @media(min-width : 992px) {
                .breadcrumb_collection .bg-breadcrumb {
                    padding: 170px 0 190px
                }
            }
        </style>
        <section class="collection-page-fullwidth collection-bg-modern "
            style="background-image : url(//osadateajapan.com/cdn/shop/files/1920x2400.png?v=1671824714">
            <div class="filter-to-left">
                <div class="filter_sidebar">
                    <div class="close_filter set-16-svg">
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
                    </div>
                    <div style="overflow: hidden" class=" engoj-collection-sidebar engoc_sw_filter_tag">
                        <div class="widget widget-tags filter-tag">
                            <div class="widget-title">
                                <h2 class=" mb-0 ">Tags</h2>
                            </div>
                            <ul class="list-none wg-list-tags list-tag">
                                <li>
                                    <input type="checkbox" value="2nd-harvest-or-after" />
                                    <a href="javascript:void(0)" title="2nd Harvest or After" class=" ">2nd Harvest or
                                        After</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="annual-produce-over-1000kg" />
                                    <a href="javascript:void(0)" title="Annual Produce Over 1000KG" class=" ">Annual
                                        Produce Over 1000KG</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="annual-produce-under-50kg" />
                                    <a href="javascript:void(0)" title="Annual Produce Under 50KG" class=" ">Annual
                                        Produce Under 50KG</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="asamushi" />
                                    <a href="javascript:void(0)" title="Asamushi" class=" ">Asamushi</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="award" />
                                    <a href="javascript:void(0)" title="Award" class=" ">Award</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="black-tea" />
                                    <a href="javascript:void(0)" title="Black Tea" class=" ">Black Tea</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="ceremonial" />
                                    <a href="javascript:void(0)" title="Ceremonial" class=" ">Ceremonial</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="curly-shape" />
                                    <a href="javascript:void(0)" title="Curly Shape" class=" ">Curly Shape</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="dark-tea" />
                                    <a href="javascript:void(0)" title="Dark Tea" class=" ">Dark Tea</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="evening-recommend" />
                                    <a href="javascript:void(0)" title="Evening Recommend" class=" ">Evening
                                        Recommend</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="fermentation" />
                                    <a href="javascript:void(0)" title="Fermentation" class=" ">Fermentation</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="first-flush" />
                                    <a href="javascript:void(0)" title="First Flush" class=" ">First Flush</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="fresh-grassy" />
                                    <a href="javascript:void(0)" title="Fresh Grassy" class=" ">Fresh Grassy</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="freshness" />
                                    <a href="javascript:void(0)" title="Freshness" class=" ">Freshness</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="fukamushi" />
                                    <a href="javascript:void(0)" title="Fukamushi" class=" ">Fukamushi</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="genmaicha" />
                                    <a href="javascript:void(0)" title="Genmaicha" class=" ">Genmaicha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="gyokuro" />
                                    <a href="javascript:void(0)" title="Gyokuro" class=" ">Gyokuro</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="hand-picked" />
                                    <a href="javascript:void(0)" title="Hand Picked" class=" ">Hand Picked</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="herbal-aroma" />
                                    <a href="javascript:void(0)" title="Herbal Aroma" class=" ">Herbal Aroma</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="higher-astringency" />
                                    <a href="javascript:void(0)" title="Higher Astringency" class=" ">Higher
                                        Astringency</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="higher-roasted" />
                                    <a href="javascript:void(0)" title="Higher Roasted" class=" ">Higher Roasted</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="hojicha" />
                                    <a href="javascript:void(0)" title="Hojicha" class=" ">Hojicha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="kabusecha" />
                                    <a href="javascript:void(0)" title="Kabusecha" class=" ">Kabusecha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="kamairicha" />
                                    <a href="javascript:void(0)" title="Kamairicha" class=" ">Kamairicha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="kukicha" />
                                    <a href="javascript:void(0)" title="Kukicha" class=" ">Kukicha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="leaf" />
                                    <a href="javascript:void(0)" title="Leaf" class=" ">Leaf</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="less-caffeine" />
                                    <a href="javascript:void(0)" title="Less Caffeine" class=" ">Less Caffeine</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="matcha" />
                                    <a href="javascript:void(0)" title="Matcha" class=" ">Matcha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="milky" />
                                    <a href="javascript:void(0)" title="Milky" class=" ">Milky</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="millstone" />
                                    <a href="javascript:void(0)" title="Millstone" class=" ">Millstone</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="morning-recommend" />
                                    <a href="javascript:void(0)" title="Morning Recommend" class=" ">Morning
                                        Recommend</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="oem-recommend" />
                                    <a href="javascript:void(0)" title="OEM Recommend" class=" ">OEM Recommend</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="oolong-tea" />
                                    <a href="javascript:void(0)" title="Oolong Tea" class=" ">Oolong Tea</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="organic" />
                                    <a href="javascript:void(0)" title="Organic" class=" ">Organic</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="pan-fired" />
                                    <a href="javascript:void(0)" title="Pan-Fired" class=" ">Pan-Fired</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="powder" />
                                    <a href="javascript:void(0)" title="Powder" class=" ">Powder</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="powdery-fine-leaves" />
                                    <a href="javascript:void(0)" title="Powdery Fine Leaves" class=" ">Powdery Fine
                                        Leaves</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="rarity-cultivar" />
                                    <a href="javascript:void(0)" title="Rarity Cultivar" class=" ">Rarity
                                        Cultivar</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="refreshment" />
                                    <a href="javascript:void(0)" title="Refreshment" class=" ">Refreshment</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="richness" />
                                    <a href="javascript:void(0)" title="Richness" class=" ">Richness</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="sencha" />
                                    <a href="javascript:void(0)" title="Sencha" class=" ">Sencha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="single-origin" />
                                    <a href="javascript:void(0)" title="Single Origin" class=" ">Single Origin</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="tamaryokucha" />
                                    <a href="javascript:void(0)" title="Tamaryokucha" class=" ">Tamaryokucha</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="traditional-japanese-style" />
                                    <a href="javascript:void(0)" title="Traditional Japanese Style"
                                        class=" ">Traditional Japanese Style</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="traditional-needle-shape" />
                                    <a href="javascript:void(0)" title="Traditional Needle Shape"
                                        class=" ">Traditional Needle Shape</a>
                                </li>
                                <li>
                                    <input type="checkbox" value="umami-flavor" />
                                    <a href="javascript:void(0)" title="UMAMI Flavor" class=" ">UMAMI Flavor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- #secondary -->
                </div>
            </div>
            <div class=" container container-v1">
                <div class="content-page">
                    {{-- <div class="container container-v2 list_col">
                        <div class="justify-content-center d-flex">
                            <div class="cate_collection col-lg-10">
                                <div class="row js_col_breacrumb">
                                    <div class="col-12 col_item  active ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/all-teas">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xALL_copy.png?v=1672262518 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/all-teas">All Teas</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/matcha">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xmat.png?v=1672262123 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/matcha">Matcha</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/sencha">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xSen.png?v=1672262123 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/sencha">Sencha</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/oolong-tea">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xOo.png?v=1672262123 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/oolong-tea">Oolong Tea</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/kamairicha">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xKam.png?v=1672262123 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/kamairicha">Kamairicha</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/yamabuki">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110xYam.png?v=1672262123 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/yamabuki">Yamabuki</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col_item ">
                                        <div class="img_coll">
                                            <a href="/en-vn/collections/black-tea">
                                                <img class="w-100" alt="section.settings.img_banner"
                                                    src=" //osadateajapan.com/cdn/shop/files/110x110_06.png?v=1672352147 ">
                                            </a>
                                        </div>
                                        <div class="title_coll text-center">
                                            <a style="color: #000" href="/en-vn/collections/black-tea">Black Tea</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="">
                        <div class="row shop_control  ">
                            <div class="col-lg-8 col-md-6 col-6">
                                {{-- <div class="filter_sortby title_filter pl-0 d-none d-xl-block">
                                    <a class="filter d-inline-flex  js-draw-filter-btn " href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="393pt"
                                            viewBox="-4 0 393 393.99003" width="393pt">
                                            <path
                                                d="m368.3125 0h-351.261719c-6.195312-.0117188-11.875 3.449219-14.707031 8.960938-2.871094 5.585937-2.3671875 12.3125 1.300781 17.414062l128.6875 181.28125c.042969.0625.089844.121094.132813.183594 4.675781 6.3125 7.203125 13.957031 7.21875 21.816406v147.796875c-.027344 4.378906 1.691406 8.582031 4.777344 11.6875 3.085937 3.105469 7.28125 4.847656 11.65625 4.847656 2.226562 0 4.425781-.445312 6.480468-1.296875l72.3125-27.574218c6.480469-1.976563 10.78125-8.089844 10.78125-15.453126v-120.007812c.011719-7.855469 2.542969-15.503906 7.214844-21.816406.042969-.0625.089844-.121094.132812-.183594l128.683594-181.289062c3.667969-5.097657 4.171875-11.820313 1.300782-17.40625-2.832032-5.511719-8.511719-8.9726568-14.710938-8.960938zm-131.53125 195.992188c-7.1875 9.753906-11.074219 21.546874-11.097656 33.664062v117.578125l-66 25.164063v-142.742188c-.023438-12.117188-3.910156-23.910156-11.101563-33.664062l-124.933593-175.992188h338.070312zm0 0" />
                                        </svg>
                                        <p class="mb-0">filter</p>
                                    </a>
                                </div>
                                <div class="filter_sortby title_filter pl-0 d-flex d-xl-none">
                                    <a class="filter d-inline-flex js_filter " href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="393pt"
                                            viewBox="-4 0 393 393.99003" width="393pt">
                                            <path
                                                d="m368.3125 0h-351.261719c-6.195312-.0117188-11.875 3.449219-14.707031 8.960938-2.871094 5.585937-2.3671875 12.3125 1.300781 17.414062l128.6875 181.28125c.042969.0625.089844.121094.132813.183594 4.675781 6.3125 7.203125 13.957031 7.21875 21.816406v147.796875c-.027344 4.378906 1.691406 8.582031 4.777344 11.6875 3.085937 3.105469 7.28125 4.847656 11.65625 4.847656 2.226562 0 4.425781-.445312 6.480468-1.296875l72.3125-27.574218c6.480469-1.976563 10.78125-8.089844 10.78125-15.453126v-120.007812c.011719-7.855469 2.542969-15.503906 7.214844-21.816406.042969-.0625.089844-.121094.132812-.183594l128.683594-181.289062c3.667969-5.097657 4.171875-11.820313 1.300782-17.40625-2.832032-5.511719-8.511719-8.9726568-14.710938-8.960938zm-131.53125 195.992188c-7.1875 9.753906-11.074219 21.546874-11.097656 33.664062v117.578125l-66 25.164063v-142.742188c-.023438-12.117188-3.910156-23.910156-11.101563-33.664062l-124.933593-175.992188h338.070312zm0 0" />
                                        </svg>
                                        <p class="mb-0">filter</p>
                                    </a>
                                </div> --}}
                            </div>
                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="change_prod">
                                    <div class="change_collum">
                                        <div class="icon_change">
                                        </div>
                                        <div class="prod_per">
                                            <a href="javascript:void(0)" class="size_2">2</a>
                                            <a href="javascript:void(0)" class="size_3">3</a>
                                            <a href="javascript:void(0)" class="size_4">4</a>
                                            <a href="javascript:void(0)" class="size_5 ">5</a>
                                        </div>
                                    </div>
                                    <div class="style_layout_prod  justify-content-md-end justify-content-center ">
                                        <!-- /snippets/collection-sorting.liquid -->
                                        <div class="collection-sorting form-horizontal form-group pull-right text-right">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" data-toggle="dropdown"
                                                    id="dropdownMenuLink">
                                                    <span class="dropdown-label">Default sorting</span>
                                                </button>
                                                <ul class="dropdown-content dropdown-menu"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <li class="active"><a href="manual">Default sorting</a></li>
                                                    <li><a href="best-selling">Best Selling</a></li>
                                                    <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                                    <li><a href="price-descending">Price, high to low</a></li>
                                                    <li><a href="price-ascending">Price, low to high</a></li>
                                                    <li><a href="created-ascending">Date, old to new</a></li>
                                                    <li><a href="created-descending">Date, new to old</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <script>
                                            /*============================================================================
                                                                         Inline JS because collection liquid object is only available
                                                                         on collection pages and not external JS files
                                                                       ==============================================================================*/
                                            Shopify.queryParams = {};
                                            if (location.search.length) {
                                                for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                                    aKeyValue = aCouples[i].split('=');
                                                    if (aKeyValue.length > 1) {
                                                        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                                    }
                                                }
                                            }

                                            $(function() {
                                                $('#SortBy')
                                                    .val('title-ascending')
                                                    .bind('change', function() {
                                                        Shopify.queryParams.sort_by = jQuery(this).val();
                                                        location.search = jQuery.param(Shopify.queryParams);
                                                    });
                                                $('#showby')
                                                    .val('12')
                                                    .bind('change', function() {
                                                        Shopify.queryParams.view = jQuery(this).val();
                                                        location.search = jQuery.param(Shopify.queryParams);
                                                    });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="draw_filter trans_product js-draw-filter ">
                                <div class="filter_sidebar_general d-none d-lg-block ">
                                    <div style="overflow: hidden" class=" engoj-collection-sidebar engoc_sw_filter_tag">
                                        <div class="widget widget-tags filter-tag">
                                            <div class="widget-title">
                                                <h2 class=" mb-0 ">Tags</h2>
                                            </div>
                                            <ul class="list-none wg-list-tags list-tag">
                                                <li>
                                                    <input type="checkbox" value="2nd-harvest-or-after" />
                                                    <a href="javascript:void(0)" title="2nd Harvest or After"
                                                        class=" ">2nd Harvest or After</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="annual-produce-over-1000kg" />
                                                    <a href="javascript:void(0)" title="Annual Produce Over 1000KG"
                                                        class=" ">Annual Produce Over 1000KG</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="annual-produce-under-50kg" />
                                                    <a href="javascript:void(0)" title="Annual Produce Under 50KG"
                                                        class=" ">Annual Produce Under 50KG</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="asamushi" />
                                                    <a href="javascript:void(0)" title="Asamushi"
                                                        class=" ">Asamushi</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="award" />
                                                    <a href="javascript:void(0)" title="Award" class=" ">Award</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="black-tea" />
                                                    <a href="javascript:void(0)" title="Black Tea" class=" ">Black
                                                        Tea</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="ceremonial" />
                                                    <a href="javascript:void(0)" title="Ceremonial"
                                                        class=" ">Ceremonial</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="curly-shape" />
                                                    <a href="javascript:void(0)" title="Curly Shape" class=" ">Curly
                                                        Shape</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="dark-tea" />
                                                    <a href="javascript:void(0)" title="Dark Tea" class=" ">Dark
                                                        Tea</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="evening-recommend" />
                                                    <a href="javascript:void(0)" title="Evening Recommend"
                                                        class=" ">Evening Recommend</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="fermentation" />
                                                    <a href="javascript:void(0)" title="Fermentation"
                                                        class=" ">Fermentation</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="first-flush" />
                                                    <a href="javascript:void(0)" title="First Flush" class=" ">First
                                                        Flush</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="fresh-grassy" />
                                                    <a href="javascript:void(0)" title="Fresh Grassy"
                                                        class=" ">Fresh Grassy</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="freshness" />
                                                    <a href="javascript:void(0)" title="Freshness"
                                                        class=" ">Freshness</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="fukamushi" />
                                                    <a href="javascript:void(0)" title="Fukamushi"
                                                        class=" ">Fukamushi</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="genmaicha" />
                                                    <a href="javascript:void(0)" title="Genmaicha"
                                                        class=" ">Genmaicha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="gyokuro" />
                                                    <a href="javascript:void(0)" title="Gyokuro"
                                                        class=" ">Gyokuro</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="hand-picked" />
                                                    <a href="javascript:void(0)" title="Hand Picked" class=" ">Hand
                                                        Picked</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="herbal-aroma" />
                                                    <a href="javascript:void(0)" title="Herbal Aroma"
                                                        class=" ">Herbal Aroma</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="higher-astringency" />
                                                    <a href="javascript:void(0)" title="Higher Astringency"
                                                        class=" ">Higher Astringency</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="higher-roasted" />
                                                    <a href="javascript:void(0)" title="Higher Roasted"
                                                        class=" ">Higher Roasted</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="hojicha" />
                                                    <a href="javascript:void(0)" title="Hojicha"
                                                        class=" ">Hojicha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="kabusecha" />
                                                    <a href="javascript:void(0)" title="Kabusecha"
                                                        class=" ">Kabusecha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="kamairicha" />
                                                    <a href="javascript:void(0)" title="Kamairicha"
                                                        class=" ">Kamairicha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="kukicha" />
                                                    <a href="javascript:void(0)" title="Kukicha"
                                                        class=" ">Kukicha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="leaf" />
                                                    <a href="javascript:void(0)" title="Leaf" class=" ">Leaf</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="less-caffeine" />
                                                    <a href="javascript:void(0)" title="Less Caffeine"
                                                        class=" ">Less Caffeine</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="matcha" />
                                                    <a href="javascript:void(0)" title="Matcha" class=" ">Matcha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="milky" />
                                                    <a href="javascript:void(0)" title="Milky" class=" ">Milky</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="millstone" />
                                                    <a href="javascript:void(0)" title="Millstone"
                                                        class=" ">Millstone</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="morning-recommend" />
                                                    <a href="javascript:void(0)" title="Morning Recommend"
                                                        class=" ">Morning Recommend</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="oem-recommend" />
                                                    <a href="javascript:void(0)" title="OEM Recommend" class=" ">OEM
                                                        Recommend</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="oolong-tea" />
                                                    <a href="javascript:void(0)" title="Oolong Tea" class=" ">Oolong
                                                        Tea</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="organic" />
                                                    <a href="javascript:void(0)" title="Organic"
                                                        class=" ">Organic</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="pan-fired" />
                                                    <a href="javascript:void(0)" title="Pan-Fired"
                                                        class=" ">Pan-Fired</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="powder" />
                                                    <a href="javascript:void(0)" title="Powder" class=" ">Powder</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="powdery-fine-leaves" />
                                                    <a href="javascript:void(0)" title="Powdery Fine Leaves"
                                                        class=" ">Powdery Fine Leaves</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="rarity-cultivar" />
                                                    <a href="javascript:void(0)" title="Rarity Cultivar"
                                                        class=" ">Rarity Cultivar</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="refreshment" />
                                                    <a href="javascript:void(0)" title="Refreshment"
                                                        class=" ">Refreshment</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="richness" />
                                                    <a href="javascript:void(0)" title="Richness"
                                                        class=" ">Richness</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="sencha" />
                                                    <a href="javascript:void(0)" title="Sencha" class=" ">Sencha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="single-origin" />
                                                    <a href="javascript:void(0)" title="Single Origin"
                                                        class=" ">Single Origin</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="tamaryokucha" />
                                                    <a href="javascript:void(0)" title="Tamaryokucha"
                                                        class=" ">Tamaryokucha</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="traditional-japanese-style" />
                                                    <a href="javascript:void(0)" title="Traditional Japanese Style"
                                                        class=" ">Traditional Japanese Style</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="traditional-needle-shape" />
                                                    <a href="javascript:void(0)" title="Traditional Needle Shape"
                                                        class=" ">Traditional Needle Shape</a>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="umami-flavor" />
                                                    <a href="javascript:void(0)" title="UMAMI Flavor"
                                                        class=" ">UMAMI Flavor</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- #secondary -->
                                </div>
                            </div>
                            <div class="col-lg-12  js-draw-filter-2 trans_product ">
                                <div class="clearfix relative collection_prod">
                                    <div class="product-grid-view grid-uniform">
                                        <div class="row ">
                                            @foreach ($list as $item)
                                            <div class="col-md-4 js_size_prod col-lg-4 col-6 pb-4 trans-product">
                                                @include('layouts.product.item',['product' => $item])
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="pagi-nav text-right">
                                            {{$list->links()}}
                                        </div>
                                        <!-- End Paginav -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
