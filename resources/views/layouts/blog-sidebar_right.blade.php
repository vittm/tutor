<div class="col-md-3">
<section class="card card--secondary">
          <header class="card__header">
            <h3 class="card__header__title">Thành viên nổi bật</h3>
          </header>

          <div class="card__content card__content--with-small-top-padding">
            <ul class="item-list item-list--secondary item-list--compressed">
            @foreach($sleft as $value )
                <li>
                  
    <div class="user-snippet">
    <a class="user-snippet__avatar" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}"><img class="avatar-blog" src="{{ url('img/avatar')}}/{{$value->avatar}}"></a>

    <div class="user-snippet__details">

      <div class="user-snippet__details__primary">
          <a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a>
      </div>

      <div class="user-snippet__details__secondary">
      @if($value->level_user == '1' ) {{ 'Gia Sư' }} @else {{ 'Học Viên' }} @endif
      </div>


    </div>
</div>
                </li>
                @endforeach
            </ul>
          </div>
        </section>
        <section class="card">
  <div class="card__content card__content--callout">
    <h2 class="h1">Need Advice from Moguls?</h2>

    <p>
      Gain access to our Mentors, such as the Former Chairman of Hearst Magazines and Miss New York.
    </p>

    <a class="button button--secondary" href="https://onmogul.com/courses/">Join Our Program Now</a>
  </div>
</section>
</div>