<div class="product-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                <div class="section-title text-center mb-65">
                    <h2>Features Products</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error</p>
                </div>
            </div>
        </div>
        <div class="row pro-active">
            @foreach ($similar as $product)
                <div class="col-xl-4">
                    <div class="product-wrapper text-center">
                        <div class="product-img pos-rel">
                            <a href="#">
                                <img src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                <img class="secondary-img" src="{{ Storage::url($product->images->first()->url) }}"
                                    alt="">
                            </a>
                            <div class="product-action">
                                {{-- <a class="action-btn" href="#"><i class="far fa-heart"></i></a> --}}
                                <a class="action-btn" href="{{ route('product-details', $product->id) }}"><i class="far fa-search"></i></a>
                                <a class="c-btn" href="#">Shop now
                                    {{-- <i class="far fa-plus"></i> --}}
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <h5>{{ $product->category->name }}</h5>
                            <h4><a href="#">{{ $product->name }}</a></h4>
                            {{-- <span>{{ $product['price'] }}</span> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
