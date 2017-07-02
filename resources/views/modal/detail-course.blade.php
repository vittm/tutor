<div class="modal fade" id="couser{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-12 pd0 wel">
      <div class="col-md-12 modal-body wel" style="padding:0;">
        <div class="col-md-12 title-modal" style="background:#fcaf00;">
          <div class="col-md-6"><p style="position:relative;top: 5px;">*  @if($value -> typeclass == '1')
                      <strong>Học 1 + 1</strong>
                    @endif
                    @if($value -> typeCouser == '2')
                      <strong>Lớp học sắp khai </strong>
                    @endif</p>
          </div>
          <div class="col-md-6"><div class="btn btn-origan2" style="border-color: #000000;color: #000;position:relative;top: 5px;">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div></div>
          <div class="col-md-12 top15">
            <h3>{{$value ->name_couser }}</h3>
            <h5>{{ $value->name }}</h5>
            <p>{{ $value->jobs }} <p>
         </div>
        </div>
        <div class="col-md-12 wel">
            <h4 style="color:#fcaf00;text-transform: uppercase;"> NỘI DUNG KHÓA HỌC </h4>
            <div class="col-md-6">
              <img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;">
            </div>
            <div class="col-md-6">
              <h4>GIỚI THIỆU TỔNG QUÁT </h4>
              <p>{{$value->information}}</p>
            </div>
            <div class="col-md-12 top15">
                <p> Bạn sẽ học được gì? </p>
                {{ $value->study }}
            </div>

            <div class="col-md-6">
                <p>Ai nên tham gia ?</p>
                {{$value->who}}
            </div>
            <div class="col-md-6">
                <p>Phương pháp giảng dạy ?</p>
                {{$value->type}}
            </div>
            <div class="col-md-6">
                <p>Chương trình học ?</p>
                {{$value->program}}
            </div>

            <div class="col-md-12 pd0 top15">
                <div class="col-md-6">
                  <p>HỌC PHÍ</p>
                </div>

                <div class="col-md-6">
                  {{$value->price}}
                </div>
            </div>

            @if($value->typeCouser == '1')
            <div class="col-md-12 pd0 top10">
              <div class="col-md-3 top15"> Thời gian học</div>
              <div class="col-md-8">
                <div class="col-md-12 pd0 top15">
                  <div class="col-md-3">
                    Thứ
                  </div>
                  <div class="col-md-3">
                    Sáng
                  </div>
                  <div class="col-md-3">
                    Trưa
                  </div>
                  <div class="col-md-3">
                    Chiều
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

                      @else
                      @for( $i = 0; $i < 21 ; $i++ )
                        <li class="col-md-4">
                          <input type="hidden" name="morning[]" value="0">
                          <input type="checkbox" name="morning[]" value="1" id="morning{{$i}}">
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
            <div class="col-md-12 pd0">
                <div class="col-md-6">
                  <p>Lớp học kéo dài</p>
                </div>

                <div class="col-md-6">
                  {{ $value->closetime }}
                </div>
            </div>
            <div class="col-md-12 pd0">
                <div class="col-md-6">
                  <p>Ngày khai giảng:</p>
                </div>

                <div class="col-md-6">
                  {{$value->opentime}}
                </div>
            </div>
            <div class="col-md-12 pd0">
                <div class="col-md-6">
                  <p>Thời gian học</p>
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
