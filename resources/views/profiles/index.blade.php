@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/pizzafull-slice.png" class="rounded-circle" style="max-height: 200px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>9k</strong> followers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>{{-- {{ ?? }} means OR --}}
        </div>
    </div>
{{--    Posts  --}}
    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/pizza1.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="/images/pizza2.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="/images/pizza3.png" class="w-100 h-50">
        </div>
    </div>
</div>
@endsection
