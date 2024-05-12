<section class="shop-banner-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="shop-thumb-tab">
                    <ul class="nav" id="myTab2" role="tablist">
                        @foreach ($product->images as $key => $image)
                            <li class="nav-item">
                                <a class="nav-link {{ $key === 0 ? 'active' : '' }}" id="tab-{{ $key }}"
                                    data-toggle="tab" href="#image-{{ $key }}" role="tab"
                                    aria-selected="{{ $key === 0 ? 'true' : 'false' }}">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $image['alt'] }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-details-img mb-30">
                    <div class="tab-content" id="myTabContent2">
                        @foreach ($product->images as $key => $image)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}"
                                id="image-{{ $key }}" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $image['alt'] }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="product-details-wrapper mb-30">
                    <div class="product-text">
                        <h5>{{ $product->category->name }}</h5>
                        <h4>{{ $product->name }}</h4>
                        {{-- <span>$250.99</span> --}}
                    </div>
                    <div class="product-variant">
                        {{-- <div class="product-desc">
                        <p>On the other hand, we denounce with righteous indigna <br>
                            tion and dislike men who are so beguiled and demor</p>
                    </div> --}}
                        {{-- <div class="product-info-list">
                        <span>Size</span>
                        <a href="#">l</a>
                        <a href="#">m</a>
                        <a href="#">s</a>
                        <a href="#">x1</a>
                    </div> --}}
                        {{-- <div class="product2-info-list">
                        <span>color</span>
                        <a class="p--1" href="#"></a>
                        <a class="p--2" href="#"></a>
                        <a class="p--3" href="#"></a>
                        <a class="p--4" href="#"></a>
                    </div> --}}
                        <span class="stock">{{ $product->quantity }} In Stock</span>
                        <div class="product-action-details ">
                            <div class="product-details-action">
                                <form action="#">
                                    {{-- <div class="plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="1">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div> --}}
                                    <div class="details-cart-btn">
                                        <button class="c-btn red-btn">
                                            Shop now
                                            {{-- <i class="far fa-plus"></i> --}}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="pro-details-icon">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="#"><i class="far fa-search"></i></a>
                            <a href="#"><i class="far fa-exchange"></i></a>
                        </div> --}}
                        {{-- <div class="product-02-list">
                            <ul>
                                <li>
                                    <div class="pro-02-list-info f-left">
                                        <span>Categories :</span>
                                    </div>
                                    <div class="pro-02-list-text">
                                        <span>Mask, Covid -19, Sanitizer, Facemask</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="pro-02-list-info f-left">
                                        <span>SKU :</span>
                                    </div>
                                    <div class="pro-02-list-text">
                                        <span>012345</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="pro-02-list-info f-left">
                                        <span class="pro11">Share Now :</span>
                                    </div>
                                    <div class="pro-02-list-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
