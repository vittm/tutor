@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tìm theo số điện thoại</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tìm theo Bill</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <form action="{{ url('/admin/result-user')}}" enctype="multipart/form-data"  method="POST">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container">
          <div class="col-md-6 col-md-offset-3">

              <!-- Search Form -->
              <form role="form">

              <!-- Search Field -->
                  <div class="row">
                      <h1 class="text-center">Search Phone</h1>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="text" name="search-phone" placeholder="Search" required/>
                              <span class="input-group-btn">
                                  <button class="btn btn-success" type="submit"><span class="pe-7s-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>

              </form>
              <!-- End of Search Form -->

          </div>
        </div>
      </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <form action="{{ url('/admin/result-user')}}" enctype="multipart/form-data"  method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container">
          <div class="col-md-6 col-md-offset-3">

              <!-- Search Form -->
              <form role="form">

              <!-- Search Field -->
                  <div class="row">
                      <h1 class="text-center">Search Bill</h1>
                      <div class="form-group">
                          <div class="input-group">
                              <input class="form-control" type="text" name="search-bill" placeholder="Search" required/>
                              <span class="input-group-btn">
                                  <button class="btn btn-success" type="submit"><span class="pe-7s-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>

              </form>
              <!-- End of Search Form -->

          </div>
        </div>
      </form>
    </div>
@Stop
