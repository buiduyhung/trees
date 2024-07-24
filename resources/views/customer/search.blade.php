@extends('customer.layout.default')

@section('content')
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-0">Kết quả tìm kiếm</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="product-item-wrap row">
                            @foreach($results as $productLastest)
                                <div class="col-xl-3 col-md-4 col-sm-6 pt-4">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="/single-product/{{ $productLastest->id }}">
                                                <img class="primary-img"
                                                        src="{{ asset('storage/images/' . $productLastest->image) }}"
                                                        alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>

                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                            wire:click.prefetch="quickView({{ $productLastest->id }})">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-tippy="Add to cart" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                            wire:click="addToCart({{ $productLastest->id }})">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name"
                                                href="/single-product/{{ $productLastest->id }}">{{ $productLastest->name }}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">{{ number_format($productLastest->export_price) }} VNĐ</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">

                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
