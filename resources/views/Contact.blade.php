@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="contact-text">
                            <h2>Location</h2>
                            <p>Lovely Professional University, Phagwara, Punjab, India</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-phone-alt"></i>
                        <div class="contact-text">
                            <h2>Phone</h2>
                            <p>+91 7678332232</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p>aaryankas05@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                placeholder="Your Name" required name="name" value="{{ old('name') }}"/>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Your Email" required name="email" value="{{ old('email') }}"/>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                placeholder="Subject" required name="subject" value="{{ old('subject') }}" />
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                placeholder="Message" required name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn" style="pointer-events: none;">Send Message</button>
                        </div>
                    </form>
                    <div id="successMessage" style="display: none; margin-top: 20px; padding: 15px; background-color: #d4edda; color: #155724; border-radius: 4px; text-align: center;">
                        Message sent successfully!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#contactForm')[0].reset();
                $('#successMessage').show();
                setTimeout(function() {
                    $('#successMessage').fadeOut();
                }, 3000);
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                let errorMessage = '';
                for (let field in errors) {
                    errorMessage += errors[field][0] + '\n';
                }
                $('#successMessage').html(errorMessage).css({
                    'background-color': '#f8d7da',
                    'color': '#721c24'
                }).show();
                setTimeout(function() {
                    $('#successMessage').fadeOut();
                }, 3000);
            }
        });
    });
});
</script>
@endpush
