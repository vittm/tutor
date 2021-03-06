@extends('layouts.app')

@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">Những Khóa học của @if(isset($cousers[0])) {{$cousers[0]->name}} @endif</h4>
                                <p class="category">Các khoá học</p>
                                <br />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Hình</th>
                                            <th >Tên Khóa Học</th>
                                            <th class="">Ngày Hạn</th>
                                            <th class="">Giá </th>
                                            <th class="">Tiền Thanh Toán</th>
                                            <th> Mã Bill </th>
                                            <th> Tình Trạng </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($cousers as $value)
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="{{ url('img/couser')}}/{{$value->picture_couser}}" alt="Lorem ipsum" width="100" height="100" style="object-fit: cover;"/>
                                                </div>
                                            </td>
                                            <td class="td-name">
                                                {{  $value-> name_couser}}
                                            </td>
                                            <td class="td-number">{{App\Cousers::calculateDate($value->created_at)}}</td>
                                            <td class="td-name">
                                                {{ number_format($value->price)}} đ
                                            </td>
                                            <td class="td-number">
                                                {{number_format($value->pay)}} đ
                                            </td>
                                            <th>{{$value->code}}</div>
                                            <!-- <td class="td-actions">
                                                <button type="button" rel="tooltip" data-placement="left" title="Thanh Toán" class="btn btn-info btn-simple btn-icon">
                                                    <i class="pe-7s-cash" style="font-size: 15px;"></i>
                                                </button>
                                            </td> -->
                                            <th>@if($value->action == 0) Chưa thanh toán @else Đã Thanh Toán @endif</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
@Stop
