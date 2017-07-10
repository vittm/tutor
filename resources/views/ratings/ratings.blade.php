@foreach($ratings as $key => $value)
<div class="col-md-12 pd0 content-feedback" style="border-bottom: 1px solid #eeeeee;padding-bottom:15px; margin-bottom: 15px;">
  <div class="col-md-2">
   <img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle" height="70" width="70">
  </div>
  <div class="col-md-10">
     <div class="col-md-12 pd0">
       <a href="{{ url('/trang-ca-nhan')}}-{{$value->id_post}}-{{App\User::convert_string($value->name)}}"><p class="col-md-4 pd0"><strong><?php $str = explode(' ', $value->name); ?>{{end($str)}} {{reset($str)}}</strong></p></a>
       <h6 class="col-md-8 pd0 text-right" style="margin-top: 5px;"><i>{{Carbon\Carbon::parse($value->created_at)->format('m/d/Y')}}</i></h6>
       <div class="col-md-12 pd0">
       @if($value->img_ratings == 'NULL')
       <div class="col-md-12 pd0 top15">
       @endif
       @if($value->img_ratings != 'NULL')

       <div class="col-md-6 pdl">
         <div class="col-md-12 pd0"><img src="{{ URL::to('img/ratings')}}/{{ $value->img_ratings}}" alt="..." width="100%" style="height: 150px;object-fit: cover;border-radius:6px;"></div>
       </div>
       <div class="col-md-6 pdl">
       @endif
         <p>{{$value->feebacks}}</p>
       </div>
     </div>

       <a class="col-md-12 pd0 top15 text-right"role="button" data-toggle="collapse" href="#collapseExample{{$key}}" aria-expanded="false" aria-controls="collapseExample "> Trả lời </a>
     </div>
    </div>
  </div>
  @if ( App\Ratings::find($value->id)->count() > 0)
      <div class="list-reply-rating" style="">
        @include('ratings.ratings', ['ratings' => App\Ratings::resuilt($value->id)])
      </div>
  @endif
<form class="col-md-12 pd0 form-ratings" method="POST" action="{{ url('/review-teacher/reply') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
    {{ csrf_field() }}
<input type="hidden" class="id_child" name="id_child" value="{{ $value->id }}">
<div class="collapse top15 col-md-12" id="collapseExample{{$key}}">
<div class="col-md-12 pd0 top30">
  <div class="col-md-2">
    @if(Auth::check())
    <img src="{{ URL::to('img/avatar')}}/{{ Auth::user()->avatar}}" alt="..." class="img-circle" height="70" width="70">
    @else
    <img src="{{ URL::to('img/logo.png')}}" alt="..." class="img-circle" height="70" width="70">
    @endif
  </div>
  <div class="col-md-10 form-ratings__write">
    <textarea rows="5" name="contentReview" class="form-control" placeholder="Nội dung đánh giá"></textarea>
  </div>
  </div>
  <div class="col-md-12">
    <div class="text-right">
    <button type="submit" class="btn btn-origan2 up-review ">Đăng</button>
    </div>
  </div>
</div>
</form>
<br>
@endforeach
