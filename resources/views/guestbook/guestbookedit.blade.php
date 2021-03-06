{{-- 指定繼承 layout.head 母模板 --}}
@extends('layout.head')

{{-- 傳送資料到母模板，並指定變數為 title --}}
@section('title', $title)

{{-- 傳送資料到母模板，並指定變數為 content --}}
@section('content')
<h1>{{ $title }}</h1>
<div class="card">


    <form action={{ url('guestbook/'.$post->id) }} method="post">
    @csrf {{-- 產生CSRF token --}}
    @method('PUT')
    <div class="card-header">
        {{ $post->name }}
    </div>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" type="textarea" id="content" name="content" rows="5">{{ $post->content }}</textarea>
        </div>

        <input type="submit" value="Submit">
    </div>
    </form>
</div>

@endsection
