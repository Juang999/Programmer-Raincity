@extends('layouts.app')

@section('title', 'Welcome To My Website!')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Montserrat:wght@300&family=Poppins&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
<div class="container d-flex flex-column justify-content-center justify-content-lg-between main">
    <div class="frame-photo d-flex justify-content-center">
        <img src="/img/20221021_200621.png" class="photo">
    </div>
    <div class="d-sm-flex justify-content-sm-center align-items-lg-center welcome">
        <div class="text-center text-lg-end">
            <h1 class="text-white" style="font-family: 'Manrope';">I'm Juang</h1>
            <h5 class="text-secondary" style="font-family: 'Montserrat';">Web Developer & Backend Developer</h5>
            <a href="https://wa.me/6281325507780" class="btn btn-danger fs-5 mt-3 mt-lg-5">Hire Me!</a>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center description" style="background-color: rgba(30,30,30,1);">
    <div class="d-lg-flex justify-content-lg-center align-items-lg-center model">
        <div class="d-flex justify-content-center cover">
            <div class="d-flex align-items-center justify-content-center about-me"
                style="background-image: url('/img/background.png');background-repeat: no-repeat; background-size: cover;">
                <h1 class="text-white">About Me</h1>
            </div>
        </div>
        <div class="wrap">
            <div class="text-center text-lg-start my-description">
                <h4 class="text-white">Bangkit Juang Raharjo</h4>
                <br>
                <p class="text-white">I am a web developer who focuses on building systems (Backend Developer). I used
                    to
                    use laravel to create systems and can also make systems with expressjs and golang with further
                    learning.
                    <br>
                    <br>
                    I also have a strong will to learn new things, improve my communication skills and knowledge</p>
            </div>
            <div class="d-flex flex-column-reverse align-items-center flex-lg-row justify-content-lg-start buttons">
                <a href="/portofolio" class="button-portofolio btn btn-danger">Visit Portofolio Page</a>
                <div class="dropdown">
                    <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Download CV
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CV Creative</a></li>
                        <li><a class="dropdown-item" href="#">ATS Friendly</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center align-items-center services">
    <div class="wrap1 d-lg-flex flex-lg-column align-items-lg-center">
        <div class="mx-5">
            <h2 class="text-white text-center">Services</h2>
            <hr class="border border-danger border-3 opacity-100 mx-auto" width="70px">
        </div>
        <div class="d-flex flex-column align-items-center flex-lg-row justify-content-lg-evenly cards">
            <div class="card bg-transparent border border-danger border-3">
                <div class="card-body d-flex align-items-center">
                    <div>
                        <i class="bi bi-code-slash text-danger fs-1"></i>
                        <h5 class="card-title text-white">Backend Developer</h5>
                        <p class="card-text text-white-50">I have more or less studied the backend field for two years
                        </p>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent border border-danger border-3">
                <div class="card-body d-flex align-items-center">
                    <div>
                        <i class="bi bi-braces text-danger fs-1"></i>
                        <h5 class="card-title text-white">Web Developer</h5>
                        <p class="card-text text-white-50">
                            besides my learning about the backend I also learned about making website applications</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
