@extends('layouts.web')

@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-10">
        <div class="card">
            <div class="header text-center">
                <h4 class="title">Chi tiết các thông báo của bạn.</h4>
                <br />
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th >Tên thông báo</th>
                            <th class="">Ngày thông báo</th>
                            <th> Hành Động </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($search as $key => $value)
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="{{ URL::to('img/logo.png')}}" alt="Lorem ipsum" width="70" height="40" style="object-fit: contant;"/>
                                </div>
                            </td>
                            <td class="td-name">
                                tên
                            </td
                            <td class="td-number">ádasd</td>
                            <td class="td-name">
                                ádasd
                            </td>
                            <td class="td-number">
                              <a class="btn btn-primary" href="{{ url('/profile/notification/details')}}-{{$value->id}}">Xem chi tiết</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
</div> <!-- end row -->
@Stop
