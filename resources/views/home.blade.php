@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="images/pizzafull-slice.png" class="rounded-circle" style="max-height: 200px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Graysen Anson</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>9k</strong> followers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">zonesoldier.com</div>
            <div>Junior Software Engineer with some knowledge of backend/front end development. Specializes in Python, C#, Java. Still learning new languages to have a better understanding and be worth more to the job market.</div>
            <div><a href="zonesoldier.com">zonesoldier.com</a></div>
        </div>
    </div>
{{--    Posts  --}}
    <div class="row pt-5">
        <div class="col-4">
            <img src="images/pizza1.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="images/pizza2.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="images/pizza3.png" class="w-100 h-50">
        </div>
    </div>
</div>
@endsection
