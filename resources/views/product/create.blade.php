@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">Thêm bài viết</div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>

            <form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Tên bài viết</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Giá cả</label>
                    <input type="text" name="price" value="{{old('price')}}" class="form-control" id="exampleInputEmail"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Đường dẫn hình ảnh</label>
                    <input type="text" name="slide_url" value="{{old('slide_url')}}" class="form-control"
                        id="exampleInputEmail" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Danh mục</label>
                    <select name="category_id" class="form-select" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                
                <button type="submit" class="btn btn-dark">Thêm</button>
            </form>
        </div>
    </div>
</div>
@endsection