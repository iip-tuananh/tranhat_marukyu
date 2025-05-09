
@php
$img = json_decode($product->images);
@endphp
<div class="product-item-v1">
    <div class="product mb-30 engoj_grid_parent relative">
        <div class="img-product relative">
            <div style="">
                <a href="{{route('detailProduct',['slug' => $product->slug])}}" class="engoj_find_img">
                    <img style="width: 100%"
                        data-src="{{$img[0]}}"
                        src="{{asset('frontend/images/loading.gif')}}"
                        class="lazyload img-responsive"
                        alt="{{languageName($product->name)}}">
                </a>
            </div>
            <!--     label product -->
            <!--     END LABEL -->
            <!--     ICON PRODUCT -->
            <div class="product-icon-action">
                {{-- <div class="add-to-cart">
                    <form
                        class="inline-block icon-addcart margin_right_10 box-shadow"
                        data-toggle="tooltip" data-placement="top"
                        data-original-title="Add to Cart">
                        <a href="javascript:void(0)"
                            class="btn-add-to-cart">
                            <i class="fsz-unset">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 297.78668 398.66666"
                                    height="398.66666" width="297.78668"
                                    id="svg2" version="1.1"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg"
                                    xml:space="preserve">
                                    <metadata id="metadata8">
                                        <rdf>
                                            <work rdf:about="">
                                                <format>image/svg+xml
                                                </format>
                                                <type
                                                    rdf:resource="http://purl.org/dc/dcmitype/StillImage">
                                                </type>
                                            </work>
                                        </rdf>
                                    </metadata>
                                    <defs id="defs6"></defs>
                                    <g transform="matrix(1.3333333,0,0,-1.3333333,0,398.66667)"
                                        id="g10">
                                        <g transform="scale(0.1)"
                                            id="g12">
                                            <path id="path14"
                                                style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="M 2233.36,2432.71 H 0 V 0 h 2233.36 v 2432.71 z m -220,-220 V 220 H 220.004 V 2212.71 H 2021.36">
                                            </path>
                                            <path
                                                xmlns="http://www.w3.org/2000/svg"
                                                id="path16"
                                                style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 1116.68,2990 v 0 C 755.461,2990 462.637,2697.18 462.637,2335.96 V 2216.92 H 1770.71 v 119.04 c 0,361.22 -292.82,654.04 -654.03,654.04 z m 0,-220 c 204.58,0 376.55,-142.29 422.19,-333.08 H 694.492 C 740.117,2627.71 912.102,2770 1116.68,2770">
                                            </path>
                                            <path
                                                xmlns="http://www.w3.org/2000/svg"
                                                id="path18"
                                                style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="M 1554.82,1888.17 H 678.543 v 169.54 h 876.277 v -169.54">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </a>
                    </form>
                </div>
                <div class="quick-view">
                    <a href="javascript:void(0)"
                        class="engoj_btn_quickview icon-quickview inline-block box-shadow"
                        data-id="ot-14" data-toggle="tooltip"
                        data-placement="top"
                        data-original-title="Quickview">
                        <i class="fsz-unset">
                            <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 400 400" height="400"
                                width="400" id="svg2"
                                version="1.1"
                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:cc="http://creativecommons.org/ns#"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg"
                                xml:space="preserve">
                                <metadata id="metadata8">
                                    <rdf>
                                        <work rdf:about="">
                                            <format>image/svg+xml</format>
                                            <type
                                                rdf:resource="http://purl.org/dc/dcmitype/StillImage">
                                            </type>
                                        </work>
                                    </rdf>
                                </metadata>
                                <defs id="defs6"></defs>
                                <g transform="matrix(1.3333333,0,0,-1.3333333,0,400)"
                                    id="g10">
                                    <g transform="scale(0.1)"
                                        id="g12">
                                        <path id="path14"
                                            style="fill-opacity:1;fill-rule:nonzero;stroke:none"
                                            d="m 1312.7,795.5 c -472.7,0 -857.204,384.3 -857.204,856.7 0,472.7 384.504,857.2 857.204,857.2 472.7,0 857.3,-384.5 857.3,-857.2 0,-472.4 -384.6,-856.7 -857.3,-856.7 z M 2783.9,352.699 2172.7,963.898 c 155.8,194.702 241.5,438.602 241.5,688.302 0,607.3 -494.1,1101.4 -1101.5,1101.4 -607.302,0 -1101.399,-494.1 -1101.399,-1101.4 0,-607.4 494.097,-1101.501 1101.399,-1101.501 249.8,0 493.5,85.5 687.7,241 L 2611.7,181 c 23,-23 53.6,-35.699 86.1,-35.699 32.4,0 63,12.699 86,35.699 23.1,22.801 35.8,53.301 35.8,85.898 0,32.602 -12.7,63 -35.7,85.801">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </i>
                    </a>
                </div> --}}
            </div>
            <!--     END ICON -->
        </div>
        <div class="info-product">
            <h4 class="des-font capital title-product mb-0 flex">
                <a href="{{route('detailProduct',['slug' => $product->slug])}}">{{languageName($product->name)}}</a>
            </h4>
            <p class="price-product">
                @if($product->price > 0)
                    <span class="price">{{number_format($product->price, 0, ',', '.')}}₫</span>
                @else
                    <a href="tel:{{str_replace(' ', '', $product->phone1)}}" class="price">Liên hệ</a>
                @endif
            </p>
        </div>
    </div>
</div>