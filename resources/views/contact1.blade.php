@extends('layout.main')

@section('title','contact')

@section('content')
<h1>contact</h1>
<p>Hai ini halaman contact tia.</p>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 
        
        <form action="{{ route('contact.send') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name"  class="form-label">Name:</label>
                <input type="text" id="name" name="name" placeholder="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" placeholder="email@example.com"required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" placeholder="message" required></textarea>
            </div>
            <div class="col-auto">
            <button type="submit" class="btn btn-secondary mb-3">Send Message</button>
            </div>
        </form>    
    </div>  
@endsection