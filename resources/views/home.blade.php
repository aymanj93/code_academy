@extends('layouts.app')

@section('content')
    <div class="desktop-primary">
        <div class="white grid-dashboard">
            <div>
                <h2>Focus on the recent trends of Web Dev</h2>
                <h1 style="margin-top:30px;">Follow multiple new frameworks and libraries to enhance your web dev career</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-6 text-right" style="margin-top: 40px;">
            <img src="{{asset('/img/desktop.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/desktop2.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/mac.jpg')}}" alt="" height="300" width="300" style="margin-top: 20px">
            <img src="{{asset('/img/macspec.jpeg')}}" alt="" height="300" width="300" style="margin-top: 20px">
        </div>
        <div class="col-md-6" style="margin-top: 100px;">
            <div class="col-md-6">
                <h1 style="font-size: 50px;">Learn Frontend Development with Tailwind & Jquery</h1>
                <div class="border-line">&nbsp;</div>
                <p style="font-size: 25px;">Get started with FrontEnd libraries & frameworks that is commonly used accross web dev industries. Browse through easy-to-follow videos that will kick start your career today.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-6 text-right" style="margin-top: 100px;">
            <div class="col-md-6">&nbsp;</div>
            <div class="col-md-6">
                <h1 style="font-size: 50px;">Get started with PHP & Laravel</h1>
                <div class="border-line" style="margin-left: auto;">&nbsp;</div>
                <p style="font-size: 25px;">Most companies in Malaysia are looking for backend developer especially the ones that know laravel. Get started with setting up your computer and simplify your PHP skills with laravel.</p>
            </div>
        </div>
        <div class="col-md-6 text-left" style="margin-top: 40px;">
            <img src="{{asset('/img/php1.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/php2.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/php3.jpg')}}" alt="" height="300" width="300" style="margin-top: 20px">
            <img src="{{asset('/img/php4.png')}}" alt="" height="300" width="300" style="margin-top: 20px">
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-6 text-right" style="margin-top: 40px;">
            <img src="{{asset('/img/server1.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/server2.jpg')}}" alt="" height="300" width="300">
            <img src="{{asset('/img/server3.jpg')}}" alt="" height="300" width="300" style="margin-top: 20px">
            <img src="{{asset('/img/server4.jpg')}}" alt="" height="300" width="300" style="margin-top: 20px">
        </div>
        <div class="col-md-6" style="margin-top: 100px;">
            <div class="col-md-6">
                <h1 style="font-size: 50px;">Become a specialist in Dev Ops</h1>
                <div class="border-line">&nbsp;</div>
                <p style="font-size: 25px;">Hate coding? Prefer hardware side of IT? Learn Dev Ops on how to deploy software, manages servers and control the network side of the computer. Dev Ops is highly in demand right now and you could learn the skills here.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid footer text-center" style="margin-top: 50px; padding:50px 0;">
        <h1>Improve Your Coding Skills For Free</h1>
        <p>Register for free and learn more on how to improve your coding</p>
    </div>
@endsection

@section('style')
    <style>
        .desktop-primary{
            background-image: url("/img/java.jpg");
            background-repeat: no-repeat;
            width: auto;
            height: 800px;
            opacity: 0.9;

        }
        .white{
            color: white;
            font-size: 14px;
            font-weight: 600;
        }
        .grid-dashboard{
            padding: 80px 200px;
            display: grid;
            grid-template-columns: 650px;
        }
        h2{
            font-size: 100px;
        }
        .border-line{
            border: 1px solid blue;
            background-color: blue;
            border-radius: 5px;
            width: 150px;
            height: 5px;
            margin: 15px 0;
        }
        .footer{
            background-color: black;
            color: white;
        }
    </style>
@endsection