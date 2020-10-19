@extends('frontend/layouts/master')
@section('title','All products by Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="categorie_d_right mt-1">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="large" role="tabpanel">
                            <div class="row cate_tab_product">
                                @if(count($products)>0)
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single_product categorie card">
                                            <div class="product_thumb">
                                                <a href="single-product.html">
                                                    <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt="">
                                                </a>
                                                <div class="product_discount">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title=" Add to Wishlist ">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title=" Add to Compare ">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title=" Add to cart ">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content p-3">
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="single-product.html">{{ $product->title }}</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> {{ $product->price }} Tk</span>
                                                    <span class="old_price">  {{ $product->old_price }}  Tk</span>
                                                </div>
                                                {{-- <div class="_card-footer"> --}}
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <a href="{{ route('single.producs',$product->id) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <form class="" action="{{ route('card.store') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                                <button class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @else
                                <div class="col-md-12 well">
                                    <div class="item text-center">
                                       <h1 class="text-danger">Opps !!</h1>
                                       <h3>No data Found</h3><br>
                                        <div class="abstract-div">
                                            <div class="abstract-cropped text-center w-100">
                                                Go to <a href="/">Home</a>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            @foreach($products as $product)
                                <div class="single_product categorie">
                                <div class="row cate_tab_product">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>

                                            <div class="quick_view categorie_view">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <div class="product_content">
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name categorie_name">
                                                <a title="Printed Summer Dress" href="single-product.html"> {{ $product->title }} </a>
                                            </div>
                                            <div class="small_product_price categorie_prie mb-10">
                                                <span class="new_price"> {{ $product->price }} Tk</span>
                                                <span class="old_price"> {{ $product->old_price }} Tk </span>
                                            </div>
                                            <div class="single__product_drsc">
                                                {!! $product->description !!}
                                            </div>

                                            <div class="product_in_stock mt-2">
                                                <span> In stock </span>
                                            </div>
                                            <div class="_card-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('single.producs',$product->id) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form class="" action="{{ route('card.store') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                            <button class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
