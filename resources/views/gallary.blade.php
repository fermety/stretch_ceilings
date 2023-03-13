@extends('master')

@section('title', 'Галерея')

@section('content')

<section class="gallery">
    <h2 class="title">Галерея</h2>
    <div class="gallery-list">
      <a href="/images/shop1.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop1.jpg" alt="alt">
      </a>
      <a href="images/shop2.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="images/shop2.jpg" alt="alt">
      </a>
      <a href="/images/shop3.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop3.jpg" alt="alt">
      </a>
      <a href="/images/shop4.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop4.jpg" alt="alt">
      </a>
      <a href="/images/shop5.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop5.jpg" alt="alt">
      </a>
      <a href="/images/shop6.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop6.jpg" alt="alt">
      </a>
      <a href="/images/shop7.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop7.jpg" alt="alt">
      </a>
      <a href="/images/shop8.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop8.jpg" alt="alt">
      </a>
      <a href="/images/shop9.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop9.jpg" alt="alt">
      </a>
      <a href="/images/shop10.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop10.jpg" alt="alt">
      </a>
      <a href="/images/shop11.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop11.jpg" alt="alt">
      </a>
      <a href="/images/shop12.jpg" class="gallery-item">
        <div class="gallery-item-hover">Посмотреть</div>
        <img src="/images/shop12.jpg" alt="alt">
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