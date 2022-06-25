@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Profile')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF SELECT
      // =======================================================
      Nue.components.NueSelect.init('.js-select')
      
      // INITIALIZATION OF FILE ATTACHMENT
      // =======================================================
      new NueFileAttach('.js-file-attach')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Profile
  </x-nue::docs::header>

  <x-nue::docs::example i="1">
    <x-slot:preview>
      <div class="profile-cover">
        <div class="profile-cover-img-wrapper">
          <img class="profile-cover-img" src="https://cdn.btekno.id/templates/nue/img/1920x400/img1.jpg" alt="">
        </div>
      </div>
      <div class="text-center mb-5">
        <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
          <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
          <span class="avatar-status avatar-status-success"></span>
        </div>
        <h1 class="page-header-title">
          Melani Malik <i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i>
        </h1>

        <ul class="list-inline list-px-2">
          <li class="list-inline-item">
            <i class="bi-building me-1"></i>
            <span>Nue</span>
          </li>

          <li class="list-inline-item">
            <i class="bi-geo-alt me-1"></i>
            <a href="#">Samarinda,</a>
            <a href="#">ID</a>
          </li>

          <li class="list-inline-item">
            <i class="bi-calendar-week me-1"></i>
            <span>Joined November 2015</span>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Profile Cover --&gt;
          &lt;div class="profile-cover"&gt;
            &lt;div class="profile-cover-img-wrapper"&gt;
              &lt;img class="profile-cover-img" src="https://cdn.btekno.id/templates/nue/img/1920x400/img1.jpg" alt=""&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Profile Cover --&gt;

          &lt;!-- Profile Header --&gt;
          &lt;div class="text-center mb-5"&gt;
            &lt;!-- Avatar --&gt;
            &lt;div class="avatar avatar-xxl avatar-circle profile-cover-avatar"&gt;
              &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
              &lt;span class="avatar-status avatar-status-success"&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Avatar --&gt;

            &lt;h1 class="page-header-title"&gt;Melani Malik &lt;i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/h1&gt;

            &lt;!-- List --&gt;
            &lt;ul class="list-inline list-px-2"&gt;
              &lt;li class="list-inline-item"&gt;
                &lt;i class="bi-building me-1"&gt;&lt;/i&gt;
                &lt;span&gt;Nue&lt;/span&gt;
              &lt;/li&gt;

              &lt;li class="list-inline-item"&gt;
                &lt;i class="bi-geo-alt me-1"&gt;&lt;/i&gt;
                &lt;a href="#"&gt;Samarinda,&lt;/a&gt;
                &lt;a href="#"&gt;ID&lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="list-inline-item"&gt;
                &lt;i class="bi-calendar-week me-1"&gt;&lt;/i&gt;
                &lt;span&gt;Joined November 2015&lt;/span&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End List --&gt;
          &lt;/div&gt;
          &lt;!-- End Profile Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-card" class="nue-docs-heading">
    With card <a class="anchorjs-link" href="#with-card" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="2">
    <x-slot:preview>
      <div class="card">
        <div class="profile-cover">
          <div class="profile-cover-img-wrapper">
            <img id="profileCoverImg" class="profile-cover-img" src="https://cdn.btekno.id/templates/nue/img/1920x400/img2.jpg" alt="">

            <div class="profile-cover-content profile-cover-uploader p-3">
              <input type="file" class="js-file-attach profile-cover-uploader-input" id="profileCoverUplaoder" data-nue-file-attach-options='{
                          "textTarget": "#profileCoverImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>
              <label class="profile-cover-uploader-label btn btn-sm btn-white" for="profileCoverUplaoder">
                <i class="bi-camera-fill"></i>
                <span class="d-none d-sm-inline-block ms-1">Upload header</span>
              </label>
            </div>
          </div>
        </div>

        <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
          <img id="editAvatarImgModal" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">

          <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-nue-file-attach-options='{
                      "textTarget": "#editAvatarImgModal",
                      "mode": "image",
                      "targetAttr": "src",
                      "allowTypes": [".png", ".jpeg", ".jpg"]
                   }'>

          <span class="avatar-uploader-trigger">
            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
          </span>
        </label>

        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <span class="d-block fs-5 mb-2">Who can see your profile photo? <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>

              <div class="tom-select-custom">
                <select class="js-select form-select" data-nue-tom-select-options='{
                          "searchInDropdown": false,
                          "dropdownWidth": "auto"
                        }'>
                  <option value="privacy1" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-globe"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semi-bold">Anyone</span><span class="tom-select-custom-hide small">Visible to anyone who can view your content. Accessible by installed apps.</span></div></div>'>Anyone</option>
                  <option value="privacy2" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-lock"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semi-bold">Only you</span><span class="tom-select-custom-hide small">Only visible to you.</span></div></div>'>Only you</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card"&gt;
            &lt;!-- Profile Cover --&gt;
            &lt;div class="profile-cover"&gt;
              &lt;div class="profile-cover-img-wrapper"&gt;
                &lt;img id="profileCoverImg" class="profile-cover-img" src="https://cdn.btekno.id/templates/nue/img/1920x400/img2.jpg" alt=""&gt;

                &lt;!-- Custom File Cover --&gt;
                &lt;div class="profile-cover-content profile-cover-uploader p-3"&gt;
                  &lt;input type="file" class="js-file-attach profile-cover-uploader-input" id="profileCoverUplaoder"
                         data-nue-file-attach-options='{
                              "textTarget": "#profileCoverImg",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'&gt;
                  &lt;label class="profile-cover-uploader-label btn btn-sm btn-white" for="profileCoverUplaoder"&gt;
                    &lt;i class="bi-camera-fill"&gt;&lt;/i&gt;
                    &lt;span class="d-none d-sm-inline-block ms-1"&gt;Upload header&lt;/span&gt;
                  &lt;/label&gt;
                &lt;/div&gt;
                &lt;!-- End Custom File Cover --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Profile Cover --&gt;

            &lt;!-- Avatar --&gt;
            &lt;label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal"&gt;
              &lt;img id="editAvatarImgModal" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;

              &lt;input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                     data-nue-file-attach-options='{
                          "textTarget": "#editAvatarImgModal",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'&gt;

              &lt;span class="avatar-uploader-trigger"&gt;
                &lt;i class="bi-pencil-fill avatar-uploader-icon shadow-sm"&gt;&lt;/i&gt;
              &lt;/span&gt;
            &lt;/label&gt;
            &lt;!-- End Avatar --&gt;

            &lt;!-- Body --&gt;
            &lt;div class="card-body"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-sm-5"&gt;
                  &lt;span class="d-block fs-5 mb-2"&gt;Who can see your profile photo? &lt;i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."&gt;&lt;/i&gt;&lt;/span&gt;

                  &lt;!-- Select --&gt;
                  &lt;div class="tom-select-custom"&gt;
                    &lt;select class="js-select form-select"
                            data-nue-tom-select-options='{
                              "searchInDropdown": false,
                              "dropdownWidth": "auto"
                            }'&gt;
                      &lt;option value="privacy1" data-option-template='&lt;div class="d-flex align-items-start"&gt;&lt;div class="flex-shrink-0"&gt;&lt;i class="bi-globe"&gt;&lt;/i&gt;&lt;/div&gt;&lt;div class="flex-grow-1 ms-2"&gt;&lt;span class="d-block fw-semi-bold"&gt;Anyone&lt;/span&gt;&lt;span class="tom-select-custom-hide small"&gt;Visible to anyone who can view your content. Accessible by installed apps.&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;'&gt;Anyone&lt;/option&gt;
                      &lt;option value="privacy2" data-option-template='&lt;div class="d-flex align-items-start"&gt;&lt;div class="flex-shrink-0"&gt;&lt;i class="bi-lock"&gt;&lt;/i&gt;&lt;/div&gt;&lt;div class="flex-grow-1 ms-2"&gt;&lt;span class="d-block fw-semi-bold"&gt;Only you&lt;/span&gt;&lt;span class="tom-select-custom-hide small"&gt;Only visible to you.&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;'&gt;Only you&lt;/option&gt;
                    &lt;/select&gt;
                  &lt;/div&gt;
                  &lt;!-- End Select --&gt;
                 &lt;/div&gt;
                 &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;
            &lt;/div&gt;
            &lt;!-- End Body --&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- JS Plugins Init. --&gt;
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF SELECT
              // =======================================================
              Nue.components.NueSelect.init('.js-select')


              // INITIALIZATION OF FILE ATTACHMENT
              // =======================================================
              new NueFileAttach('.js-file-attach')
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <div class="alert alert-soft-dark card-alert" role="alert">
    Contoh diatas menggunakan library <a class="alert-link" href="">Nue File Attach <i class="bi-link-45deg"></i></a> dan <a class="alert-link" href="">Advanced Select <i class="bi-link-45deg"></i></a>.
  </div>

@endsection