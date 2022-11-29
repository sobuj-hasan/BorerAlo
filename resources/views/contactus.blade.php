@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!--Start Sub Banner-->
    <style>
        .header-two .nav ul li a {
            color: #000000 !important;
        }
    </style>
    <div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="detail">
                <h1>contact us</h1>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a class="select">Contact Us</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-img"></div>
    </div>
    <div class="wave"></div>
    <!--End Sub Banner-->
    <!--Start Content-->
    <div class="content">
    <div class="contact-page">
        <!--Start Get in Touch-->
        <div class="get-in-touch">
            <div class="container">
                <div class="row">
                <div class="col-md-12 text-center">
                    <div class="get-touch-detail">
                        <h3>Get in Touch</h3>
                        <p>Address - House #1/E, Road - 4, Sector - 11, Uttara, Dhaka - 1230
                            <br/><br/>
                            Bkash  <br>
                            ★01715254124 <br>
                            ★01670807061 <br> <br>
                            Email - lakeviewcafe.uttara@gmail.com <br> <br>
                            Contact Number - 01715254124
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--End Get in Touch-->
    </div>
    </div>
    <!--End Content-->
@endsection