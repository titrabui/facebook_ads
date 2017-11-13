<?php

	class Constants
	{
		public static $site_title = '';

		public static $page_title = array(
			'normal' => '',
			'login' => 'Đăng nhập',
			'mainmenu' => '',
			'photoedit' => '',
			'photolist' => '',
			'photomap' => '',
			'changemail' => '',
			'changepass' => '',
		);

		public static $error_message = array(
			'login_error'             => 'Đăng nhập thất bại',
			'already_logged_in'       => 'Tài khoản đã đăng nhập rồi',
			'expired_csrf_token'      => 'There is no valid session.',
			'bad_old_password'        => 'Mật khẩu cũ không đúng',
			'not_change_mail'         => 'Địa chỉ email không thể thay đổi',
			'not_change_user_profile' => 'Thông tin người dùng không thể thêm hoặc thay đổi',
			'not_change_user_id_pass' => 'Mật khẩu không thể thêm hoặc thay đổi',
			'already_exist_user'      => 'Tài khoản người dùng đã được đăng ký rồi',
			'bad_route'               => 'Đường dẫn không hợp lệ',
			'not_exist_date'          => ':label Ngày không hợp lệ',
		);

		public static $user_group = array(
			'Administrators' => '100',
			'Moderators' => '50',
			'Users' => '1',
		);

		public static $facebook_ads_configurations = array(
			'access_token' => 'EAAVh4Y1tjukBAOqZBhaB5lUaUIL0X8rQ8jWmCkLxlWCYsTiIlZBUlMiPH0eI7AOb7OK1DZA7pFIOhe6kXvan2ZAtEZCPSArxG1tpDk4CrZAEehXq1vDKxOavB6uxHFcXwzqUDVpuPvcXTYojIG7s8O60xqFFhcrT4eAwkBesyv1AZDZD',
			'app_id'       => '1514996251856617',
			'app_secret'   => '2528ebbf95163b8cd418d96295623164'
		);
	}

