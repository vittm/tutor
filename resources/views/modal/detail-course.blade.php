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
          <div class="col-md-6"><div class="btn btn-origan2" style="border-color: #000000;color: #000;position:relative;top: 5px;">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div></div>
          <div class="col-md-12">
            <h3 class="couser-header__title">{{$value ->name_couser }}</h3>
            <h5 class="couser-header__name">{{ $value->name }}</h5>
            <i>{{ $value->jobs }} </i>
         </div>
        </div>
        <div class="col-md-12 wel">
            <h4 class="col-md-12 top30" style="color:#fcaf00;text-transform: uppercase;"><strong> NỘI DUNG KHÓA HỌC </strong> </h4>
            <div class="col-md-6">
              <img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;">
            </div>
            <div class="col-md-6">
              <h5><strong>GIỚI THIỆU TỔNG QUÁT</strong> </h5>
              <p>{{$value->information}}</p>
            </div>
            <div class="col-md-12 top15">
                <p><strong><i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Bạn sẽ học được gì? </strong> </p>
                {{ $value->study }}
            </div>

            <div class="col-md-6 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Ai nên tham gia ? </strong></p>
                {{$value->who}}
            </div>
            <div class="col-md-6 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Phương pháp giảng dạy ? </strong></p>
                {{$value->type}}
            </div>
            <div class="col-md-12 top15">
                <p><strong> <i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Chương trình học ? </strong></p>
                {{$value->program}}
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
                  <p><strong><i class="fa fa-circle" aria-hidden="true" style="font-size:8px;position:relative;top:-2px;"></i> Lớp học kéo dài</strong></p>
                </div>

                <div class="col-md-6">
                  {{ $value->closetime }}
                </div>
            </div>
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
