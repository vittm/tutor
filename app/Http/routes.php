<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/trang-ca-nhan-{id}', 'UserController@myprofile');

Route::get('/tim-kiem-gia-su', 'WidgetController@index');

Route::get('/tim-kiem-lop-day', 'WidgetController@findClass');

Route::get('/find-teach', 'WidgetController@search_teach');

Route::get('/find-class', 'WidgetController@search_class');

Route::post('/sent-contact-tech', 'UserController@message');

Route::get('/chi-tiet-bai-dang-{id}', 'PostsController@detailPosts');
Route::post('/posting', 'PostsController@posting');
Route::post('/sent-mess', 'PostsController@sentMess');

Route::get('/dang-tin', function(){
	return view('posts.createPosts');
});


Route::get('/thanh-toan-online', function(){
    return view('users.pay-online');
});

Route::get('follow-{id}-{user_id}', 'UserController@follow');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin/index', 'HomeController@index');
});

Route::group(['middleware' => ['auth']], function () {
		Route::get('/admin/search', function(){
			return view('admin.search');
		});
		// Admin
		Route::post('/admin/result-user', 'WidgetController@result_user');
		Route::get('/admin/add-slide', function(){
			return view('admin.add-slide');
		});
		Route::get('/admin/listing-slide', 'WidgetController@listing_slide');
		Route::post('/admin/adding-slide', 'WidgetController@adding_slider');
		Route::get('/admin/edit-slide-{id}', 'WidgetController@edit_slide');
		Route::post('/admin/editing-slide-{id}', 'WidgetController@editing_slide');
		Route::get('/admin/destroy-slide-{id}', 'WidgetController@destroy_slide');
		Route::get('/admin/text', function(){
		    return view('admin.text');
		});
		Route::get('/admin/delete-text-{id}', 'WidgetController@delete_text');
		Route::post('/admin/update-text', 'WidgetController@update_text');

		Route::get('/admin/add-feedback', function(){
		    return view('admin.add-feedback');
		});
		Route::get('/admin/feedback', 'WidgetController@listing_feedback');
		Route::post('/admin/adding-feedback', 'WidgetController@adding_feedback');
		Route::get('/admin/edit-feedback-{id}', 'WidgetController@edit_feedback');
		Route::post('/admin/editing-feedback-{id}', 'WidgetController@editing_feedback');
		Route::get('/admin/destroy-feedback-{id}', 'WidgetController@destroy_feedback');
		Route::get('/admin/thanh-vien', 'WidgetController@admin_user');
		Route::post('/admin/update-user', 'WidgetController@update_user');
		Route::get('/admin/delete-user-{id}', 'WidgetController@delete_user');
		Route::post('/pay-online', 'WidgetController@bank');
		Route::post('/voucher-{id}', 'WidgetController@voucher');
		Route::post('/review-teacher-{id}', 'WidgetController@review');


		Route::get('/admin/add-voucher', 'WidgetController@add_voucher');
		Route::post('/admin/adding-voucher', 'WidgetController@adding_voucher');
		Route::get('/admin/manage-voucher', 'WidgetController@mangevoucher');
		Route::get('/admin/delete-voucher-{id}', 'WidgetController@delete_voucher');
		Route::get('/admin/show', 'WidgetController@show_index');
		Route::post('/admin/update-show-index-{id}-{value}', 'WidgetController@update_show_index');

    Route::get('chinh-sua-ca-nhan-{id}', 'UserController@edit');
    Route::post('editing-{id}', 'UserController@editing');
		Route::post('editing/style-{id}', 'UserController@editing_style');
		Route::post('editing/picture-{id}', 'UserController@editing_picture');
		Route::post('editing/video-{id}', 'UserController@editing_video');
		Route::post('editing/level-{id}', 'UserController@editing_level');
		Route::post('editing/password-{id}', 'UserController@editing_password');


		Route::get('couser/add-{id}', 'CouserController@look');
		Route::post('couser/adding-{id}', 'CouserController@adding_couser');
		Route::post('couser/opening-{id}', 'CouserController@adding_opening');
		Route::post('couser/editing-{couserid}', 'CouserController@editing_couser');
		Route::get('couser/edit-{couserid}', 'CouserController@edit_couser');
		Route::get('couser/register', 'CouserController@register_couser');
		Route::get('quan-ly-hoc-vien', 'CouserController@mange_student');

    Route::get('danh-sach-tin-nhan-{id}', 'UserController@listing_message');
    Route::get('chi-tiet-tin-nhan-{watch}', 'UserController@detail_message');
    Route::get('xoa-tin-nhan-{id}', 'UserController@delete_message');
    Route::get('xoa-tat-ca-tin-nhan-{id}', 'UserController@delete_all_message');
    Route::get('xac-nhan-loi-moi-{id}-{idmess}', 'UserController@agreeinvite');
    Route::post('/config-{id}', 'UserController@config_user');
    Route::get('/config-profile-{id}', 'UserController@config_profile');
    Route::get('/thanh-toan', 'UserController@tab_pay');
});





//Blog

Route::get('/blog','BlogController@index');
Route::get('/hoi-dap','BlogController@ask');
Route::get('/the-loai-{name}','BlogController@listings');
Route::get('/chi-tiet-{name}','BlogController@detail');
Route::get('/dang-bai-{name}','BlogController@post');
Route::post('/blog-posting','BlogController@posting');
Route::post('/blog-comments','BlogController@commenting');
Route::get('/destroy-comments-{id}-{name}','BlogController@destroy_comments');
Route::post('/comments-children-{id}-{name}','BlogController@comment_children');
Route::post('/upvote-{id}','BlogController@upvote');
Route::post('/downvote-{id}','BlogController@downvote');

Route::post('/folower-{iduser}','BlogController@folower');
Route::post('/voteup-comment-{id}','BlogController@voteup_comments');
Route::post('/votedown-comment-{id}','BlogController@votedown_comments');
