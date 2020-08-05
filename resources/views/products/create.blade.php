@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Products</div>

                <div class="card-body">
                   <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <label for="name" id="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price" id="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="discription">Discription</label>
                            <textarea name="discription" id="discription" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Create Products</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
