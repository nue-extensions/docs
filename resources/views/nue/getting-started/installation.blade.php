@extends('nue-docs::app')
@section('title', 'Installation')

@section('content')
	
	<x-nue::docs::header>
    Installation
    <x-slot:description>
      Tahap instalasi untuk menggunakan Nue Package <b>(Cukup 2 Perintah)</b>
    </x-slot:description>
  </x-nue::docs::header>

  <h2 id="persyaratan" class="hs-docs-heading">
    Persyaratan <a class="anchorjs-link" href="#persyaratan" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <ul class="lead">
  	<li>PHP 7+</li>
  	<li>Laravel 5, 6, 7, 8, 9</li>
  </ul>

  <br/>

  <div class="alert alert-soft-dark" role="alert">
    <div class="d-sm-flex">
      <div class="flex-shrink-0">
        <img class="avatar avatar-xl mb-2 mb-sm-0" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="" data-nue-theme-appearance="default">
        <img class="avatar avatar-xl mb-2 mb-sm-0" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="" data-nue-theme-appearance="dark">
      </div>

      <div class="flex-grow-1 ms-sm-4 lead">
        <h3>Perlu Diperhatikan :</h3>
        Kamu bisa mencoba ini di projek baru terlebih dulu, karena dikhawatirkan akan mengganggu atau bahkan <span class="fw-semi-bold">merusak</span> struktur database & resource views dari projek yang sedang kamu buat.
      </div>
    </div>
  </div>

  <br/>
  <p class="lead">
  	Apabila kamu tetap ingin meng-install package ini ke projek yang ada, 
  	pastikan kamu perhatikan file-file mana aja yang bakal di ganggu sama package ini.
  	Berikut file-file yang mungkin bisa bentrok sama file-file projek kalian :
  </p>

  <br/>
  <details open>
		<summary>
			<i class="bi-folder text-body me-1"></i> <strong>proyek-kamu</strong>
		</summary>

		<ul class="list-py-1 list-unstyled ps-4">
			<li>
				<details open>
					<summary>
						<i class="bi-folder text-body me-1"></i> 
						<strong>app</strong>
					</summary>
					<ul class="list-unstyled ps-4">
						<li>
							<details open>
								<summary>
									<i class="bi-folder text-body me-1"></i> 
									<strong>Http</strong>
								</summary>
								<ul class="list-unstyled ps-4">
									<li>
										<details open>
											<summary>
												<i class="bi-folder text-body me-1"></i> 
												<strong>Controllers</strong>
											</summary>
											<ul class="list-unstyled ps-4">
												<li>
													<details>
														<summary>
															<i class="bi-folder text-body me-1"></i> 
															<strong>Auth</strong>
														</summary>
														<ul class="list-unstyled ps-4">
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>ForgotPasswordController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>ConfirmPasswordController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>LoginController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>RegisterController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>ResetPasswordController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>VerificationController.php</strong>
															</li>
														</ul>
													</details>
												</li>
												<li class="mb-2">
													<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
													<strong>HomeController.php</strong> - 
													<span class="text-body">Replace if exists</span>
												</li>
												<li>
													<details>
														<summary>
															<i class="bi-folder text-body me-1"></i> 
															<strong>Nue</strong>
														</summary>
														<ul class="list-unstyled ps-4">
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>LogActivityController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>MenuController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>PermissionController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>ProfileController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>RoleController.php</strong>
															</li>
															<li>
																<span class="iconify text-body me-1" data-icon="bi:filetype-php"></span>
																<strong>UserController.php</strong>
															</li>
														</ul>
													</details>
												</li>
											</ul>
										</details>
									</li>
								</ul>
							</details>
						</li>
						<li>
							<details open>
								<summary>
									<i class="bi-folder text-body me-1"></i> 
									<strong>Models</strong>
								</summary>
								<ul class="list-unstyled ps-4">
									<li>
										<i class="iconify text-body me-1" data-icon="bi:filetype-php"></i>
										<strong>User.php</strong> - 
										<span class="text-body">Model User bawaan kamu akan di <b>replace</b>.</span>
									</li>
								</ul>
							</details>
						</li>
					</ul>
				</details>
			</li>
			<li>
				<details open>
					<summary>
						<i class="bi-folder text-body me-1"></i>
						<strong>config</strong>
					</summary>
					<ul class="list-unstyled ps-4">
						<li>
							<i class="bi-file-text me-1"></i> 
							nue.php
						</li>
					</ul>
				</details>
			</li>
			<li>
				<details open>
					<summary>
						<i class="bi-folder text-body me-1"></i>
						<strong>database</strong>
					</summary>
					<ul class="list-unstyled ps-4">
						<li>
							<details open>
								<summary>
									<i class="bi-folder text-body me-1"></i>
									<strong>migrations</strong>
								</summary>
								<ul class="list-unstyled ps-4">
									<li><i class="bi-file-text me-1"></i> 2014_10_12_000000_create_users_table.php</li>
									<li><i class="bi-file-text me-1"></i> 2021_01_01_000000_create_nue_tables.php</li>
								</ul>
							</details>
						</li>
					</ul>
				</details>
			</li>
			<li>
				<details open>
					<summary>
						<i class="bi-folder text-body me-1"></i>
						<strong>resources</strong>
					</summary>
					<ul class="list-unstyled ps-4">
						<li>
							<details open>
								<summary>
									<i class="bi-folder text-body me-1"></i>
									<strong>views</strong>
								</summary>
								<ul class="list-unstyled ps-4">
									<li>
										<details>
											<summary>
												<i class="bi-folder text-body me-1"></i>
												<strong>auth</strong>
											</summary>
											<ul class="list-unstyled ps-4">
												<li><i class="bi-file-text me-1"></i> login.blade.php</li>
												<li>
													<details>
														<summary>
															<i class="bi-folder text-body me-1"></i>
															<strong>passwords</strong>
														</summary>
														<ul class="list-unstyled ps-4">
															<li><i class="bi-file-text me-1"></i> confirm.blade.php</li>
															<li><i class="bi-file-text me-1"></i> email.blade.php</li>
															<li><i class="bi-file-text me-1"></i> reset.blade.php</li>
														</ul>
													</details>
												</li>
												<li><i class="bi-file-text me-1"></i> register.blade.php</li>
												<li><i class="bi-file-text me-1"></i> verify.blade.php</li>
											</ul>
										</details>
									</li>
									<li class="mb-2"><i class="bi-file-text me-1"></i> dashboard.blade.php</li>
									<li>
										<details>
											<summary>
												<i class="bi-folder text-body me-1"></i>
												<strong>layouts</strong>
											</summary>
											<ul class="list-unstyled ps-4">
												<li><i class="bi-file-text me-1"></i> app.blade.php</li>
												<li><i class="bi-file-text me-1"></i> blank.blade.php</li>
												<li>
													<details>
														<summary>
															<i class="bi-folder text-body me-1"></i>
															<strong>partials</strong>
														</summary>
														<ul class="list-unstyled ps-4">
															<li><i class="bi-file-text me-1"></i> aside.blade.php</li>
															<li><i class="bi-file-text me-1"></i> header.blade.php</li>
														</ul>
													</details>
												</li>
											</ul>
										</details>
									</li>
									<li>
										<details>
											<summary>
												<i class="bi-folder text-body me-1"></i>
												<strong>profile</strong>
											</summary>
											<ul class="list-unstyled ps-4">
												<li>
													<details>
														<summary>
															<i class="bi-folder text-body me-1"></i>
															<strong>page</strong>
														</summary>
														<ul class="list-unstyled ps-4">
															<li><i class="bi-file-text me-1"></i> basic.blade.php</li>
															<li><i class="bi-file-text me-1"></i> email.blade.php</li>
															<li><i class="bi-file-text me-1"></i> password.blade.php</li>
															<li><i class="bi-file-text me-1"></i> terminate.blade.php</li>
														</ul>
													</details>
												</li>
												<li><i class="bi-file-text me-1"></i> show.blade.php</li>
											</ul>
										</details>
									</li>
									<li><i class="bi-file-text me-1"></i> welcome.blade.php</li>
								</ul>
							</details>
						</li>
					</ul>
				</details>
			</li>
			<li>
				<details open>
					<summary>
						<i class="bi-folder text-body me-1"></i>
						<strong>routes</strong>
					</summary>
					<ul class="list-unstyled ps-4">
						<li><i class="bi-file-text me-1"></i> web.php</li>
					</ul>
				</details>
			</li>
		</ul>
	</details>

  <br class="my-4">

	<p class="lead">Karena semua file-file diatas akan di replace dengan file-file dari package ini (kecuali Route).</p>

  <hr class="my-4">

	<h2 id="instalasi" class="hs-docs-heading">
    Instalasi <a class="anchorjs-link" href="#instalasi" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

	<br/>

  <h4 id="first" class="mb-3 lead fw-semi-bold text-body">
    1. Pertama, buat projek Laravel seperti biasa : <a class="anchorjs-link" href="#first" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h4>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      laravel new nama_projek
    </code>
  </pre>

  <p class="lead mt-4">atau via composer :</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      composer create-project laravel/laravel nama_project
    </code>
  </pre>

  <hr class="my-4">

  <h4 id="second" class="mb-3 lead fw-semi-bold text-body">
    2. Pastikan konfigurasi database sudah terhubung <a class="anchorjs-link" href="#second" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h4>

  <p class="lead">Ini penting, karena package ini akan menjalankan perintah <code>migrate</code> secara otomatis pada saat kamu melakukan instalasi.</p>

  <hr class="my-4">

  <h4 id="third" class="mb-3 lead fw-semi-bold text-body">
    3. Install package via composer : <a class="anchorjs-link" href="#third" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h4>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      composer require novay/nue
    </code>
  </pre>

  <hr class="my-4">

  <h4 id="forth" class="mb-3 lead fw-semi-bold text-body">
    4. Eksekusi perintah ini untuk meng-install Nue ke projek kalian : <a class="anchorjs-link" href="#forth" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h4>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:install --force
    </code>
  </pre>

  <hr class="my-4">

  <h4 id="fifth" class="mb-3 lead fw-semi-bold text-body">
    5. Selesai. Aplikasi kamu sudah siap. <a class="anchorjs-link" href="#fifth" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h4>

  

@endsection