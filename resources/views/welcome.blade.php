@extends('layouts.master')

@section('content')
  @include('partials.navbar')
    <div class="container">
        <h1>Artikel Berita</h1>
        @foreach ($data['articles'] as $item)
        <div class="card">
            <div class="card-header">
                {{ $item['publishedAt'] }}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <label><b>Author :</b>&nbsp;{{$item['author']}}</label>
                <br><br>
                <center><h3>{{$item['title']}}</h3></center>
                <br>
                <div class="image">
                <img src="{{ $item['urlToImage'] }}" alt="article image">
                </div>
                <p>{{ $item['description'] }}</p>
                <br>
                <label><b>URL :</b> <a href="{{ $item['url'] }}">{{ $item['url'] }}</a></label>
                <br>
                <label class="blockquote-footer">{{ $item['content'] }}</label>
              </blockquote>
            </div>
          </div>
          <hr>
        @endforeach
    </div>
    @include('partials.footer')
@endsection
