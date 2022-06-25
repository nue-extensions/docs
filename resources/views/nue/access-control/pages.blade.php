@extends('nue-docs::app')
@section('title', 'Pages')

@section('content')
  <x-nue::docs::header>
    Pages Permission
  </x-nue::docs::header>

  <p class="lead">
    If you want to control the user's permissions in the page, you can refer to the following example:
  </p>

  <h4>Contoh 1</h4>
  <p>For example, there is now a scene, here is a article module, we use create articles as an example</p>
  <p>At first open http://localhost/settings/permissions, fill up slug field with text create-post, and Create post in name field, then assign this permission to some roles.</p>

  <p>In your controller action:</p>

  <pre class="rounded mb-4">
    <code class="language-html" data-lang="html">
      use Novay\Nue\Nue\Permission;

      class PostController extends Controller
      {
          public function create()
          {
              // check permission, only the roles with permission `create-post` can visit this action
              Permission::check('create-post');
          }
      }
    </code>
  </pre>

  <h4>Contoh 2</h4>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      // Roles dengan permission tertentu tidak diizin untuk menghapus data.
      if (!Admin::user()->can('delete-image')) {
          notify('Kamu tidak memiliki izin.', 'error');
          return redirect()->back();
      }

      // Hanya roles dengan permission `view-title-column` yang bisa menampilkan teks ini
      if (Admin::user()->can('view-title-column')) {
          return 'Title';
      }
    </code>
  </pre>

@endsection