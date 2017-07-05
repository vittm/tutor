@foreach($ratings as $value)
<div class="col-md-12 pd0 content-feedback" style="border-bottom: 1px solid #eeeeee; margint-bottom: 15px;">
  <div class="col-md-2">
   <img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle" height="70" width="70">
  </div>
  <div class="col-md-10">
     <div class="col-md-12 pd0">
       <p class="col-md-6 pd0"><strong>{{$value->name}}</strong></p>
       <p class="col-md-6">{{$value->created_at}}</p>
       @if($value->img_ratings != null)
       <div class="col-md-6">
         <div class="col-md-12"><img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." width="100%"></div>
       </div>
       <div class="col-md-6">
       @else
       <div class="col-md-12">
       @endif
         <p>{{$value->feebacks}}</p>
       </div>

       <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample "> Trả lời </a>
       <div class="collapse top15 col-md-12" id="collapseExample1">
       <div class="col-md-12 pd0 top30">
         <div class="col-md-2">
           <img src="" alt="..." class="img-circle" height="70" width="70">
         </div>
         <div class="col-md-10 form-ratings__write">
           <textarea rows="5" name="contentReview" class="form-control" placeholder="Nội dung đánh giá"></textarea>
           <input class="multiple-flie" type="file" name="imgRatings" >
         </div>
         </div>
       </div>
     </div>
 </div>
</div>
<br>
@endforeach
