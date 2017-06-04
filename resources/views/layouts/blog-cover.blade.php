<div class="hero hero--diagramming">

  <div class="container">
    <div class="hero__content">
      <div class="layout-row">
        <div class="layout-column layout-column--8 layout-column--offset-1">
          <div class="category-snippet">
            <h1 class="category-snippet__name">
                @foreach( $category as $cate) @if($cate->title_sym == $getcategory ) {{ $cate->title}} @endif @endforeach
            </h1>

            <p class="category-snippet__description">
              <!--   This section is dedicated to all things that contribute to a healthy state of living. A life hack that’s worked for you, an empowering quote, or your favorite workout video—all of that belongs here. -->

            </p>

              <hr>

              <ul class="category-snippet__interests">
                  <li>Business</li>
                  <li>Career</li>
                  <li>Education</li>
                  <li>Engineering</li>
                  <li>Entrepreneurship</li>
                  <li>Finance</li>
                  <li>Fitness</li>
                  <li>Health</li>
                  <li>Marketing</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>