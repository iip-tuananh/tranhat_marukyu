<!DOCTYPE html>
<html class="no-js p-0">

<head>
    @include('layouts.main.head')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- font -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: [
                    'Barlow:100,200,300,400,500,600,700,800,900'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <!-- CSS ================================================== -->
    <link href="{{ asset('frontend/css/timber_2.scss.css') }}?v=168898861915732768451745488607" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}?v=174392269533316748021666939211" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{ asset('frontend/css/slick.css') }}?v=98340474046176884051666939214" rel="stylesheet" type="text/css"
        media="all" />
    <link href="{{ asset('frontend/css/slick-theme.css') }}?v=184272576841816378971666939213" rel="stylesheet"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}?v=19278034316635137701666939213"
        media="nope!" onload="this.media='all'">
    <link href="{{ asset('frontend/css/style-main.scss.css') }}?v=51545238501737079731666939259" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{ asset('frontend/css/engo-customizes.css') }}?v=171007607219687992631673840910" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{ asset('frontend/css/animate.min.css') }}?v=30636256313253750241666939211" rel="stylesheet"
        type="text/css" media="all" />
    <!-- Header hook for plugins ================================================== -->
    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <style id="shopify-accelerated-checkout-cart">
        #shopify-buyer-consent {
            margin-top: 1em;
            display: inline-block;
            width: 100%;
        }

        #shopify-buyer-consent.hidden {
            display: none;
        }

        #shopify-subscription-policy-button {
            background: none;
            border: none;
            padding: 0;
            text-decoration: underline;
            font-size: inherit;
            cursor: pointer;
        }

        #shopify-subscription-policy-button::before {
            box-shadow: none;
        }
    </style>
    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>
    <script src="{{ asset('frontend/js/jquery-3.5.0.min.js') }}?v=16874778797910128561666939213" type="text/javascript">
    </script>
    <script src="{{ asset('frontend/js/api.jquery-b0af070cfe3f5cf7c92f9e2a5da2665ee07ed2aad63bb408f8d6672f894a5996.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}?v=174727525422211915231666939213"
        type="text/javascript"></script>
    <script
        src="{{ asset('frontend/js/option_selection-86cdd286ddf3be7e25d68b9fc5965d7798a3ff6228ff79af67b3f4e41d6a34be.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('frontend/js/lazysizes.min.js') }}?v=18178776694225242271666939213" type="text/javascript">
    </script>
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <style type="text/css">
        .wishlisthero-floating {
            position: absolute;
            right: 5px;
            top: 5px;
            z-index: 23;
            border-radius: 100%;
        }

        .wishlisthero-floating:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .wishlisthero-floating button {
            font-size: 20px !important;
            width: 40px !important;
            padding: 0.125em 0 0 !important;
        }

        .MuiTypography-body2,
        .MuiTypography-body1,
        .MuiTypography-caption,
        .MuiTypography-button,
        .MuiTypography-h1,
        .MuiTypography-h2,
        .MuiTypography-h3,
        .MuiTypography-h4,
        .MuiTypography-h5,
        .MuiTypography-h6,
        .MuiTypography-subtitle1,
        .MuiTypography-subtitle2,
        .MuiTypography-overline,
        MuiButton-root,
        .MuiCardHeader-title a {
            font-family: inherit !important;
            /*Roboto, Helvetica, Arial, sans-serif;*/
        }
    </style>
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet" id="transtore-stylesheet" />
    <script src="{{ asset('frontend/js/main.js') }}" defer id="transtore-script"></script>
    <!-- END app block -->
    <script src="{{ asset('frontend/js/omnisend-in-shop.js') }}" type="text/javascript" defer="defer"></script>
    <script src="{{ asset('frontend/js/nova-cur-app-embed.js') }}" type="text/javascript" defer="defer"></script>
    <link href="{{ asset('frontend/css/nova-cur.css') }}" rel="stylesheet" type="text/css" media="all">
    @yield('css')
</head>

