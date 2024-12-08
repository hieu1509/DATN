@extends('admin.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <h4>Chỉnh sửa danh mục</h4>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">
                @error('name')
                <div class="invalid-feedback fs-6">
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $category->description }}</textarea>
                @error('description')
                <div class="invalid-feedback fs-6">
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
