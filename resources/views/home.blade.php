@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table table-success table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($posts as $post)
                    <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('post.form',$post->id) }}" type="button" class="btn btn-secondary">Update</a>    
                        <a href="{{ route('post.delete',$post->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
