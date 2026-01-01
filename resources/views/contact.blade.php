@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
    <p>Email: contact@myapp.com</p>
    <p>Phone: 0123 456 789</p>

    <form class="mt-6 max-w-md mx-auto bg-white p-6 rounded shadow">
        <input type="text" placeholder="Your Name" class="w-full mb-3 p-2 border rounded">
        <input type="email" placeholder="Your Email" class="w-full mb-3 p-2 border rounded">
        <textarea placeholder="Message" class="w-full mb-3 p-2 border rounded"></textarea>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send</button>
    </form>
</div>
@endsection
