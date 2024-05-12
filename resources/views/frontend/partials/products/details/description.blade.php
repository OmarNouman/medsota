<section class="product-desc-area pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="bakix-details-tab">
                    <ul class="nav text-center pb-30 mb-50" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#id-desc"
                                role="tab" aria-controls="home" aria-selected="true">Description </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add" role="tab"
                                aria-controls="profile" aria-selected="false">Additional
                                Information</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="id-desc" role="tabpanel"
                        aria-labelledby="desc-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event-text">
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                        <div class="additional-info">
                            <div class="table-responsive">
                                <h4>Additional information</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="product_weight">1.4 oz</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td class="product_dimensions">62 × 56 × 12 in</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td class="product_dimensions">XL, XXL, LG, SM, MD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="product-desc-imgmb-30">
                    <img src="assets/img/products/pr-banner.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>