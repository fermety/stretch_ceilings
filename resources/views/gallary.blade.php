@extends('master')

@section('title', 'Галерея')

@section('content')
<div class = "container__gallary">
    <div class = "container__inner">        
        <div class = "container__logo">ALSO</div>
        <nav class = "nav">
            <a class="nav__link" href="{{ route('index') }}">Главная</a>
            <a class="nav__link" href="{{ route('company') }}">О компании</a>
            <a class="nav__link" href="{{ route('type') }}">Виды натяжных потолков</a>
            <a class="nav__link" href="{{ route('gallary') }}">Галерея</a>
            <a class="nav__link" href="#content3">Контакты</a>
        </nav>
    </div>        
</div> 
<br>
<br>
<br>
<section class="gallery">
    <h2 class="title">Галерея</h2>
    <div class="gallery-list">
      <a href="/images/shop1.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop1.jpg" alt="alt">
      </a>
      <a href="images/shop2.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="images/shop2.webp" alt="alt">
      </a>
      <a href="/images/shop3.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop3.webp" alt="alt">
      </a>
      <a href="/images/shop4.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop4.webp" alt="alt">
      </a>
      <a href="/images/shop5.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop5.webp" alt="alt">
      </a>
      <a href="/images/shop6.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop6.webp" alt="alt">
      </a>
      <a href="/images/shop7.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop7.webp" alt="alt">
      </a>
      <a href="/images/shop8.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop8.webp" alt="alt">
      </a>
      <a href="/images/shop9.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop9.webp" alt="alt">
      </a>
      <a href="/images/shop10.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop10.webp" alt="alt">
      </a>
      <a href="/images/shop11.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop11.webp" alt="alt">
      </a>
      <a href="/images/shop12.webp" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop12.webp" alt="alt">
      </a>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
  <script>
    $(".gallery-list").magnificPopup({
      delegate: "a",
      type: "image",
      gallery: {
        enabled: true
      }
    });
  </script>
@endsection