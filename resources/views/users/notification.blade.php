@extends('layouts.web')

@section('content')
    <div class="col-md-offset-1 col-md-10">
        <div class="card">
            <div class="header text-center">
                <h4 class="title">Chi tiết các thông báo của bạn.</h4>
                <br />
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                        <tr>
                            <th >STT</th>
                            <th>Ảnh</th>
                            <th >Tên thông báo</th>
                            <th class="">Ngày thông báo</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($search as $key => $value)
                        <tr class="list-notification @if($value->nRead == 0) grey @endif" >
                            <td><span>{{$key+1}}</span></td>
                            <td>
                                <div class="img-container">
                                    <img src="{{ URL::to('img/logo.png')}}" alt="Lorem ipsum" width="50" height="27" style="object-fit: contant;"/>
                                </div>
                            </td>
                            <td class="td-name">
                                <span>{{  $value->name_notification}}</spa>
                            </td>
                            <td class="td-number"><span>{{date('d-m-y',strtotime($value->created_at))}}</span></td>
                            <td class="td-number">
                              <a class="btn" href="{{ url('/profile/notification/details')}}-{{$value->id}}">Xem chi tiết</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--  end card  -->
        <div class="col-md-12">
          {{ $search->links() }}
        </div>
    </div> <!-- end col-md-12 -->
@Stop
