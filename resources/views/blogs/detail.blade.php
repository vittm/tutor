@extends('layouts.blog-detail')

@section('content')
  @foreach($post as $key => $value)
<div class="col-md-1">
    <div class="layout-column layout-column--1 layout-column--offset-2 layout-column--post-action-bar" style="position: relative;">
              
<input type="hidden" class="iduser" value="{{ $value->by }}">


<div class="action-bar action-bar--sticky sticky" style="position: absolute; left: 0px; right: 0px; top: 0px; bottom: auto; width: auto; margin-left: 0px; margin-right: 0px; margin-top: 0px;">
<div class="action-bar__vote">
    <div><div class="vote vote--vertical" data-reactid=""><div class="vote__upvote" data-reactid=".2.0"><a href="" class="button button--upvote button--upvote--vertical" data-reactid="{{ $value->id }}"><div class="button--upvote__upvote" data-reactid=".2.0.0.0">Tăng vote</div><div class="button--upvote__score" data-reactid="{{ $value->id }} ">{{ $value->vote }}</div>
     <input type="hidden" class="idpost" value="{{ $value->id }}">
     <input type="hidden" class="slug-title" value="{{ $value->title_sym }}">
    </a></div><div class="vote__downvote" data-reactid=".2.1"><a href="javascript:void(0);" class="small muted button--downvote" data-reactid="{{ $value->id }}">Hạ vote<input type="hidden" class="idpost" value="{{ $value->id }}">
                        <input type="hidden" class="slug-title" value="{{ $value->title_sym }}"></a></a></div></div></div>
  </div>

  <div class="action-bar__share">
    <ul class="link-list link-list--vertical link-list--compressed">
      <li><div data-react-class="FacebookShareButton" data-react-props="{&quot;size&quot;:&quot;small&quot;,&quot;url&quot;:&quot;https://onmogul.com/stories/why-you-should-not-have-a-cheat-day&quot;}"><a href="javascript:void(0);" data-reactid=".1766v7g1fcw" data-react-checksum="-1241165147"><img src="{{ url('')}}/img/icon/facebook.svg" alt="Facebook" class="icon icon--facebook icon--small" data-reactid=".1766v7g1fcw.0"></a></div></li>
    </ul>
  </div>

    <div class="action-bar__statistics">
      <ul class="statistic-list statistic-list--vertical">
        <li>
          {{ $value->viewed }}

          <br>

          views
        </li>
      </ul>
    </div>
</div><div style="height: 423px; width: 85px; margin: 0px; border-spacing: 0px; border: 0px; padding: 0px; font-size: 1em; position: static; float: none;"></div>
            </div>
    </div>
<div id="content" class="content content--with-no-bottom-margin col-md-11">



 <section class="section section--secondary section--compact">
    <div class="layout-container">
        <div class="story">
            <div class="layout-row">
                <div class="layout-column layout-column--4 layout-column--story-title-and-user-snippet">
                    <div class="story__title-and-user-snippet">
                        <div class="story__title-and-user-snippet__title">
                            <div>
                                <h1 class="title title--max-height-checked" data-reactid=".sp87efv4lc" data-react-checksum="62078909">{{ $value->title }} </h1>
                            </div>
                        </div>

                        <div class="user-snippet user-snippet--with-action">
                            <a class="user-snippet__avatar" href="/anya-perry-75"><img class="avatar-blog" alt="Anya Perry" src="{{ url('img/avatar') }}/{{ $value->avatar }}"></a>

                            <div class="user-snippet__details">
                                <div class="user-snippet__details__primary">
                      <a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a>

                                    <span class="dot"></span>

                                </div>

                                <div class="user-snippet__details__secondary">
                                    {{ $value->created_at }}

                                    <span class="dot dot--secondary"></span>

                                    <a href="{{ url('/the-loai') }}-{{ $value->category }}">@foreach( $category as $cate) @if($cate->title_sym == $value->category ) {{ $cate->title}} @endif @endforeach</a>
                                </div>

                                <div class="user-snippet--with-action__details__action">
                                    <div><a href="" class="button button--small button-follow" data-reactid=".1">Theo dõi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
  <section class="section section--with-large-top-padding">
    <div class="layout-container">
      <div class="layout-row">
            

          <div class="layout-column layout-column--7 layout-column--no-bottom-margin-mobile">
            <div class="post">
              <div class="post__body">
                      {!! $value-> content !!}
              </div>

            <div class="post__sections">
  <div class="post__section">
    <div class="post__actions">
      <div class="post__actions__mobile-vote-and-statistic-list-and-report">
        <div class="post__actions__mobile-vote-and-statistic-list-and-report__vote">
            
  <ul class="share-button-list share-button-list--mobile share-button-list--mobile-large">
    <li>
      <div><div class="vote vote--with-upvoters" >
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
          
        </div></div>
    </li>
    <li>
      <div>
        <div><a href=""><img src="/assets/redesign/facebook_color-16d1474401c7b51067a2272a2a76bfb398c14a525ce1daab0e3976d6cb4d7295.svg" alt="Facebook" class="icon icon--facebook icon--large"></a></div>
      </div>
    </li>
    <li>
      <div>
        <a href="" src="/assets/redesign/twitter_color-cc90267f4b3e2a81b9e58a65ca194571d3b12602dc841c9e8f507d687ef299bb.svg"></a>
      </div>
    </li>
    <li>
      <div>
        <a href="">
          <img alt="Email" class="icon icon--email icon--large" src="/assets/redesign/email_color-5a8e73137cb5c8696284d8e3ebf485ad7f7b4f5cbfe6cba14aa3a9c242af7de4.svg">
