@extends('layouts.main.master')
@section('title')
    {{ languageName($product->name) }}
@endsection
@section('description')
    {{ languageName($product->description) }}
@endsection
@section('image')
    @php
        $images = json_decode($product->images);
    @endphp
    {{ url('' . $images[0]) }}
@endsection
@section('css')
    <style>
        #shopify-section-template--16764745023799__main {
            padding-top: 150px;
        }

        @media (max-width: 768px) {
            #shopify-section-template--16764745023799__main {
                padding-top: 0px;
            }
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('frontend/js/notify.min.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            var sku = '';
            var option_id = '';
            var quantity = 1;
            $('.package-card').click(function() {
                sku = $(this).data('sku');
                option_id = $(this).data('option-id');
                $('.package-card').removeClass('active');
                $(this).addClass('active');
            });
            $('.add-to-cart').click(function() {
                if (sku == '' || option_id == '') {
                    $.notify("Vui lòng chọn option", "error");
                    return;
                }
                $.ajax({
                    url: "{{ route('add.to.cart') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        sku: sku,
                        option_id: option_id,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success) {
                            $.notify(response.message, "success");
                            window.location.href = "{{ route('listCart') }}"
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        })
        function changeQty(element, value) {
            var qty = $(element).parent().find('.js-qty__num').val();
            qty = parseInt(qty) + value;
            if(qty < 1) {
                qty = 1;
            }
            $(element).parent().find('.js-qty__num').val(qty);
        }
    </script>
@endsection
@section('content')
    <div id="shopify-section-template--16764745023799__main" class="shopify-section">
        <style>
            .detail-info .selector-wrapper {
                display: none !important
            }
        </style>
        <div class="prod_sticky">
            <section id="content">
                <div class="wrap-bread-crumb">
                    <div class="container container-v1">
                        <div class="row">
                            <div class="col-sm-8">
                                <!-- /snippets/breadcrumb.liquid -->
                                <div class="bread-crumb">
                                    <a href="{{ route('home') }}" title="Back to the home">{{ getLanguage('home') }}<i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0)"
                                        onclick="window.history.back()">{{ getLanguage('product') }} <i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <strong>{{ languageName($product->name) }}</strong>
                                </div>
                            </div>
                            <div class="col-sm-4 justify-content-end align-items-center d-sm-flex d-none">
                                {{-- <div class="arrows-product">
                                    <div class="prev_prod">
                                        <a href="/en-vn/products/ot-03"><i class="fa fa-angle-left"
                                                aria-hidden="true"></i>Prev</a>
                                        <div class="position-absolute img-prev">
                                            <a href="/en-vn/products/ot-03">
                                                <img data-src="//osadateajapan.com/cdn/shop/products/OT-03-1-_1_80x80.jpg?v=1673502654"
                                                    class="lazyload">
                                            </a>
                                            <div class="info-prod">
                                                <a href="/en-vn/products/ot-03">MATCHA YAMAKAI (20g/0.7oz)</a>
                                                <p>319.000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next_prod">
                                        <a href="/en-vn/products/ot-21">
                                            Next<i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <div class=" img-next">
                                            <a href="/en-vn/products/ot-21">
                                                <img data-src="//osadateajapan.com/cdn/shop/products/OT-21-1-_1_80x80.jpg?v=1673502748"
                                                    class="lazyload">
                                            </a>
                                            <div class="info-prod">
                                                <a href="/en-vn/products/ot-21">OG BLACK TEA POWDER (20g/0.7oz)</a>
                                                <p>173.000₫</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bread Crumb -->
                <div class="">
                    <div class="content-page container container-v1">
                        <div class="content-page-detail">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                    <div class="gallery-control">
                                        <div class="main_img" style="padding-bottom:15px;">
                                            <div class="img_thumb">
                                                <a class="" href="{{ url('' . $images[0]) }}" data-fancybox="images">
                                                    <img class="lazyload engoj_img_main w-100 img-fluid"
                                                        data-src="{{ url('' . $images[0]) }}"
                                                        alt="{{ languageName($product->name) }}" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($images as $key => $image)
                                                @if ($key != 0)
                                                    <div class="col-6 gutter pt-3">
                                                        <a class="" href="{{ url('' . $image) }}"
                                                            data-fancybox="images">
                                                            <img data-src="{{ url('' . $image) }}"
                                                                alt="{{ languageName($product->name) }}" class="lazyload">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-12 sticky_content js_sticky  ">
                                    <div class="detail-info">
                                        <div class="relative">
                                            <h2 class="product-title ">{{ languageName($product->name) }}</h2>
                                            <!-- "snippets/judgeme_widgets.liquid" was not rendered, the associated app was uninstalled -->
                                            <div class="product-price ">
                                                <ins
                                                    class="enj-product-price engoj_price_main">{{ number_format($product->price, 0, ',', '.') }}₫</ins>
                                            </div>
                                            <div class="wrap-rating">
                                                <span class="shopify-product-reviews-badge"
                                                    data-id="{{ $product->id }}"></span>
                                            </div>
                                            <form action="/cart/add" method="post" enctype="multipart/form-data"
                                                id="AddToCartForm" class="cart clearfix mt-3">
                                                {{-- <select name="id" id="productSelect"
                                                    class="product-single__variants">
                                                    @foreach ($product->product_options as $option)
                                                    <option selected="selected" data-sku="{{ $option->sku }}" value="{{ $option->id }}">{{ $option->name }} - {{ number_format($option->price, 0, ',', '.') }}₫</option>
                                                    @endforeach
                                                </select> --}}
                                                <!--End Swatch Variant -->
                                                <!-- Add to cart & quantity -->
                                                <div class="btn-action detail-attr qty-cart">
                                                    <div class="">
                                                        <div class="js-qty">
                                                            <button type="button"
                                                                class="qty_minus js-qty__adjust js-qty__adjust--minus icon-fallback-text"
                                                                data-id="" data-qty="0" onclick="changeQty(this, -1)">
                                                                <span class="fa fa-caret-down"></span>
                                                            </button>
                                                            <input type="text" class="js-qty__num" value="1"
                                                                min="1" data-id="" aria-label="quantity"
                                                                pattern="[0-9]*" name="quantity" id="Quantity">
                                                            <button type="button"
                                                                class="qty_plus js-qty__adjust js-qty__adjust--plus icon-fallback-text"
                                                                data-id="" data-qty="11" onclick="changeQty(this, 1)">
                                                                <span class="fa fa-caret-up"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="shop-button enj-add-to-cart-btn engoj-btn-addtocart">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="btn-addwhlist">
                                                <span class="text_whlist"></span>
                                            </div>
                                            <div class="product-meta-info">
                                                {!! languageName($product->description) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon">
                            <div class="block-top-link">
                                <div class="textwidget custom-html-widget">
                                    <div class="sp-iconfeatured">
                                        <div class="iconbox-inner">
                                            <div class="icon">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    x="0px" y="0px" viewbox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512;"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M501.905,10.593C489.743-1.57,468.721-2.766,441.099,7.133c-18.995,6.81-38.919,18.222-48.451,27.754l-76.55,76.55
                                                          L64.116,71.859L0,135.975l209.501,82.059l-67.266,67.266l-95.472,5.591L0.984,336.67l103.609,49.994L75.567,415.69l21.24,21.24
                                                          l28.987-28.987l50.043,103.56l45.768-45.769l5.592-95.472l68.395-68.395l82.043,209.459l64.115-64.116l-39.57-251.933
                                                          l75.43-75.431c9.532-9.531,20.945-29.455,27.755-48.451C515.264,43.781,514.068,22.754,501.905,10.593z M53.706,124.751
                                                          l20.846-20.846l215.268,33.811l-57.136,57.136L53.706,124.751z M409.705,436.776l-20.845,20.846l-70.087-178.935l57.128-57.128
                                                          L409.705,436.776z M477.088,61.262c-5.739,16.012-15.224,31.853-20.718,37.347L197.88,357.101l-5.592,95.472l-7.797,7.797
                                                          l-36.202-74.918l26.113-26.113l-21.24-21.24l-26.07,26.068L52.137,328l7.788-7.788l95.472-5.591L413.888,56.128
                                                          c5.495-5.495,21.336-14.977,37.348-20.718c18.176-6.516,27.82-5.186,29.429-3.577C482.272,33.441,483.604,43.083,477.088,61.262z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <p class="title">WORLDWIDE SHIPPING</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="textwidget custom-html-widget">
                                    <div class="sp-iconfeatured">
                                        <div class="iconbox-inner">
                                            <div class="icon">
                                                <svg id="Layer_1" enable-background="new 0 0 512 512" height="512"
                                                    viewbox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m507.606 395.512-81.129-81.138-1.671-20.564 22.359-13.626c6.324-3.854 8.889-11.746 6.039-18.582l-10.075-24.166 17.052-19.868c4.823-5.619 4.824-13.917.002-19.538l-17.055-19.875 10.076-24.167c2.85-6.835.285-14.728-6.039-18.582l-22.359-13.626 2.12-26.094c.6-7.382-4.279-14.097-11.484-15.809l-25.472-6.049-6.051-25.479c-1.711-7.207-8.44-12.082-15.808-11.485l-26.102 2.12-13.627-22.36c-3.854-6.326-11.751-8.887-18.584-6.038l-24.164 10.082-19.864-17.051c-5.619-4.823-13.92-4.823-19.539 0l-19.866 17.051-24.165-10.081c-6.837-2.851-14.729-.287-18.584 6.038l-13.627 22.36-26.102-2.12c-7.382-.591-14.096 4.278-15.808 11.485l-6.051 25.479-25.472 6.049c-7.205 1.712-12.084 8.427-11.484 15.809l2.12 26.094-22.359 13.626c-6.324 3.854-8.889 11.746-6.039 18.582l10.076 24.167-17.055 19.875c-4.822 5.62-4.821 13.918.002 19.538l17.052 19.868-10.075 24.166c-2.85 6.835-.285 14.728 6.039 18.582l22.359 13.626-1.671 20.564-81.127 81.137c-3.676 3.676-5.187 8.993-3.992 14.053 1.194 5.06 4.924 9.14 9.855 10.784l61.048 20.347 20.347 61.048c1.644 4.932 5.724 8.661 10.784 9.855s10.377-.316 14.053-3.992l111.391-111.382 18.349 15.755c5.592 4.801 13.893 4.851 19.543 0l18.349-15.755 111.391 111.381c3.676 3.676 8.993 5.187 14.053 3.992 5.06-1.194 9.14-4.924 10.784-9.855l20.347-61.048 61.048-20.347c4.932-1.644 8.661-5.724 9.855-10.784 1.194-5.059-.317-10.377-3.993-14.052zm-395.163 73.72-15.05-45.146c-1.493-4.479-5.009-7.994-9.487-9.487l-45.136-15.044 61.912-61.913 17.347 4.121 6.052 25.479c1.712 7.207 8.447 12.082 15.808 11.485l26.102-2.12 13.283 21.797zm208.76-116.13-11.736 19.258-20.812-8.683c-5.229-2.182-11.245-1.23-15.547 2.463l-17.108 14.689-17.108-14.689c-6.015-5.165-12.781-3.617-15.547-2.463l-20.812 8.683-11.736-19.258c-2.948-4.838-8.362-7.601-14.022-7.145l-22.481 1.826-5.212-21.944c-1.309-5.514-5.614-9.818-11.127-11.128l-21.937-5.211 1.826-22.474c.459-5.649-2.306-11.074-7.146-14.023l-19.26-11.737 8.678-20.813c2.181-5.23 1.229-11.242-2.463-15.542l-14.687-17.112 14.688-17.118c3.689-4.3 4.642-10.311 2.461-15.541l-8.678-20.813 19.26-11.737c4.84-2.95 7.604-8.375 7.146-14.023l-1.826-22.474 21.937-5.21c5.513-1.309 9.818-5.614 11.127-11.128l5.212-21.944 22.481 1.825c5.649.463 11.073-2.305 14.022-7.145l11.736-19.258 20.812 8.683c5.228 2.181 11.244 1.23 15.545-2.461l17.111-14.687 17.11 14.687c4.302 3.692 10.315 4.642 15.545 2.461l20.812-8.683 11.736 19.258c2.949 4.839 8.366 7.61 14.022 7.145l22.481-1.825 5.212 21.944c1.309 5.514 5.614 9.819 11.127 11.128l21.937 5.21-1.826 22.474c-.459 5.649 2.306 11.074 7.146 14.023l19.26 11.737-8.678 20.813c-2.181 5.229-1.229 11.241 2.461 15.541l14.688 17.118-14.687 17.112c-3.691 4.3-4.644 10.312-2.463 15.542l8.678 20.813-19.26 11.737c-4.84 2.95-7.604 8.375-7.146 14.023l1.826 22.474-21.937 5.211c-5.513 1.31-9.818 5.614-11.127 11.128l-5.212 21.944-22.481-1.826c-5.648-.459-11.072 2.305-14.021 7.145zm102.891 61.497c-4.479 1.493-7.994 5.008-9.487 9.487l-15.05 45.146-70.829-70.829 13.283-21.797 26.102 2.12c7.36.597 14.096-4.278 15.808-11.485l6.052-25.479 17.347-4.121 61.912 61.913z">
                                                        </path>
                                                        <path
                                                            d="m379.073 165.06-45.444-45.444c-5.857-5.858-15.355-5.858-21.213 0l-72.482 72.482-32.316-32.315c-5.857-5.858-15.355-5.858-21.213 0l-45.444 45.445c-5.858 5.858-5.858 15.355 0 21.213l88.367 88.367c5.858 5.859 15.357 5.857 21.213 0l128.533-128.534c5.858-5.859 5.858-15.356-.001-21.214zm-139.139 117.927-67.154-67.153 24.231-24.231 32.316 32.315c5.857 5.858 15.355 5.858 21.213 0l72.482-72.482 24.231 24.231z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <p class="title">FSSC 22000(Food Safety System Certification)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="textwidget custom-html-widget">
                                    <div class="sp-iconfeatured">
                                        <div class="iconbox-inner">
                                            <div class="icon">
                                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                                    viewbox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m459.669 82.906-196-81.377c-4.91-2.038-10.429-2.039-15.338 0l-196 81.377c-7.465 3.1-12.331 10.388-12.331 18.471v98.925c0 136.213 82.329 258.74 208.442 310.215 4.844 1.977 10.271 1.977 15.116 0 126.111-51.474 208.442-174.001 208.442-310.215v-98.925c0-8.083-4.865-15.371-12.331-18.471zm-27.669 117.396c0 115.795-68 222.392-176 269.974-105.114-46.311-176-151.041-176-269.974v-85.573l176-73.074 176 73.074zm-198.106 67.414 85.964-85.963c7.81-7.81 20.473-7.811 28.284 0s7.81 20.474-.001 28.284l-100.105 100.105c-7.812 7.812-20.475 7.809-28.284 0l-55.894-55.894c-7.811-7.811-7.811-20.474 0-28.284s20.474-7.811 28.284 0z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <p class="title">100% SECRUE CHECKOUT</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky_addcart">
                        <div class="container container-v4">
                            <div class="row">
                                <div class="d-flex col-sm-6 align-items-center relative">
                                    <div class="img_left">
                                        <img width="60" height="60" class="lazyload engoj_img_main img-fluid"
                                            data-src="{{url('' . $product->images[0])}}"
                                            alt="{{ languageName($product->name) }}" />
                                    </div>
                                    <div class="info_right">
                                        <h2 class="product-title ">{{ languageName($product->name) }}</h2>
                                        <div class="product-price ">
                                            <ins class="enj-product-price engoj_price_main">{{ number_format($product->price, 0, ',', '.') }}₫</ins>
                                        </div>
                                        <div class="wrap-rating">
                                            <span class="shopify-product-reviews-badge" data-id="{{ $product->id }}"></span>
                                        </div>
                                    </div>
                                    <div class="d-sm-none d-block position_add"
                                        style="position: absolute;   right: 15px; ">
                                        <div class="btn-action detail-attr qty-cart">
                                            <button type="submit" class="shop-button btn-add-stickycart">
                                                Add to Cart
                                            </button>
                                        </div>
                                        <!-- End add to cart & quantity -->
                                    </div>
                                </div>
                                <div
                                    class="col-sm-6 d-sm-flex d-none justify-content-sm-end justify-content-start align-items-center">
                                    <div class="btn-action detail-attr qty-cart">
                                        <button type="submit" class="shop-button btn-add-stickycart">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <!-- End add to cart & quantity -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        @media(max-width: 576px) {
                            .sticky_addcart {
                                bottom: 50px;
                                top: auto;
                                transform: translateY(100%);
                                opacity: 0;
                                transition: .8s;
                            }
                        }
                    </style>
                </div>
            </section>
            <div class=" tab-pd-details">
                <div class="bd-tab">
                    <div class="container container-v2">
                        <ul class="nav nav-tabs tab_prod">
                            <li>
                                <a class="underline_scale active" data-toggle="tab" href="#des">{{ getLanguage('information_product') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container container-v4">
                    <div class="tab-pane fade show active" id="des">
                        <div class="desc product-desc">
                            <div style="text-align: left;">
                                {!! languageName($product->content) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icon ">
                <div class="social-share">
                    <a href="//twitter.com/share?text={{ languageName($product->name) }}&amp;url={{ route('detailProduct', $product->slug) }}"
                        target="_blank" class="float-shadow"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="//www.facebook.com/sharer.php?u={{ route('detailProduct', $product->slug) }}"
                        target="_blank" class="float-shadow"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="//pinterest.com/pin/create/button/?url={{ route('detailProduct', $product->slug) }}&amp;media={{ url('' . $product->images[0]) }}&amp;description={{ languageName($product->name) }}"
                        target="_blank" class="float-shadow"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                </div>
            </div>
            @if($productlq->count() > 0)
            <div class="related-product container container-v2">
                <div class="text-center">
                    <div class="title_heading">{{ getLanguage('related_products') }}</div>
                </div>
                <div class="related-tabs pt-4 pt-lg-5">
                    <div class="row js_product_related">
                        @foreach ($productlq as $item)
                        <div class="col-12">
                            @include('layouts.product.item', ['product' => $item])
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
        <style>
            .list_ul_engo_full ul li {
                color: #7bae23
            }

            .list_ul_engo_full ul li:before {
                border-color: transparent transparent transparent #7bae23;
            }

            .list_ul_engo_full .title-list {
                color: #7bae23
            }
        </style>
        <script>
            function random(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min);
            }

            jQuery(document).ready(function($) {
                $('.btn-add-stickycart').on('click', function() {
                    $('.shop-button.enj-add-to-cart-btn.engoj-btn-addtocart').click();
                });
            });
        </script>
    </div>
@endsection
