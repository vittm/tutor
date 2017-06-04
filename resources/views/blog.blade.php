@extends('layouts.blog')

@section('content')
<ul class="post-list">
@foreach($post as $key => $value)
@if($value->category == 'cau-hoi')
          <li>
            


    
<!-- Not meant to be used directly -->
<div class="ask-anything-card pd0">
  <div class="ask-anything-card__rank-and-details">

    <div class="ask-anything-card__rank-and-details__details">

      <h2 class="ask-anything-card__rank-and-details__details__title"><a href="{{ url('chi-tiet') }}-{{ $value->title_sym }}">{{ $value->title }}</a></h2>
    </div>
  </div>

  <div class="ask-anything-card__statistic-list">
    <ul class="statistic-list">
      <li>{{ $value->viewed}} views</li>
      <li>{{ App\Blogposts::countCmt($value->id) }} comments</li>
    </ul>
  </div>

  <div class="ask-anything-card__user-snippet">
    <div class="user-snippet">
      <a class="user-snippet__avatar" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}"><img class="avatar-blog" src="{{ url('img/avatar')}}/{{$value->avatar}}"></a>

      <div class="user-snippet__details">
        <div class="user-snippet__details__primary">
          <a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a>
        </div>

        <div class="user-snippet__details__secondary">
          @foreach( $category as $cate) @if($cate->title_sym == $value->category ) {{ $cate->title}} @endif @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="ask-anything-card__top-answer"><div class="top-answer"><h4 class="top-answer__title">Top Answer</h4><p class="top-answer__answer">{{ App\Blogposts::topCmt($value->id) }}</p></div></div>

  <div class="ask-anything-card__vote-and-answer">
    <div class="ask-anything-card__vote-and-answer__vote">
    <div class="vote vote--with-upvoters" >
                <div class="vote__buttons" >
                    <div class="vote__upvote" >
                      <a href="" class="button button--upvote" data-reactid=".5.0.0.0"><div class="button--upvote__upvote" >Tăng vote</div><div class="button--upvote__score " data-reactid="{{ $value->id }}">{{ $value->vote}}</div>
                        <input type="hidden" class="idpost" value="{{ $value->id }}">
                        <input type="hidden" class="slug-title" value="{{ $value->title_sym }}">
                      </a>
                      
                    </div>
                      <div class="vote__downvote"><a href="" class="small muted button--downvote" >Hạ vote 
                        <input type="hidden" class="idpost" value="{{ $value->id }}">
                        <input type="hidden" class="slug-title" value="{{ $value->title_sym }}">
                      </a></div>

              </div>
          
        </div>
    </div>

    <div class="ask-anything-card__vote-and-answer__answer">
      <a class="button button--secondary button--small button--bordered" href="{{ url('chi-tiet') }}-{{ $value->title_sym }}">Answer</a>
    </div>
  </div>
</div>

          </li>
          @else
          <li>
                

    <div class="post-card pd0">
      <div class="post-card__wrapper">
        <div class="post-card__rank-and-thumbnail col-md-4 pd0">
          <a class="post-card__rank-and-thumbnail__thumbnail " href="{{ url('chi-tiet') }}-{{ $value->title_sym }}"><img class="reponsive" alt="{{ $value->title }}" src="{{ url('img')}}/{{ $value->img }}"></a>
        </div>

        <div class="post-card__details">

          <h2 class="post-card__details__title"><a href="{{ url('chi-tiet') }}-{{ $value->title_sym }}">{{ $value->title }}</a></h2>

          <div class="post-card__details__statistic-list">
            <ul class="statistic-list">
              <li>{{ $value->viewed}} views</li>
              <li>{{ App\Blogposts::countCmt($value->id) }} comments</li>
            </ul>
          </div>

          <div class="post-card__details__user-snippet">
            <div class="user-snippet">
              <a class="user-snippet__avatar" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}"><img class="avatar-blog" alt="{{ $value->name }}" src="{{ url('img/avatar')}}/{{ $value->avatar }}"></a>

              <div class="user-snippet__details">
                <div class="user-snippet__details__primary">
                  <a class="dark" href="{{ url('img/avatar')}}/{{$value->avatar}}">
                    {{ $value->name }}
</a>                </div>

                <div class="user-snippet__details__secondary">
                  @foreach( $category as $cate) @if($cate->title_sym == $value->category ) {{ $cate->title}} @endif @endforeach
                </div>
              </div>
            </div>
          </div>

          <hr class="post-card__details__separator">

          <div class="post-card__details__vote">
            <div class="vote vote--with-upvoters" >
                <div class="vote__buttons" >
                    <div class="vote__upvote" >
                      <a href="" class="button button--upvote" data-reactid=".5.0.0.0"><div class="button--upvote__upvote" >Tăng vote</div><div class="button--upvote__score " data-reactid="{{ $value->id }}">{{ $value->vote}}</div>
                        <input type="hidden" class="idpost" value="{{ $value->id }}">
                        <input type="hidden" class="slug-title" value="{{ $value->title_sym }}">
                      </a>
                      
                    </div>


                      <div class="vote__downvote"><a href="" class="small muted button--downvote" >Hạ vote 
                        <input type="hidden" class="idpost" value="{{ $value->id }}">
                        <input type="hidden" class="slug-title" value="{{ $value->title_sym }}">
                      </a></div>

              </div>
          
        </div>
          </div>
        </div>
      </div>
    </div>

              </li>
              @endif
@endforeach
        <li><a id="load-more" class="button button--block" href="/ask_anything">Load More Ask Anything</a></li>
      </ul>
@endsection
