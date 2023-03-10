@extends('master')

@section('title', 'Главная')

@section('content')  
<div class = "container">
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
    <div class = "intro">
        <div class = "contacts">
            <p class = "phone">8 (906) 426 56 49</p>
            <p class = "adress">Пн.-Вс. с 8.00 до 20.00</p>
            <p class = "adress">sergant5@mail.ru</p>
        </div>
        <div class = "intro__inner">
          <h1 class = "intro__title">Монтаж натяжных потолков в Батайске, Ростове-на-Дону, Азове.</h1>
          <h2 id = "content1" class = "intro__title">Делаем за один день!</h2>
        </div>
    </div>     
    <div class = "heading">
        <h1 class = "heading__title">О компании</h1>
        <div class = "heading__style">
          <p>    
            Натяжные потолки в Батайске, Азове, Ростове-на-Дону по самым лучшим ценам предлагает компания ALSO. Заказав у нас 
            натяжные потолки в Батайске, Вы получаете: одно из самых качественных полотен, производства Германии,
            с гарантией 10 лет, бесплатный выезд замерщика, профессиональных монтажников и кратчайшие сроки изготовления
            и монтажа.
            <br>
            <br>
            <h3>Работаем на рынке более 10 лет, установка (монтаж) потолка за 1 день.</h3>             
            <br>
            Мы устанавливаем качественную ПВХ-плёнку без запаха и швов. Ванны, лоджии, небольшие объемы - Делаем ВСЕ!
            При объемах выше 40 м - скидка! В наличии Светильники для натяжных потолков. Делаем так же ,
            потолочный карниз в нише, обычным накладным способом, евро карниз. Натяжные потолки с фотопечатью, с рисунком, 
            фактурные потолки "капли", "шатры", "звёздное небо", "облака", "галактика" и многое другое.                            
          </p> 
          <h3>Минимальная сумма заказа: 3500 ₽</h3> 
        </div> 
        <br>
        <br>
        <h1 class = "heading__title">Преимущества, которые вы получите при работе с нами:</h1> 
        <div class = "heading__style">
          <br>
          <ul>
            <li><span>Самая лучшая цена от 300 руб. за м.кв, в цену включен материал и монтаж;</span></li>
            <li><span>Вежливый и опытный монтажник, который все идеально сделает;</span></li>
            <li><span>Бесплатное осуществление замера с выездом на объект и оценка работ;</span></li>
            <li><span>Кто осуществил вам замер, тот и проведет монтажные работы;</span></li>
            <li><span>срок выполнения заказа со дня замера – 2 дня;</span></li>
            <li><span>гарантийный срок службы – десять лет;</span></li>
          </ul>
          <br>
          <p id = "content2">Делаем свою работу с душой и радостным сердцем!</p>    
        </div> 
        <br>
        <br>
        <h1 class = "heading__title">Виды натяжных потолков</h1> 
        <div class = "heading__style"> 
          <br>
          <h2 class = "heading__title__h2">Глянцевые натяжные потолки </h2>
          <br>
          <p>
            Глянцевый потолок является популярным и востребованным материалом для оформления потолочного пространства.
            С его помощью можно воплотить в жизнь любую идею, внести индивидуальность в свое жилище.
            <br>
            <br>
            Глянцевые полотна эластичны, отличаются гладкой, блестящей поверхностью, отличными тепло- 
            и звукоизоляционные свойства, не пропускает влагу и не вызывают аллергию.
            <br>
            <br>
            Глянцевые полотнища имеют выраженные светоотражающие свойства и отличительную особенность материала
            - зеркальное отражение. Эти свойства глянцевых полотнищ придают помещению повышенную освещенность,
            из –за чего пространство визуально расширяется, становится объемнее и больше.
          </p>
          <br>
          <h2 class = "heading__title__h2">Матовые натяжные потолки </h2>
          <br>
          <p>
            Матовая фактура натяжного потолка - универсальное решение для большинства интерьеров,
            так как имеет классический вид идеально покрашенного потолка. 
            На этой поверхности отсутствуют какие-либо отражения и блики.
            <br>
            <br>
            Матовые натяжные потолки по внешнему виду напоминают отштукатуренные потолки. 
            Если говорить о первом впечатлении, то, если выбран белый цвет, у многих создается ощущение,
            что никакой навесной конструкции нет. Потолки не нагромождают пространство, не «давят» сверху.
            Если же выбран цветной потолок, то матовая фактура более заметна. 
            Однако опять же – такие полотна выглядят гармонично и хорошо вписываются в любые интерьерные решения.
          </p>
          <br>
        </div>  
    </div>    
@endsection