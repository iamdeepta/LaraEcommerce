@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.product.store') }}" method="post" enctype="multipart/form-data">   {{--enctype for image insert purpose--}}
                        @csrf     {{--generates hidden token--}}
                        @include('backend.partials.messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter quantity">

                        </div>

                        <div class="form-group">
                            <label for="product_image">Product Image</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->

@endsection
