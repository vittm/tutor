@extends('layouts.blog-detail')
@section('content')
<div class="layout-container">
<style type="text/css">
  .layout-column--post-action-bar{display: none;}
</style>
  <div class="card">
    <header class="card__header card__header--centered">
      <h1 class="card__header__title">Ask Anything</h1>
    </header>

    <div class="card__content">
      <div class="layout-row">
        <div class="layout-column layout-column--7 layout-column--offset-1">
          

          <form class="new_ask_anything" id="new_ask_anything" enctype="multipart/form-data" action="{{ url('/blog-posting') }}" accept-charset="UTF-8" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" value="{{ $name }}" name="category">
          <input type="hidden" value="@if($name == 'cau-hoi') {{ 'cau-hoi' }} @endif" name="type_ask">
            <div class="field-instruction">
              *Required fields
            </div>
            
            <div class="field col-md-12">
              <input placeholder="Title*" class="field__control" type="text" name="title" id="ask_anything_title">
            </div>
            <div id="text-yui_3_17_2_1_1444669085154_85764" class="form-item field text required add-img">
                    <input type="file" name="images_slide" accept="image/*"  onchange="showMyImage(this)" id="file-2" class="inputfile inputfile-2 hidden" data-multiple-caption="{count} files selected">
        
                    <img id="thumbnil" class="edit_img_profile img-reg" src="" height="100" alt="image" />
                    <label class="label-img" for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span class="clear">Chọn ảnh cho bài viêt</span></label>
                </div>

            </div>
            <div class="field col-md-12">
              <textarea rows="20" cols="70" class="ckeditor" id="editor1" name="content"></textarea>
            </div>
            <div class="col-md-2">
              <input type="submit" name="commit" value="Post" class="button button--block">
              </div>
</form>        </div>

        <div class="layout-column layout-column--3 layout-column--desktop">
          <div class="field-instruction">
            <a style="visibility: hidden;" href="/post/ask_anything">Hide tooltips</a>
          </div>

          <div class="tooltip tooltip--no-arrow">
            <strong>Post an Ask Anything:</strong> wondering about something? Ask the Mogul community for advice.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop