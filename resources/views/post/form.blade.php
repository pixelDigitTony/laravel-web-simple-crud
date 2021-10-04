@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Form</div>
                <div class="card-body">
                    @if($data)
                    <form action="{{ route('post.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Time Created</label>
                        <textarea class="form-control" rows="5" name="description">{{ $data->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @else
                    <form action="{{ route('post.save') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Content</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
