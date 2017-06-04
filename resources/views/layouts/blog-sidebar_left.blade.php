<div class="sort-and-filter">
  <ul class="toggle sort-and-filter__sort">
      <li><a href="/">Trending</a></li>
      <li><a class="is-active" href="/popular">Popular</a></li>
      <li><a href="/latest">Latest</a></li>
  </ul>
</div>
<div class="col-md-3">
    <div class="layout-column layout-column--2 layout-column--xminor">
      <section class="card card--secondary">
        <header class="card__header card__header--secondary">
          <h3 class="card__header__title">Xem nhiều</h3>
        </header>

        <div class="card__content">
          <ul class="item-list item-list--secondary item-list--medium-compressed item-list--with-top-border">
          @foreach($sleft as $value )
              <li>
                
      <div class="post-snippet post-snippet--small">

    <div class="post-snippet__details">
      <h4 class="post-snippet__details__title"><a href="{{ url('chi-tiet') }}-{{ $value->title_sym }}">{{ $value->title }}</a></h4>

        <div class="post-snippet__details__posted">
          <a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a>

          <span class="dot dot--secondary"></span>

          <span class="muted">{{ $value->created_at }}</span>
        </div>

    </div>
  </div>

              </li>
              @endforeach
              <!-- <li><a class="small medium disclosure" href="/growth">See All in Growth</a></li> -->
          </ul>
        </div>
      </section>

      
    </div>
</div>
