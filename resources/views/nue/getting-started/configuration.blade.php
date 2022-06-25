@extends('nue-docs::app')
@section('title', 'Configuration')

@section('content')
  <x-nue::docs::header>
    Configuration
    <x-slot:description>
      Penjelasan terkait file <b>config/nue.php</b> sebagai config file utama.
    </x-slot:description>
  </x-nue::docs::header>

  <p class="lead">
  	Untuk melakukan perubahan settingan bawaan, kamu bisa buka file yang package ini simpan di <b>config/nue.php</b>. Disini kamu bisa lakukan beberapa custom seperti:
  </p>

  <ul class="lead">
  	<li>Ganti nama aplikasi yang muncul di title di semua halaman.</li>
  	<li>Kustom branding, seperti favicon dan logo-logo (Light dan Dark).</li>
  	<li>Aktivasi dan matikan fitur bawaan, kayak registrasi, hapus akun, ganti email dan lainnya.</li>
  	<li>Dan beragam pengaturan lainnya. Penjelasan lengkap bisa dilihat di dalam file.</li>
  </ul>

  <br/>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;?php 

        use App\Providers\RouteServiceProvider;
        use Novay\Nue\Features;

        return [

            /*
            |--------------------------------------------------------------------------
            | Nama aplikasi
            |--------------------------------------------------------------------------
            |
            | Nilai dari properti ini akan menjadi nama utama aplikasi kamu, karena 
            | nama disini akan menjadi title di semua halaman.
            |
            */
            'name' => 'Nue UI',

            /*
            |--------------------------------------------------------------------------
            | Akses via `https`
            |--------------------------------------------------------------------------
            |
            | If your page is going to be accessed via https, set it to `true`.
            |
            */
            'https' => env('NUE_HTTPS', false),

            /*
            |--------------------------------------------------------------------------
            | Nue brand files
            |--------------------------------------------------------------------------
            |
            | This value is the default assets for Nue Admin.
            |
            */
            'brand' => [
                
                'favicon' => 'https://cdn.btekno.id/img/logo.svg', 

                'logo' => [

                    'default' => [

                        'light' => 'https://cdn.btekno.id/img/logo.svg', 

                        'dark' => 'https://cdn.btekno.id/img/logo-inverse.svg'

                    ],

                    'mini' => [

                        'light' => 'https://cdn.btekno.id/img/logo.svg', 

                        'dark' => 'https://cdn.btekno.id/img/logo-inverse.svg'

                    ],
                ], 

                'default_avatar' => 'https://cdn.btekno.id/templates/v2/img/160x160/img1.jpg'
            ], 

            /*
            |--------------------------------------------------------------------------
            | Nue Guard
            |--------------------------------------------------------------------------
            |
            | Here you may specify which authentication guard Nue will use while
            | authenticating users. This value should correspond with one of your
            | guards that is already present in your "auth" configuration file.
            |
            */

            'guard' => env('NUE_AUTH_GUARD', 'web'),

            /*
            |--------------------------------------------------------------------------
            | Nue Routes Middleware
            |--------------------------------------------------------------------------
            |
            | Here you may specify which middleware Nue will assign to the routes
            | that it registers with the application. If necessary, you may change
            | these middleware but typically this provided default is preferred.
            |
            */

            'middleware' => env('NUE_AUTH_MIDDLEWARE', ['web', 'nue']),

            /*
            |--------------------------------------------------------------------------
            | Home Path
            |--------------------------------------------------------------------------
            |
            | Here you may configure the path where users will get redirected during
            | authentication or password reset when the operations are successful
            | and the user is authenticated. You are free to change this value.
            |
            | Default use: RouteServiceProvider::HOME
            |
            */

            'home' => env('NUE_AUTH_HOME', RouteServiceProvider::HOME),

            /*
            |--------------------------------------------------------------------------
            | Username / Email
            |--------------------------------------------------------------------------
            |
            | This value defines which model attribute should be considered as your
            | application's "username" field. Typically, this might be the email
            | address of the users but you are free to change this value here.
            |
            | For your information, reset passwords and email verification feature 
            | only work only if you use email as default username field.
            |
            */

            'username' => env('NUE_AUTH_USERNAME', 'email'),

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
                Features::terminateAccount(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Profile Photo Disk
            |--------------------------------------------------------------------------
            |
            | This configuration value determines the default disk that will be used
            | when storing profile photos for your application's users. Typically
            | this will be the "public" disk but you may adjust this if needed.
            |
            */

            'profile_photo_disk' => env('NUE_AUTH_PHOTO', 'public'),

            /*
            |--------------------------------------------------------------------------
            | Nue route settings
            |--------------------------------------------------------------------------
            |
            | The routing configuration of the nue page, including the path prefix,
            | the controller namespace, and the default middleware. If you want to
            | access through the root path, just set the prefix to empty string.
            |
            */
            'route' => [

                'prefix' => env('NUE_PREFIX', ''),

                'middleware' => ['web', 'nue', 'nue.lock'],
            ],

            /*
            |--------------------------------------------------------------------------
            | Nue database settings
            |--------------------------------------------------------------------------
            |
            | Here are database settings for Nue builtin model & tables.
            |
            */
            'database' => [

                // Database connection for following tables.
                'connection' => '',

                // User tables and model.
                'users_table' => 'users',
                'users_model' => App\Models\User::class,

                // Role table and model.
                'roles_table' => 'roles',
                'roles_model' => Novay\Nue\Models\Role::class,

                // Permission table and model.
                'permissions_table' => 'permissions',
                'permissions_model' => Novay\Nue\Models\Permission::class,

                // Menu table and model.
                'menu_table' => 'menu',
                'menu_model' => Novay\Nue\Models\Menu::class,

                // Pivot table for table above.
                'user_activities_table'  => 'user_activities',
                'user_permissions_table' => 'user_permissions',
                'role_users_table'       => 'role_users',
                'role_permissions_table' => 'role_permissions',
                'role_menu_table'        => 'role_menu',
            ],

            /*
            |--------------------------------------------------------------------------
            | User operation log setting
            |--------------------------------------------------------------------------
            |
            | By setting this option to open or close operation log in Nue.
            |
            */
            'user_activities' => [

                'enable' => true,

                /*
                 * Only logging allowed methods in the list
                 */
                'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

                /*
                 * Routes that will not log to database.
                 *
                 * All method to path like: nue/settings/log-activity
                 * or specific method to path like: get:nue/settings/log-activity.
                 */
                'except' => [
                    env('NUE_PREFIX', '').'/settings/log-activity',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Indicates whether to check route permission.
            |--------------------------------------------------------------------------
            */
            'check_route_permission' => true,

            /*
            |--------------------------------------------------------------------------
            | Indicates whether to check menu roles.
            |--------------------------------------------------------------------------
            */
            'check_menu_roles'       => true,

            /*
            |--------------------------------------------------------------------------
            | Menu bind to permission
            |--------------------------------------------------------------------------
            |
            | whether enable menu bind to a permission
            */
            'menu_bind_permission' => true,

            /*
            |--------------------------------------------------------------------------
            | Extension Directory
            |--------------------------------------------------------------------------
            |
            | When you use command `php artisan nue:extend` to generate extensions,
            | the extension files will be generated in this directory.
            */
            'extension_dir' => app_path('Nue/Extensions'),

            /*
            |--------------------------------------------------------------------------
            | Settings for extensions.
            |--------------------------------------------------------------------------
            |
            | You can find all available extensions here
            | https://github.com/nue-extensions.
            |
            */
            'extensions' => [

                // https://github.com/nue-extensions/env
                'env' => [
                    'enable' => true
                ], 
            ]
        ];
    </code>
  </pre>

@endsection