@extends('nue-docs::app')
@section('title', 'Features')

@section('content')
	<x-nue::docs::header>
    Features
    <x-slot:description>
      Penjelasan terkait Features yang ada dalam file konfigurasi (nue.php)
    </x-slot:description>
  </x-nue::docs::header>

  <p class="lead">
    Fitur-fitur yang dimaksud bisa kamu temukan pada config file <code>config/nue.php</code>. Adapun fitur-fitur yang saat ini disediakan adalah antara lain:
    <ul class="lead">
      <li>Registration - <span class="text-muted">Untuk mengaktifkan fitur registrasi member.</span></li>
      <li>Reset Passwords - <span class="text-muted">Mengizinkan member untuk melakukan reset password.</span></li>
      <li>Email Verification - <span class="text-muted">Menggunakan fasilitas verifikasi email untuk pendaftaran member.</span></li>
      <li>Update Profile - <span class="text-muted">Mengizinkan member untuk melakukan perubahan profil.</span></li>
      <li>Update Email - <span class="text-muted">Mengizinkan member untuk melakukan perubahan email atau username.</span></li>
      <li>Update Password - <span class="text-muted">Mengizinkan member untuk mengganti password.</span></li>
      <li>Profile Photo - <span class="text-muted">Mengizinkan member untuk memperbarui photo profil.</span></li>
      <li>Terminate Account - <span class="text-muted">Mengaktifkan fitur untuk hapus akun di setiap member.</span></li>
    </ul>
  </p>

  <br/>

  <pre class="rounded">
    <code class="language-php" data-lang="php">
      /*
      |--------------------------------------------------------------------------
      | Features
      |--------------------------------------------------------------------------
      |
      | Some of the Nue features are optional. You may disable the features
      | by removing them from this array. You're free to only remove some of
      | these features or you can even remove all of these if you need to.
      |
      */

      'features' => [
          Features::registration(),
          Features::resetPasswords(),
          Features::emailVerification(),
          Features::updateProfile(),
          Features::updateEmail(),
          Features::updatePassword(),
          Features::profilePhoto(),
          // Features::terminateAccount(), # Contoh nonaktifkan fitur
      ],
    </code>
  </pre>

  <br/>
  <p class="lead">
    Untuk menonaktifkan fitur yang disediakan, kamu cukup menjadikan komentar fitur yang dimaksud.
  </p>

@endsection