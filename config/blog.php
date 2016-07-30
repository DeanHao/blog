<?php
	return [
		'name' => "Dean Blog",
		'title' => "Dean Blog",
		'subtitle' => 'http://w.deanq.wang',
		'description' => '交流分享平台',
		'author' => 'DeanWang',
		'contact_email' => env('MAIL_FROM'),
		'page_image' => 'home-bg.jpg',
		'posts_per_page' => 10,
		'rss_size' => 25,
		'uploads' => [
			'storage' => 'local',
			'webpath' => '/uploads',
		],
	];
?>