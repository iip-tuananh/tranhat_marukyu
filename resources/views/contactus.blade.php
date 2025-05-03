@extends('layouts.main.master')
@section('title')
    Liên hệ với chúng tôi
@endsection
@section('description')
    Liên hệ với chúng tôi
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <div id="shopify-section-template--16764744728887__contact_template" class="shopify-section">
        <div class="wrap-bread-crumb breadcrumb_collection2">
            <div class="text-center bg-breadcrumb">
                <div class="title-page">
                    <h2 class="">{{getLanguage('contact_us')}}</h2>
                </div>
                <!-- /snippets/breadcrumb.liquid -->
                <div class="bread-crumb">
                    <a href="{{route('home')}}" title="Back to the home">{{getLanguage('home')}}<i class="fa fa-angle-right"
                            aria-hidden="true"></i></a>
                    <strong>{{getLanguage('contact_us')}}</strong>
                </div>
            </div>
        </div>
        <section id="content">
            <div class="content-page contact-page">
                <div class="container container-v4">
                    <div class="contact-form">
                        <div class="contact_top">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="info_left">
                                        <h2>{{getLanguage('Contactinformation')}}</h2>
                                        <div class="content">
                                            <p>{{$setting->webname}}</p>
                                            <p>{{getLanguage('address')}}<br>
                                                {{$setting->address1}}
                                            </p>
                                            <p>{{getLanguage('address2')}}<br>
                                                {{$setting->address2}}
                                            </p>
                                        </div>
                                        <div class="button-wrapper">
                                            <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                        </div>
                                        <div class="follow_us">
                                            <h2>other ways to reach us. {{$setting->phone1}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    {!! $setting->iframe_map !!}
                                </div>
                            </div>
                        </div>
                        <div class="contact_bottom">
                            <h2 class="contact_title">{{getLanguage('ContactForm')}}</h2>
                            <div class="contact-form-page">
                                <form method="post" action="{{route('postcontact')}}" id="contact_form"
                                    accept-charset="UTF-8" class="contact-form">
                                    @csrf
                                    <input type="hidden" name="form_type" value="contact" /><input type="hidden"
                                        name="utf8" value="✓" />
                                    <div class="contact-form">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label>Name</label>
                                                <p class="contact-name">
                                                    <input class="" placeholder="" type="text" id="contactFormName"
                                                        name="name" required>
                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <label>Email Address</label>
                                                <p class="contact-email">
                                                    <input class="" placeholder="" type="email"
                                                        id="contactFormEmail" name="email" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Your Message</label>
                                                <p class="contact-message">
                                                    <textarea class="" placeholder="" cols="30" rows="10" id="contactFormMessage" name="mess"
                                                        required></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="contact-submit">
                                            <input class="shop-button" type="submit" value="{{getLanguage('sendmessage')}}">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
