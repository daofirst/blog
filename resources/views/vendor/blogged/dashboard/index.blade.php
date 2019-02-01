@extends('blogged::layout')

@section('title')
    博客
@endsection

@section('content')
    @include('blogged::dashboard.sidebar')

    <div class="main-content">
        @include('blogged::partials.navbar')
        
        <router-view></router-view>
    </div>
@endsection