<body class=" preload push_filter_left js_overhidden relative" style="background: #ffffff;">
    <div class="wrap">
        <div class="contentbody">
            @include('layouts.header.index')

            @yield('content')

            @include('layouts.footer.index')
        </div>
    </div>
    <script></script>
    <script>
        jQuery(function() {
            jQuery('.swatch :radio').change(function() {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
            });
        });
    </script>
    <script src="//osadateajapan.com/cdn/shop/t/3/assets/handlebars.min.js?v=79044469952368397291666939212"
        type="text/javascript"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js?v=24720241748783945361666939211') }}"
        type="text/javascript"></script>
    <script src="{{ asset('frontend/js/slick.min.js?v=174081320166941574071666939214') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/instafeed.min.js?v=33817373524940501351666939212') }}" type="text/javascript">
    </script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js?v=102984942719613846721666939213') }}"
        type="text/javascript"></script>
    <script src="{{ asset('frontend/js/engo-plugins.js?v=118117394084947258351666939211') }}" type="text/javascript">
    </script>
    <script src="{{ asset('frontend/js/quickview.js?v=22958627951587783841671052342') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/collection.js?v=71617923839282046691666939259') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/engo-scripts.js?v=158629763053561908821686244364') }}" type="text/javascript">
    </script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js?v=163018295951185508901666939213') }}" type="text/javascript">
    </script>
    <!-- /snippets/product-quick-view.liquid -->
    <div id="quick-view" class="hidden-label  br-product-popup">
        <div class="overlay-quickview"></div>
        <div class="content product-quickview product-single br-product br-product-detail br-product-slide-vertical">
            <div class="row">
                <div class="col-6">
                    <div class="product-media thumbnai-left">
                        <div class="featured-image "></div>
                        <div class="more-views owl-carousel-play ">
                            <div class="engoc_hide_owl_control owl-carousel" data-items="3" data-dots="false"
                                data-lazyLoad="true" data-nav="true" data-autoHeight="false"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 popup-quickview">
                    <div class=" br-product-detail__container detail-info">
                        <div class="product-shop product-info-main">
                            <div class="product-item">
                                <h2 class="product-name"><a>&nbsp;</a></h2>
                                <div class="details clearfix">
                                    <form action="/cart/add" method="post" class="variants CartContainer">
                                        <div class="d-flex justify-content-between">
                                            <div class="prices product-price dosis-font variation-price mb-15">
                                                <label class="price product-price">
                                                    <span class="compare-price dark opaci title14"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p class="des description desc product-desc"></p>
                                        <select name='id' style="display:none;" class="engoj-except-select2">
                                        </select>
                                        <div class="product-actions">
                                            <div class="product-quantity">
                                                <div class="quantity-all js-qty">
                                                    <span
                                                        class='qtyminus qty_minus js-qty__adjust js-qty__adjust--minus'
                                                        data-field='quantity'><i class="fa fa-caret-down"></i></span>
                                                    <input type="text" name="quantity" value="1"
                                                        class="qty quantity js-qty__num">
                                                    <span class='qtyplus qty_plus js-qty__adjust js-qty__adjust--plus'
                                                        data-field='quantity'><i class="fa fa-caret-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="actions btn-addtocart">
                                                <button type="button"
                                                    class="btn-addToCart shop-button addcart-link font-bold">Add to
                                                    Cart</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="close-window set-16-svg fill-white">
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
        </div>
    </div>
    <script type="text/javascript">
        Shopify.doNotTriggerClickOnThumb = false;
    </script>
    <div class="quickview-product tshopify-popup"></div>
    <div class="loading tshopify-popup">
        <div class="overlay"></div>
        <div class="loader" title="0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="margin: auto; background: none; display: block; shape-rendering: auto;" width="197px"
                height="197px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <path fill="none" stroke="#5a8c34" stroke-width="2"
                    stroke-dasharray="42.76482137044271 42.76482137044271"
                    d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z"
                    stroke-linecap="round" style="transform:scale(0.67);transform-origin:50px 50px">
                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="2.0833333333333335s"
                        keyTimes="0;1" values="0;256.58892822265625" />
                </path>
            </svg>
        </div>
    </div>
    <div class="error-popup engo-popup engoc_hide_mobile">
        <div class="overlay-addcart"></div>
        <div class="popup-inner content">
            <div class="error-message"></div>
        </div>
    </div>
    <div class="product-popup engo-popup engoc_hide_mobile">
        <div class="overlay-addcart"></div>
        <div class="content">
            <a href="javascript:void(0)" class="close-window set-16-svg fill-white">
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
            <div class="mini-product-item row">
                <div class="col-md-6 col-sm-6 text-center product-image">
                    <p class="success-message">Added to cart successfully!</p>
                    <img alt="img"
                        src="//osadateajapan.com/cdn/shop/t/3/assets/favicon.png?v=93301442295928739641671309485" />
                    <div class="product-info">
                        <p class="product-name"></p>
                        <p class="text-uppercase">Price : <span class="product-price"></span></p>
                        <p>QTY : <span class="product-qty"></span></p>
                        <p> CART TOTALS : <span class="product-total"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-center more_info">
                    <p> There are <span class="product-item-count"></span> items<br>in your cart</p>
                    <p class="total_price"> CART TOTALS : <span class="product-total-cart"></span></p>
                    <div class="actions">
                        <button class="continue-shopping shop-button" onclick="javascript:void(0)">Continue
                            shopping</button>
                        <button class="shop-button go_cart " onclick="window.location='/cart'">Go to cart</button>
                        <div class="product-cart__condition d-flex align-items-center mb-3">
                            <input type="checkbox" class="engoj-agree">
                            <label for="product-cart__agree-product-template" class="mb-0">Agree with term and
                                conditional.</label>
                        </div>
                        <button class="checkout-button js-button-checkout alt wc-forward bg-color btn-disabled"
                            onclick="window.location='/checkout'">Proceed to checkout</button>
                    </div>
                </div>
            </div>
            <div class="also_like_prod">
                <div class="title">
                    With this products also buy:
                </div>
                <div class="row product_new slick_product_new-h5">
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-04" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-04-1-_1.jpg?v=1673502659"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-04] MATCHA NONO (20g/0.7oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-04-5.jpg?v=1671249709"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-04] MATCHA NONO (20g/0.7oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-04" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-04">MATCHA NONO (20g/0.7oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">318.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-01" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-01-1-c6043315-f32d-4781-9b40-c902247ddea9-_1.jpg?v=1673502644"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-01] MATCHA SAMIDORI TEZUMI (20g/0.7oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-01-5_504055a4-6c55-440d-af84-58b806fd5bf5.jpg?v=1671136783"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-01] MATCHA SAMIDORI TEZUMI (20g/0.7oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-01" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-01">MATCHA SAMIDORI TEZUMI (20g/0.7oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">424.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-03" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-03-1-_1.jpg?v=1673502654"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-03] MATCHA YAMAKAI (20g/0.7oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-03-5.jpg?v=1671249693"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-03] MATCHA YAMAKAI (20g/0.7oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-03" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-03">MATCHA YAMAKAI (20g/0.7oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">318.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-32" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-32-1-_1.jpg?v=1673502774"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-32] ORGANIC BLACKTEA BENIFUUKI (30g/1oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-32-5.jpg?v=1671250277"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-32] ORGANIC BLACKTEA BENIFUUKI (30g/1oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-32" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-32">OG BLACKTEA BENIFUUKI (30g/1oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">226.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-50" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-50-1-_1.jpg?v=1673502826"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-50] ORGANIC KAMAIRICHA FF (30g/1oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-50-5.jpg?v=1671250984"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-50] ORGANIC KAMAIRICHA FF (30g/1oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-50">OG KAMAIRICHA FF (30g/1oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">212.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-14" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-14-1-_1.jpg?v=1673502708"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-14] ORGANIC MATCHA KAKITSUBATA (20g/0.7oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-14-5.jpg?v=1671249965"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-14] ORGANIC MATCHA KAKITSUBATA (20g/0.7oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-14">OG MATCHA KAKITSUBATA (20g/0.7oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">212.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-07" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-07-1-_1.jpg?v=1673502675"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-07] ORGANIC MATCHA KOIAI (20g/0.7oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-07-5.jpg?v=1671249758"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-07] ORGANIC MATCHA KOIAI (20g/0.7oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-07" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-07">OG MATCHA KOIAI (20g/0.7oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">292.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 product_item">
                        <div class="product-item-v8">
                            <div class="product mb-30 engoj_grid_parent relative">
                                <div class="img-product relative">
                                    <a href="/en-vn/products/ot-27" class="engoj_find_img">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-27-1-_1.jpg?v=1673502764"
                                            class="lazyload w-100 img-responsive"
                                            alt="[OT-27] ORGANIC OOLONGTEA GOKOU (30g/1oz)">
                                        <img data-src="//osadateajapan.com/cdn/shop/products/OT-27-5.jpg?v=1671250166"
                                            class="lazyload w-100 img-responsive absolute img-product-hover"
                                            alt="[OT-27] ORGANIC OOLONGTEA GOKOU (30g/1oz)">
                                    </a>
                                    <!--     label product -->
                                    <!--     END LABEL -->
                                    <!--     SOLD OUT -->
                                    <div class="sold-out ">
                                        <a href="/en-vn/products/ot-27" class="uppercase">sold out</a>
                                    </div>
                                    <!-- END SOLD OUT     -->
                                </div>
                                <h4 class="des-font capital title-product mb-0">
                                    <a href="/en-vn/products/ot-27">OG OOLONGTEA GOKOU (30g/1oz)</a>
                                </h4>
                                <!--     PRICE -->
                                <p class="price-product mb-0">
                                    <span class="price">226.000₫</span>
                                </p>
                                <!-- END PRODUCT     -->
                                <!-- VARIANT PRODUCT -->
                                <nav class="engoj_select_color variant-product">
                                </nav>
                                <!-- END VARIANT     -->
                                <!--     THUMBNAIL PRODUCT -->
                                <!-- END THUMBNAIL     -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '.overlay, .continue-shopping, .close-window', function() {
            $(".engo-popup").removeClass('active');
        });
    </script>
    <script>
        // (c) Copyright 2016 Caroline Schnapp. All Rights Reserved. Contact: mllegeorgesand@gmail.com
        // See https://docs.shopify.com/themes/customization/navigation/link-product-options-in-menus

        var Shopify = Shopify || {};

        Shopify.optionsMap = {};

        Shopify.updateOptionsInSelector = function(selectorIndex) {

            switch (selectorIndex) {
                case 0:
                    var key = 'root';
                    var selector = jQuery('.single-option-selector:eq(0)');
                    break;
                case 1:
                    var key = jQuery('.single-option-selector:eq(0)').val();
                    var selector = jQuery('.single-option-selector:eq(1)');
                    break;
                case 2:
                    var key = jQuery('.single-option-selector:eq(0)').val();
                    key += ' / ' + jQuery('.single-option-selector:eq(1)').val();
                    var selector = jQuery('.single-option-selector:eq(2)');
            }

            var initialValue = selector.val();
            selector.empty();
            var availableOptions = Shopify.optionsMap[key];
            for (var i = 0; i < availableOptions.length; i++) {
                var option = availableOptions[i];
                var newOption = jQuery('<option></option>').val(option).html(option);
                selector.append(newOption);
            }
            jQuery('.swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
                if (jQuery.inArray($(this).attr('data-value'), availableOptions) !== -1) {
                    $(this).removeClass('soldout').show().find(':radio').removeAttr('disabled', 'disabled')
                        .removeAttr('checked');
                } else {
                    $(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled',
                        'disabled');
                }
            });
            if (jQuery.inArray(initialValue, availableOptions) !== -1) {
                selector.val(initialValue);
            }
            selector.trigger('change');

        };

        Shopify.linkOptionSelectors = function(product) {
            // Building our mapping object.
            for (var i = 0; i < product.variants.length; i++) {
                var variant = product.variants[i];
                if (variant.available) {
                    // Gathering values for the 1st drop-down.
                    Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];
                    Shopify.optionsMap['root'].push(variant.option1);
                    Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);
                    // Gathering values for the 2nd drop-down.
                    if (product.options.length > 1) {
                        var key = variant.option1;
                        Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                        Shopify.optionsMap[key].push(variant.option2);
                        Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                    }
                    // Gathering values for the 3rd drop-down.
                    if (product.options.length === 3) {
                        var key = variant.option1 + ' / ' + variant.option2;
                        Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                        Shopify.optionsMap[key].push(variant.option3);
                        Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                    }
                }
            }
            // Update options right away.
            Shopify.updateOptionsInSelector(0);
            if (product.options.length > 1) Shopify.updateOptionsInSelector(1);
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
            // When there is an update in the first dropdown.
            jQuery(".single-option-selector:eq(0)").change(function() {
                Shopify.updateOptionsInSelector(1);
                if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
                return true;
            });
            // When there is an update in the second dropdown.
            jQuery(".single-option-selector:eq(1)").change(function() {
                if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
                return true;
            });
        };
    </script>
    <div class="menu_toolbar d-flex d-sm-none">
        <div class="btn_account">
            <a href="{{ route('home') }}" style="font-size: 20px">
                <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
                <svg xmlns="http://www.w3.org/2000/svg" width="400" height="400" viewBox="0 0 24 24"
                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M3 9L12 2l9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-5h-4v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>
            </a>
        </div>
        <div class="btn_cart">
            <a href="javascript:void(0)" title="" class="js-call-minicart">
                <i class="fsz-unset">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 297.78668 398.66666" height="398.66666"
                        width="297.78668" id="svg2" version="1.1" xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                        xml:space="preserve">
                        <metadata id="metadata8">
                            <rdf>
                                <work rdf:about="">
                                    <format>image/svg+xml</format>
                                    <type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></type>
                                </work>
                            </rdf>
                        </metadata>
                        <defs id="defs6"></defs>
                        <g transform="matrix(1.3333333,0,0,-1.3333333,0,398.66667)" id="g10">
                            <g transform="scale(0.1)" id="g12">
                                <path id="path14" style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                    d="M 2233.36,2432.71 H 0 V 0 h 2233.36 v 2432.71 z m -220,-220 V 220 H 220.004 V 2212.71 H 2021.36">
                                </path>
                                <path xmlns="http://www.w3.org/2000/svg" id="path16"
                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                    d="m 1116.68,2990 v 0 C 755.461,2990 462.637,2697.18 462.637,2335.96 V 2216.92 H 1770.71 v 119.04 c 0,361.22 -292.82,654.04 -654.03,654.04 z m 0,-220 c 204.58,0 376.55,-142.29 422.19,-333.08 H 694.492 C 740.117,2627.71 912.102,2770 1116.68,2770">
                                </path>
                                <path xmlns="http://www.w3.org/2000/svg" id="path18"
                                    style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                    d="M 1554.82,1888.17 H 678.543 v 169.54 h 876.277 v -169.54"></path>
                            </g>
                        </g>
                    </svg>
                </i>
                <span class="count_pr_incart enj-cartcount">0</span>
            </a>
        </div>
        <div class="btn_backtop set-22-svg fill-white" id="back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer" enable-background="new 0 0 64 64" height="512"
                viewBox="0 0 64 64" width="512">
                <path
                    d="m32 56c1.104 0 2-.896 2-2v-39.899l14.552 15.278c.393.413.92.621 1.448.621.495 0 .992-.183 1.379-.552.8-.762.831-2.028.069-2.828l-16.619-17.448c-.756-.755-1.76-1.172-2.829-1.172s-2.073.417-2.862 1.207l-16.586 17.414c-.762.8-.731 2.066.069 2.828s2.067.731 2.828-.069l14.551-15.342v39.962c0 1.104.896 2 2 2z" />
            </svg>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            if ($(window).width() < 577) {

                if ($('.popup-cookie').length) {
                    $('.popup_random_prod').css('bottom', '208px');
                } else {
                    $('.popup_random_prod').css('bottom', '0px');
                }
                $('.got_it').on('click', function() {
                    $('.popup_random_prod').css('bottom', '0px');

                });


                $(window).scroll(function() {

                    if ($(window).scrollTop() >= 300) {
                        $('.menu_toolbar').addClass('active');
                        $('.popup_random_prod').css('bottom', '260px');
                        $('.popup-cookie').css('bottom', '50px');
                        $('.got_it').on('click', function() {
                            $('.popup_random_prod').css('bottom', '50px');
                        });

                        if ($('.popup-cookie').length) {
                            $('.popup_random_prod').css('bottom', '258px');
                        } else {
                            $('.popup_random_prod').css('bottom', '50px');
                        }

                        if ($('.popup-cookie').hasClass('d-none')) {
                            $('.popup_random_prod').css('bottom', '50px');
                        }
                    } else {

                        if ($('.popup-cookie').length) {
                            $('.popup_random_prod').css('bottom', '208px');
                        } else {
                            $('.popup_random_prod').css('bottom', '0px');
                        }
                        if ($('.popup-cookie').hasClass('d-none')) {
                            $('.popup_random_prod').css('bottom', '0px');
                        }
                        $('.menu_toolbar').removeClass('active');
                        $('.popup-cookie').css('bottom', '0px');

                    }
                });
            }
        });
    </script>
    <div class="site-overlay">
        <script src="//cdn.shopify.com/s/files/1/0194/1736/6592/t/1/assets/booster-page-speed-optimizer.js?23"
            type="text/javascript"></script>
        @yield('js')

</html>
