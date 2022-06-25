@extends('nue-docs::app')
@section('title', 'Install')

@section('content')
  <x-nue::docs::header>
    Install
    <x-slot:description>
      Perintah untuk melakukan instalasi Nue Package.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:install
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Gunakan perintah ini melakukan instalasi Nue Package. 
  	Pada prosesnya, perintah ini akan membuat beberapa direktori dan file kedalam aplikasi kamu.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
			OK Ensure views directories exists.
			OK Export views.
			OK Export authentication controllers.
			OK Publish config & migrations files.
			OK Replace models.

			Migration table created successfully.
			Migrating: 2014_10_12_000000_create_users_table
			Migrated:  2014_10_12_000000_create_users_table (358.03ms)
			Migrating: 2014_10_12_100000_create_password_resets_table
			Migrated:  2014_10_12_100000_create_password_resets_table (109.27ms)
			Migrating: 2019_08_19_000000_create_failed_jobs_table
			Migrated:  2019_08_19_000000_create_failed_jobs_table (168.31ms)
			Migrating: 2019_12_14_000001_create_personal_access_tokens_table
			Migrated:  2019_12_14_000001_create_personal_access_tokens_table (119.07ms)
			Migrating: 2021_01_01_000000_create_nue_tables
			Migrated:  2021_01_01_000000_create_nue_tables (379.17ms)
			Database seeding completed successfully.

			🤙 Nue package generated successfully in 4.72 seconds.
	    </code>
  </pre>

  <br/><br/>
  <p class="lead">
  	Kamu juga bisa menambahkan attribute <code>--force</code> pada perintah. Untuk menghidari pertanyaan konfirmasi dari Nue ini.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:install --force
    </code>
  </pre>

@endsection