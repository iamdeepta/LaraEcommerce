@extends('layouts.master')

@section('content')
{{--    Sidebar + Content Start--}}

<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">Second item</a>
                <a href="#" class="list-group-item list-group-item-action">Third item</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="widget">
                <h3>Featured Products</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'boyamic.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Boya M1</h4>
                                <p class="card-text">1000 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'beatsheadphone.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beats</h4>
                                <p class="card-text">2000 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'boyamic.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Boya M1</h4>
                                <p class="card-text">850 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'beatsheadphone.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beats</h4>
                                <p class="card-text">1345 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'beatsheadphone.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beats</h4>
                                <p class="card-text">1345 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'beatsheadphone.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beats</h4>
                                <p class="card-text">1345 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'.'beatsheadphone.png') }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beats</h4>
                                <p class="card-text">1345 Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">

            </div>
        </div>
    </div>
</div>

{{--    Sidebar + Content End--}}

@endsection
