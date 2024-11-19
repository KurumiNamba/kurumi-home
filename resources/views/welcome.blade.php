@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <img src="{{ asset('images/485A0050.JPG') }}" alt="home" class="w-100 home-img">
    <div class="container">
        <div class="home-img-text">
            <p class="display-1 text-white">Kurumi.N</p>
            <h1 class="display-6">Web Developer with Proficiency in English and Japanese</h1>
        </div>
    </div>
    <div class="container">
        <div class="section" id="about">
            <div class="text-center" id="about-header">
            <div class="heading-underline">
                <small class="fw-bold">私について</small>
                <h2>About Me</h2>
            </div>
        </div>
            
            <div class="mt-5 about-me">
            <div class="about-me-1">
                <img src="{{asset('images/image0.jpeg')}}" alt="Kurumi.N" class="about-me-img">
            </div>
            <div class="about-me-2">
                <h2 class="mb-5 name">Kurumi Namba</h2>
                <ul>
                    <li class="history mb-3">2004 Born in Tokyo, Japan</li>
                    <li class="history">2022 April- Enrolled Chiba University</li>
                    <li class="history">2023 Became Certified Cosme Concierge</li>
                    <li class="history">2024 July-October Learned Programming in Cebu</li>
                    <li class="history">2024 November- Started worked as a freelancer</li>
                </ul>
            </div>
        </div>
        <div class="section mb-5">
            <div class="about-me-3">
                <div class="skill1" id="skill1">
                    <h2 class="heading-24 mt-5" data-number="01">English & Japanese</h2>
                    <p>I can speak both English and Japanese. I scored 860 on the TOEIC L&R.</p>
                </div>
                <div class="skill2" id="skill2">
                    <h2 class="heading-24 mt-5 skills-2" data-number="02">Web Development</h2>
                    <p class="skills-2">Since I learned programming in Cebu, I can create web applications using programming languages below.</p>
                    <p class="skills-2">✓HTML, CSS, PHP, Laravel</p>
                </div>
                <div class="skill3" id="skill3">
                    <h2 class="heading-24 mt-5 skills-3" data-number="03">Knowledge of Cosmetic Product</h2>
                    <p class="skills-3">I am a Certified Cosme Concierge from the Japan Cosmetic Licensing Association.</p>
                </div>
                <div class="skill4" id="skill4">
                    <h2 class="heading-24 mt-5 skills-4" data-number="04">Instagram Promotion</h2>
                    <p class="skills-4">As a Cosme Concierge, I have an Instagram account promoting cosmetic products.</p>
                    <p class="skills-4">I built a community of over 1,000 followers in my first year.</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="section mb-5" id="values">
            <div class="text-center" id="values-header">
                <div class="heading-underline">
                    <small class="fw-bold">私の大切にしていること</small>
                    <h2>Core Values at Work</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center my-5" id="values1">
                    <p class="values-p">High Quality</p>
                    <i class="fa-regular fa-star values-i"></i>
                    <p class="mt-4">I offer competitive rates without compromising on quality.</p>
                </div>
                <div class="col text-center my-5" id="values2">
                    <p class="values-p">Politeness & Respect</p>
                    <i class="fa-regular fa-heart values-i"></i>
                    <p class="mt-4">I will do my best in every task.</p>
                </div>
                <div class="col text-center my-5" id="values3">
                    <p class="values-p">Prompt Response</p>
                    <i class="fa-regular fa-comments values-i"></i>
                    <p class="mt-4">I make it a priority to reply within 6 hours.</p>
                </div>
            </div>
            <div class="row">
                <p>These are my core values.</p>
                <p>Although I am a new freelancer, I am committed to handling any task with sincerity and dedication.</p>
            </div>
        </div>
    </div>
    </div>
    <div style="background-color: #5ba995;  padding-bottom: 50px;">
        <div class="container">
        <div class="section text-center py-5" id="contact">
            <small class="fw-bold text-white">お問い合わせ</small>
            <h2 class="text-white">Contact</h2>
        </div>
       <form action="{{route('store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label text-white fw-bold">Name</label>
            <input type="text" id="name" class="form-control" name="name">
            @error('name')
                <p class="small text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-white fw-bold">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            @error('email')
                <p class="small text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="message" class="form-label text-white fw-bold">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            @error('message')
                <p class="small text-danger">{{$message}}</p>
            @enderror
          </div>
          <button class="btn w-100 mt-4 submit" type="submit">Submit</button>
       </form>
       @if (session('success'))
    <div class="text-center text-white mt-3">
        {{ session('success') }}<i class="fa-regular fa-face-smile-wink ms-2"></i>
    </div>
@endif

    </div>
    </div>
    <div class="footer my-3 text-center">
        <small style="color: #5ba995;">&copy; 2024 Kurumi Namba</small>
    </div>
@endsection