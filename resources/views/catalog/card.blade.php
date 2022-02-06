
<div class="col-3 mb-4 d-flex align-items-stretch">
    <div class="card">
        <img class="card-img-top" src="{{ $product->cover }}" alt="{{ $product->title }}">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('catalog.show', ['slug' => $product->slug]) }}">
                    {{ $product->title }}
                </a>
            </h5>
            <p>
                @foreach($product->categories as $category)
                    <a href="">
                            <span class="badge
                             @if ($category->id == 1)
                               badge-primary
                                @elseif($category->id == 2)
                                badge-secondary
                                @elseif($category->id == 3)
                                badge-success
                                @elseif($category->id == 4)
                                badge-danger
                                @elseif($category->id == 5)
                                badge-warning
                            @endif
                                mr-1">{{ $category->name }}</span>
                    </a>
                @endforeach
            </p>
            <p>&dollar;{{ $product->price }}</p>
            <p class="card-text">
                {{ str_limit($product->description, 120, '...') }}
            </p>

        </div>
        <div class="card-footer">
                <span class="badge {{ $product->stock > 0 ? 'badge-success' : 'badge-danger'}}">
                    {{ $product->stock > 0 ? 'В наличии' : 'Нет в наличии'}}
                </span>
            <span class="float-right">
                <a href="{{ $product->stock > 0 ? route('cart.add', ['productId' => $product->id]) : '#' }}"
                   class="btn btn-sm btn-outline-secondary waves-effect">
                    Добавить <i class="fas fa-cart-arrow-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
