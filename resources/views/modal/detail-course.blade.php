<div class="modal fade" id="couser{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-12 pd0 wel">
      <div class="col-md-12 modal-body wel" style="padding:0;">
        <div class="col-md-12 title-modal couser-header" style="background:#fcaf00;">
          <div class="col-md-6"><p style="position:relative;top: 5px;">*  @if($value -> typeclass == '1')
                      <strong>Học 1 + 1</strong>
                    @endif
                    @if($value -> typeCouser == '2')
                      <strong>Lớp học sắp khai </strong>
                    @endif</p>
          </div>
          <div class="col-md-6">
            <div class="btn btn-origan2" style="border-color: #000000;color: #000;position:relative;top: 5px;">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div></div>
            <div class="col-md-12 pd0">
              <div class="col-md-8 pd0">
              <h3 class="couser-header__title">{{$value ->name_couser }}</h3>
              </div>
              <div class="col-md-4 pd0 pdr share">
                  <img class="action-menu__icon " src="{{ URL::to('img/icon/VectorSmartObject_3.png')}}" alt=""><span>Chia sẽ khoá học với bạn bè</span>
                  <div class="col-md-12 share_hidden animated fadeIn" style="border: 1px soild #eeeeee">
										<div class="col-md-12 fb-share-button"
										data-href="{{url('/trang-ca-nhan')}}-{{$id_user[0]->id}}-{{App\User::convert_string($id_user[0]->name)}}?tab=info&khoa-hoc=couser{{$key}}&user={{$id_user[0]->name}}&title={{$value->name_couser}}&images={{ URL::to('/img/couser')}}/{{$value->picture_couser}}"
										data-size="large"
										data-layout="button"
										data-mobile-iframe="true">
												<a class="fb-xfbml-parse-ignore"
												target="_blank" ></a>
										</div>
									</div>
              </div>
            <div class="col-md-12 pd0">
              <h5 class="couser-header__name" style="margin-bottom:0;"><a href="{{ url('/trang-ca-nhan')}}-{{$value->id}}-{{App\User::convert_string($value->name)}}?tab=info">{{ $value->name }}</a></h5>
              <span style="font-size:13px;">{{App\User::jobs($value->jobs)}}</span>
            </div>
         </div>
        </div>
        <div class="col-md-12 wel">
            <h4 class="col-md-12 top30" style="color:#fcaf00;text-transform: uppercase;"><strong> NỘI DUNG KHÓA HỌC </strong> </h4>
            <div class="@if($value -> typeCouser != '2') col-md-offset-3 @endif col-md-6 top15">
              <img class="couser-header__images" src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;">
            </div>
            @if($value -> typeCouser == '2')
            <div class="col-md-6 top15">
              <h5><strong>Số lượng học viên</strong> </h5>
              <p>{{App\User::quanlity($value->information)}} </p>
            </div>
            @endif
            <div class="col-md-12 top30">
                <p><strong><i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Bạn sẽ học được gì? </strong> </p>
                {!! $value->study !!}
            </div>

            <div class="col-md-6 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Ai nên tham gia ? </strong></p>
                {!!$value->who!!}
            </div>
            <div class="col-md-6 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Phương pháp giảng dạy ? </strong></p>
                {!!$value->type !!}
            </div>
            <div class="col-md-12 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Chương trình học ? </strong></p>
                <span class="couser-header__program">{!!$value->program!!}</span>
            </div>
            @if($value->typeCouser == '1')
            <div class="col-md-12 pd0 top10">
              <h5><strong> THỜI GIAN CÓ THỂ DẠY </strong></h5>
              <div class="col-md-12 pd0">
                <div class="col-md-12 pd0 top15">
                  <div class="col-md-3">
                    <strong>Thứ</strong>
                  </div>
                  <div class="col-md-3">
                    <strong>Sáng</strong>
                  </div>
                  <div class="col-md-3 pd0">
                    <strong>Trưa</strong>
                  </div>
                  <div class="col-md-3 pd0">
                    <strong>Chiều</strong>
                  </div>
                </div>
                <ul class="col-md-12 top30 pd0 gender__edit couser-time" >
                   <div class="col-md-3">
                      <p>Thứ Hai</p>
                      <p>Thứ Ba</p>
                      <p>Thứ Tư</p>
                      <p>Thứ Năm</p>
                      <p>Thứ Sáu</p>
                      <p>Thứ Bảy</p>
                      <p>Chủ Nhật</p>
                   </div>
                  <div class="col-md-8 pd0">

                    @if(json_decode($value->timetype1) != null)
                      @foreach( json_decode($value->timetype1) as $key => $value1 )
                         <li class="col-md-4">
                           <input type="hidden" name="morning[{{$key}}]" value="0">
                           <input class="day-teach" type="checkbox" name="morning[{{$key}}]" disabled="disabled"value="1" id="morning{{$key}}" @if($value1 == '1') checked @endif >
                           <label for="morning{{$key}}"></label>
                           <div class="check"></div>
                         </li>
                      @endforeach
                      @else
                      @for( $i = 0; $i < 21 ; $i++ )
                        <li class="col-md-4">
                          <input type="hidden" name="morning[{{$i}}]" value="0">
                          <input type="checkbox" name="morning[{{$i}}]" value="1" id="morning{{$i}}">
                          <label for="morning{{$i}}"></label>
                          <div class="check"></div>
                        </li>
                      @endfor
                    @endif
                  </div>
                </ul>
              </div>
            </div>
            @endif
            @if($value->typeCouser == '2')
            <div class="col-md-12 pd0 top15">
                <div class="col-md-6">
                  <p><strong><i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Ngày khai giảng:</strong></p>
                </div>

                <div class="col-md-6">
                  {{$value->opentime}}
                </div>
            </div>
            <div class="col-md-12 pd0 top15">
                <div class="col-md-6">
                  <p><strong><i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Thời gian học</strong></p>
                </div>

                <div class="col-md-6">
                  {{$value->timeplan}}
                </div>
            </div>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
