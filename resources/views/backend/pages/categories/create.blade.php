@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    Add Category
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.category.store') }}" method="post" enctype="multipart/form-data">   {{--enctype for image insert purpose--}}
                        @csrf     {{--generates hidden token--}}
                        @include('backend.partials.messages')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Parent Category</label>
                            <select class="form-control" name="parent_id" >
                                @foreach($main_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="image">Category Image</label>

                            <input type="file" class="form-control" name="image" id="image" >

                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->

@endsection
