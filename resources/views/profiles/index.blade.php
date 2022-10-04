@extends('layouts.app')

@section('content')
<div class="container col-8 home-cont">
    <div class="row">
        <div class="col-4 pt-5">
            <img src="../img/gram-logo-mazas.png" alt="gram-logo">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username ?? 'None' }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-25"><strong>153</strong> posts</div>
                <div class="pr-25"><strong>23k</strong> followers</div>
                <div class="pr-25"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 bold">{{ $user->profile->title ?? 'None' }}</div>
            <div>{{ $user->profile->description ?? 'None' }}</div>
            <div><a href="#">{{ $user->profile->url ?? '' }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img class="w-100 h-100" src="../img/program1.jpg" alt=""></div>
        <div class="col-4"><img class="w-100 h-100" src="../img/program2.jpg" alt=""></div>
        <div class="col-4"><img class="w-100 h-100" src="../img/program3.jpg" alt=""></div>
    </div>

</div>
@endsection
