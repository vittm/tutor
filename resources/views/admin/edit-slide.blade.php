@extends('layouts.app')

@section('content')
<main class="Main Main--page">
<section class="Main-content" data-content-field="main-content">
<div class="sqs-block form-block sqs-block-form" data-block-type="9" id="block-yui_3_17_2_16_1444669085154_5862">
    <div class="sqs-block-content">

        <div class="form-wrapper">
            <div class="form-inner-wrapper">

                <form autocomplete="on" action="{{ url('/admin/editing-slide')}}-{{$slide[0]->id}}" enctype="multipart/form-data"  method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="postby" value="admin">

                    <div class="field-list clear">

                        <fieldset id="name-yui_3_17_2_1_1444669085154_84997" class="form-item fields name required">

                            <div class="col-md-6 pd0">
                                <label class="caption">
                                    Tiêu đề lớn
                                </label>
                                <input id="post_title" type="text" class="form-control" name="title_big" placeholder="Tên bài viết" value="{{ $slide[0]->title_big }}">
                            </div>
                            <div class="col-md-6">
                                <label class="caption">
                                    Tiêu đề nhỏ
                                </label>
                                <input id="post_title" type="text" class="form-control" name="title_small" placeholder="Tên bài viết" value="{{ $slide[0]->title_small }}">
                            </div>
                            <div class="col-md-6 pd0">
                                <label class="caption">
                                    Tên của nút bấm
                                </label>
                                <input id="post_title" type="text" class="form-control" name="name_button" placeholder="Tên bài viết" value="{{ $slide[0]->name_button }}">
                            </div>
                             <div class="col-md-6 ">
                                <label class="caption">
                                    Url cho slider
                                </label>
                               <input id="post_symbol" type="text" class="form-control" name="url_slide" value="{{ $slide[0]->url_slide }}">
                            </div>
                        </div>
                        </fieldset>
                        <br>
                        <div id="text-yui_3_17_2_1_1444669085154_85764" class="form-item field text required add-img">
                            <label class="title" for="text-yui_3_17_2_1_1444669085154_85764-field">Hình Ảnh <span class="required">*</span>
                            </label>
                            <br>
                            <br>
                            <input type="file" name="images_slide" accept="image/*"  onchange="showMyImage(this)" id="file-2" class="inputfile inputfile-2 hidden">
                
                            <img id="thumbnil" class="edit_img_profile img-reg" src="{{ URL::to('img/slider')}}/{{ $slide[0]->images_slide }}" height="100" alt="image" />
                            <label class="label-img" for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span >Chọn ảnh cho slide</span></label>
                            <input type="hidden" class="form-control" name="images_slide_hidden" value="{{ $slide[0]->images_slide }}">
                        </div>

                    </div>
                    <br>


                    <div class="form-button-wrapper form-button-wrapper--align-left">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Cập nhập</button>
                    </div>


                    <div class="hidden form-submission-text">Thank you!</div>

                    <div class="hidden form-submission-html" data-submission-html=""></div>
                </form>

            </div>
        </div>
        </div>
        </div>
    </section>
</main>
@stop