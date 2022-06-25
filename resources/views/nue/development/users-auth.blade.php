@extends('nue-docs::app')
@section('title', 'Users')

@section('content')
	<x-nue::docs::header>
    Users (Auth)
    <x-slot:description>
      List Helpers pengganti Auth bawaan Laravel yang disediakan Nue.
    </x-slot:description>
  </x-nue::docs::header>
  
  <p class="lead">
    Get data objek dari user yang login. <br/>
    <small>Sama seperti <code>Auth::user()</code></small>
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user();
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    Get ID dari user yang login. <br/>
    <small>Sama seperti <code>Auth::user()->id</code></small>
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->id;
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    Get semua <b>roles</b> milik user.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->roles;
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    Get semua <b>permission</b> milik user.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->permissions;
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    User is role.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->isRole('developer');
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    User has permission.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->can('create-post');
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    User don't has permission.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->cannot('delete-post');
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    Is user super administrator.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->isAdministrator();
    </code>
  </pre>

  <hr class="my-4">

  <p class="lead">
    Is user in one of roles.
  </p>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      Nue::user()->inRoles(['editor', 'developer']);
    </code>
  </pre>

  <hr class="my-4">

@endsection