</a>      </div>
    </li>
    <li>
      <div class="fb-like fb_iframe_widget"><span style="vertical-align: bottom; width: 50px; height: 20px;"><iframe name="f182a0b5d8a4c8c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="" class="" style="border: none; visibility: visible; width: 50px; height: 20px;"></iframe></span></div>
    </li>
  </ul>

          
        </div>
      </div>

      <div class="post__actions__vote-and-statistic-list-and-report post__actions__desktop-vote-and-statistic-list-and-report">
        <div class="post__actions__vote">
          <div >
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

  <div class="post__section">
    <div class="post__user">
      <div class="post__user__user-snippet">
        <div class="user-snippet user-snippet--with-action">
          <a class="user-snippet__avatar" href="/anya-perry-75"><img alt="{{ $value->name}}" class="avatar-blog" src="{{ url('/img/avatar')}}/{{ $value->avatar }}"></a>

          <div class="user-snippet__details">
            <div class="user-snippet__details__primary">
              <span class="normal"><a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a></span>
            </div>

            <div class="user-snippet__details__secondary">
                                    {{ $value->created_at }}

                                    <span class="dot dot--secondary"></span>

                                    <a href="{{ url('/the-loai') }}-{{ $value->category }}">@foreach( $category as $cate) @if($cate->title_sym == $value->category ) {{ $cate->title}} @endif @endforeach</a>
                                </div>

            <div class="user-snippet--with-action__details__action">
                <div><a href="" class="button button--small button-follow" >Theo dõi </a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="post__user__bio">
        <p>
          N/A
        </p>
      </div>
    </div>
  </div>

            </div>
          </div>

          
@endforeach
<a name="comments"></a>
<div class="comment-box">
  <div class="comment-box__section comment-box__section--compressed">
    <h2 class="comment-box__title">{{ count($comments)}} comments</h2>
  </div>
@if(Auth::check())
  <div class="comment-box__section">
    <div class="user-action">
        <div class="user-action__avatar">
            <img class="avatar-blog" alt="{{ Auth::user()->name }}" src="{{ url('/img/avatar') }}/{{ Auth::user()->avatar }}">
        </div>

        <div class="user-action__action">
            <div class="field field--with-no-bottom-margin">
                <form class="comments__comment" id="new_comment" action="{{ url('/blog-comments') }}" accept-charset="UTF-8" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @foreach($post as $key => $value)
                    <input type="hidden" name="id_post" value="{{ $value->id }}">
                    <input type="hidden" name="symbol" value="{{ $value->title_sym }}">
                    @endforeach
                    <textarea placeholder="Add a comment..." class="field__control" name="comment" id="comment_body"></textarea>

                    <input type="submit" name="commit" value="Comment" class="button button--small">
                </form>
            </div>
        </div>
    </div>
</div>
@else
<p>Đăng nhập để comment</p>

@endif
  <div class="comment-box__section">

 @if (count($comments) > 0)
<ul class="comment-list">
   
      @include('blogs.comments', ['comments' => $comments])
    
</ul>

@endif       
  </div>
</div>
        </div>
      </div>
    </div>
  </section>

  <section class="container section section--secondary section--with-overlapping-title">
    <div class="layout-container">
      <h2 class="section__title section--with-overlapping-title__title top30">Bài viết tương tự</h2>

      <div class="section__content top30">
        <ul class="post-list post-list--horizontal post-list--horizontal--four pd0">
            @foreach($post as $value)
            <li>
              <div class="vertical-post-card">
                <div class="vertical-post-card__rank-and-details">

                  <div class="vertical-post-card__rank-and-details__details">
                    <div class="vertical-post-card__rank-and-details__details__categorization-and-time">
                      <div class="vertical-post-card__rank-and-details__details__categorization">
                        <a href="{{ url('the-loai') }}-{{ $value->category }}">@foreach( $category as $cate) @if($cate->title_sym == $value->category ) {{ $cate->title}} @endif @endforeach</a>

                      </div>

                      <div class="vertical-post-card__rank-and-details__details__time">
                        <img class="icon icon--clock icon--inline" src="img/icon/clock.svg"> {{ $value->created_at }}
                      </div>
                    </div>

                    <h2 class="vertical-post-card__rank-and-details__details__title"><a href="{{ url('chi-tiet') }}-{{ $value->title_sym }}">{{ $value->title }}</a></h2>
                  </div>
                </div>

                <a class="vertical-post-card__thumbnail" href="{{ url('chi-tiet') }}-{{ $value->title_sym }}"><img alt="How to Make an “Idea Worth Spreading” Larger Than the Media’s Ideas Not Worth Spreading." src="{{ url('img')}}/{{ $value->img }}"  width="185"></a>

                <div class="vertical-post-card__user-snippet">
                  <div class="user-snippet">
                    <a class="user-snippet__avatar" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}"><img class="avatar-blog" src="{{ url('img/avatar')}}/{{$value->avatar}}" height="47"></a>

                    <div class="user-snippet__details">
                      <div class="user-snippet__details__primary">
                        <strong><a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->by }}">{{ $value->name }}</a></strong>
                      </div>

                      <div class="user-snippet__details__secondary">
                        @if($value->level_user == '1' ) {{ 'Gia Sư' }} @else {{ 'Học Viên' }} @endif
                      </div>
                      <div class="vertical-post-card__statistic-list">
                      <ul class="statistic-list pd0">
                        <li>{{ $value->viewed}} views</li>
                        <li>{{ App\Blogposts::countCmt($value->id) }} comments</li>
                      </ul>
                </div>
                    </div>
                  </div>
                </div>

                

                <hr>

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
            </li>

            @endforeach
            
        </ul>

        <!-- <a id="load-more" class="button button--block" href="/stories/why-you-should-not-have-a-cheat-day">Load More</a> -->
      </div>
    </div>
  </section>
    </div>

@endsection
