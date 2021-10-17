@extends('layouts.main')

@section('container')
    <h1>Kemala Adinda | Contact</h1>
    <hr />

    <div class="container marketing" style="padding: 30px">
        <h3 style="margin-bottom: 40px; text-align: center">Contact me on</h3>
        <div class="row" style="text-align: center">
            <div class="col-lg-4">
                <a href="https://www.facebook.com/kemala.adinda" style="padding: 10px" target="blank">
                    <i class="bi bi-facebook" style="font-size: 70px; color: #3b5998"></i>
                </a>
                <h5 style="padding: 5px">Facebook</h5>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="https://www.instagram.com/kemaladinda/" style="padding: 10px" target="blank">
                    <i class="bi bi-instagram" style="font-size: 70px; color: #c32aa3"></i>
                </a>
              <h5 style="padding: 5px">Instagram</h5>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="https://www.linkedin.com/in/kemala-adinda-salwa-62171716a/" style="padding: 10px" target="blank">
                    <i class="bi bi-linkedin" style="font-size: 70px; color: #007bb5"></i>
                </a>
              <h5 style="padding: 5px">LinkedIn</h5>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>

    <hr />
    <h4><strong>Write down your opinion about my blog: </strong></h4>
    @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
    @endif
    <div class="card mb-5 mt-3" style="max-width: 50%; background-color: #fdeddb;">
    <div class="col-lg-15" style="padding: 10px">
        <form action="add" method="post">
            @csrf
            <div class="contact-form">
                <div class="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Type your name..." required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Type your email..." required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Type your message..." required>
                    </div>
                    <button type="submit" class="btn btn-warning" name="sendMessageButton">Send</button>
                </form>
            </div>
        </form>
    </div>
    </div>


@endsection
