@extends('nue-docs::app')
@section('title', 'Middleware')

@section('content')
  <x-nue::docs::header>
    Middleware
    <x-slot:description>
      Kamu bisa menggunakan middleware ini untuk menangani permission.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      // Allow roles `administrator` and `editor` access the routes under group.
      Route::group([
          'middleware' => 'nue.permission:allow,administrator,editor',
      ], function ($router) {

          $router->resource('users', UserController::class);
          ...
      });
    </code>
  </pre>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      // Deny roles `developer` and `operator` access the routes under group.
      Route::group([
          'middleware' => 'nue.permission:deny,developer,operator',
      ], function ($router) {

          $router->resource('users', UserController::class);
          ...
      });
    </code>
  </pre>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      // User has permission `edit-post`、`create-post` and `delete-post` can access routes under group.
      Route::group([
          'middleware' => 'nue.permission:check,edit-post,create-post,delete-post',
      ], function ($router) {

          $router->resource('posts', PostController::class);
          ...
      });
    </code>
  </pre>

  <p class="lead">
    Penggunaan middleware disini sama seperti penggunaan middleware lainnya.
  </p>

@endsection