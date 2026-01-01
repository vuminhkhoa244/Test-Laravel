@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Products</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div 
            onclick="openModal(this)"
            data-name="{{ $product->name }}"
            data-description="{{ $product->description }}"
            data-price="${{ number_format($product->price, 2) }}"
            class="bg-white p-6 rounded-xl shadow-md transition-all duration-300 
                   hover:shadow-2xl hover:-translate-y-1 cursor-pointer 
                   flex flex-col h-full border border-transparent hover:border-blue-200"
        >
            <h2 class="font-bold text-xl mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">
                {{ $product->name }}
            </h2>
            
            <p class="text-gray-600 mb-4 flex-grow text-sm">
                {{ Str::limit($product->description, 50) }}
            </p>
            
            <div class="flex justify-between items-center mt-auto border-t pt-4">
                <p class="font-bold text-lg text-blue-600">${{ number_format($product->price, 2) }}</p>
                
            </div>
        </div>
    @endforeach
</div>

@include('partials.product-modal')

<script>
    function openModal(card) {
        const name = card.getAttribute('data-name');
        const desc = card.getAttribute('data-description');
        const price = card.getAttribute('data-price');

        document.getElementById('modalTitle').innerText = name;
        document.getElementById('modalDescription').innerText = desc;
        document.getElementById('modalPrice').innerText = price;

        document.getElementById('productModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('productModal').classList.add('hidden');
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") closeModal();
    });
</script>

@endsection