@extends('layouts.master')

@section('title', 'Produits ' . ucfirst($categorie) . ' - EcomStylish')

@section('content')
    <h1 class="category-title">
        <i class="fas {{ $categorie == 'hicking' ? 'fa-hiking' : 'fa-home' }}"></i>
        {{ $categorie == 'hicking' ? 'Équipement de Randonnée' : 'Électroménager' }}
    </h1>
    
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('imgs/' . $product['image']) }}" 
                     alt="{{ $product['nom'] }}" 
                     class="product-image"
                     onerror="this.src='https://via.placeholder.com/300x200?text=Produit'">
                
                <div class="product-info">
                    <h3 class="product-name">{{ $product['nom'] }}</h3>
                    <div class="product-price">{{ number_format($product['prix'], 0, ',', ' ') }} DH</div>
                    
                    <div class="product-rating">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= rand(3,5) ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                        <span class="rating-count">({{ rand(10, 200) }})</span>
                    </div>
                    
                    <button class="btn-add-to-cart">
                        <i class="fas fa-cart-plus"></i> Ajouter au panier
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    
    <style>
        .text-warning { color: #ffc107; }
        .text-muted { color: #6c757d; opacity: 0.3; }
        .product-rating {
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .rating-count {
            margin-left: 10px;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
@endsection