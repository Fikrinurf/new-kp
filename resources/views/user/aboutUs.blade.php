@extends('layout-fe.app')
@push('css')
<link rel="stylesheet" href="{{ asset('fe/aboutUs.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush
@section('content')

<section class="photo-aboutus">

    <div class="card">
        <img src="{{ asset('img/aboutus.png') }}" alt="">
        <div class="card-img-overlay">
            <h1 class="card-title text-aboutUs text-white">About Us</h1>
        </div>
    </div>
</section>

<section class="container-service d-flex gap-5 justify-content-center">
    <div class="col-6 col-sm-3  card-service ">
        <div class="icon-service">
            <img src="{{ asset('img/icon/phone.png') }}" alt="">
        </div>
        <div>
            <h2 class="judul-service">Phone</h2>
            <p class="artikel-service">+62 812-9990-4546</p>
        </div>

    </div>


    <div class="col-6 col-sm-3  card-service ">
        <div class="icon-service">
            <img src="{{ asset('img/icon/email.png') }}" alt="">
        </div>
        <div>
            <h2 class="judul-service">Email</h2>
            <p class="artikel-service">pakuwon@gmail.com</p>
        </div>

    </div>


    <div class="col-6 col-sm-3  card-service ">
        <div class="icon-service">
            <img src="{{ asset('img/icon/location.png') }}" alt="">
        </div>
        <div>
            <h2 class="judul-service">Location</h2>
            <p class="artikel-service">Ancaran, Kuningan</p>
        </div>

    </div>
</section>

<div class="container ">
    <div class="row g-5 container-contact">
        <!-- Contact Form -->
        <div class="col-md-5 ">
            <div class="contact-form">
                <h2 class="fw-bold">Get In Touch !</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor</p>
                <form action="contact.php" method="post">
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" placeholder="Message" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>
                </form>
            </div>
        </div>
        <!-- Location Section -->
        <div class="col-md-5">
            <div class="location">
                <h2 class="fw-bold">Our location</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor</p>
                <div class="bg-light" style="height: 16rem; border-radius: 0.5rem;"></div>
            </div>
        </div>
    </div>
</div>




</section>



@endsection