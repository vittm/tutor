@extends('layouts.web')

@section('content')
<div class="container">
      <div class="page-header">
        <h1>{{$search[0]->name_notification}}</h1>
      </div>
      <p> Bởi: Admin</p>
      <p>Ngày: {{ $search[0]->created_at }}</p>
      <br>
      <p class="lead">{!! $search[0]->content_notification !!}</p>
</div>

@Stop
