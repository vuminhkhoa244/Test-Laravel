@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Welcome to My Laravel App</h1>
    <p class="text-lg text-gray-700">This is a Tailwind CSS powered mini website!</p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="font-bold text-xl mb-2">Feature 1</h2>
            <p>Some description about feature 1.</p>
        </div>
        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="font-bold text-xl mb-2">Feature 2</h2>
            <p>Some description about feature 2.</p>
        </div>
        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h2 class="font-bold text-xl mb-2">Feature 3</h2>
            <p>Some description about feature 3.</p>
        </div>
    </div>
</div>
@endsection
