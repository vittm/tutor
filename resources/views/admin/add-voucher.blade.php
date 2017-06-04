@extends('layouts.app')

@section('content')
<main class="Main Main--page">
<section class="Main-content" data-content-field="main-content">
<div class="sqs-block form-block sqs-block-form" data-block-type="9" id="block-yui_3_17_2_16_1444669085154_5862">
    <div class="sqs-block-content">

        <div class="form-wrapper">
            <div class="form-inner-wrapper">

                <form autocomplete="on" action="{{ url('/admin/adding-voucher') }}" enctype="multipart/form-data"  method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="postby" value="admin">

                    <div class="field-list clear">

                        <fieldset id="name-yui_3_17_2_1_1444669085154_84997" class="form-item fields name required">

                            <div class="col-md-6">
                                <label class="caption">
                                    Voucher
                                </label>
                                <input id="post_title" type="text" class="form-control" name="name" placeholder="Tên voucher">
                            </div>
                            <div class="col-md-6">
                                <label class="caption">
                                    Trị giá
                                </label>
                                <input id="post_title" type="text" class="form-control" name="value-price" placeholder='500.000 VNĐ' >
                                <p class="top15">Chỉ cần điền số</p>
                            </div>
                        </div>
                        </fieldset>
                        <br>
                    </div>
                    <br>
                    <div class="form-button-wrapper form-button-wrapper--align-left">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Thêm Voucher</button>
                    </div>
                </form>

            </div>
        </div>
        </div>
        </div>
    </section>
</main>
@stop