<?php

Route::group([
	'namespace' => 'Nue\Docs\Http\Controllers', 
	'as' => 'nue.', 
	'prefix' => 'docs'
], function() {

	# Nue Section
	Route::get('/', function() {
		return redirect()->to('docs/nue/getting-started/introduction');
	})->name('docs.index');

	Route::get('nue/{category?}/{slug?}', function($category, $slug) {
		return view("nue-docs::nue.{$category}.{$slug}");
	})->name('nue.show');


	# UI (HTML) Section
	Route::get('html', function() {
		return redirect()->to('docs/html/getting-started/introduction');
	})->name('components.index');

	Route::get('html/{category?}/{slug?}', function($category, $slug) {
		return view("nue-docs::html.{$category}.{$slug}");
	})->name("components.show");

});