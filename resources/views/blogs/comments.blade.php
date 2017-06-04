@foreach ($comments as $value)
<li>
      <div class="comment comment-list__comment">
          <div class="comment__wrapper">
              <div class="comment__vote">
                  <div>
                      <div class="comment-vote" data-reactid=".7">
                          <a href="" class="comment-vote__upvote"><img alt="Upvote" src="{{ url('/img/icon/up.svg') }}">

                          </a>
                          <div class="comment-vote__score" data-reactive="{{ $value->id }}">{{ $value->vote }}</div>
                          <a href="" class="comment-vote__downvote"><img alt="Downvote" src="{{ url('/img/icon/down.svg') }}" >
                          </a>
                          <input type="hidden" class="idVoteComment" data-reactive="{{ $value->id }}" value="{{ $value->id }}">
                          <input type="hidden" class="valueVoteComment" data-reactive="{{ $value->id }}" value="{{ $value->vote }}">
                      </div>
                  </div>
              </div>

              <a class="comment__user-avatar" href="{{ url('/trang-ca-nhan')}}-{{ $value->id_user }}"><img class="avatar-blog" alt="" src="{{ url('/img/avatar')}}/{{ $value->avatar }}">
              </a>

              <div class="comment__body">
                  <div class="comment__body__posted">
                      <div class="comment__body__posted__user">
                          <a class="dark" href="{{ url('/trang-ca-nhan')}}-{{ $value->id_user }}">{{ $value->name }}</a>
                      </div>

                      <div class="small muted">
                        {{ $value->created_at }}

                      </div>
                  </div>

                  <p>
                      {{ $value->content }}
                  </p>
                  <div class="comment__body__actions">
                      <a class="comment__information__reply" data-id="{{ $key }}" href="">Trả lời</a>
                      @if(Auth::check())

                        @if(Auth::user()->id == $value->id_user)
                        <a class="delete-comments" data-id="{{ $key }}" href="{{ url('/destroy-comments')}}-{{ $value->id }}-{{ $post['0']->title_sym }}">Xóa</a>
                        @endif
                      @endif

                          <form class="comments__reply" id="new_comment" action="{{ url('/comments-children')}}-{{ $value->id_post }}-{{ $post['0']->title_sym }}" accept-charset="UTF-8" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id_comment[]" value="{{ $value->id }}">
                          <div class="field field--with-no-bottom-margin">
                            <textarea placeholder="Write a reply..." class="field__control" name="comment[]" id="comment_body"></textarea>
                          </div>
                          <div style="text-align: right;">
                            <input type="submit" name="commit" value="Reply" class="button button--small">
                          </div>

                </form>

                  </div>

              </div>
          </div>
          
          <a class="comment__reply-location"></a>
      </div>
    </li>
@if ( App\Comments::find($value->id, $value->id_post)->count() > 0)
<ul class="comment-list">
	    @include('blogs.comments', ['comments' => App\Comments::resuilt($value->id,$value->id_post)])
</ul>
@endif
@endforeach