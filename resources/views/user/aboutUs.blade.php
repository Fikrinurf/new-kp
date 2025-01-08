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
                <div class="bg-light"">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3328206579354!2d108.51610857504429!3d-6.97000579303063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f17a006c1ae7b%3A0x16279b08348312f!2sPakuwon%20Mini%20Soccer!5e0!3m2!1sid!2sid!4v1736267874545!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>




</section>



@endsection