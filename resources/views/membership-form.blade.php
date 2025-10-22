@extends('layouts.app')

@section('title', __('form.membership_page_title'))

@section('content')

<div class="container my-5">
  <div class="row align-items-center">
    <!-- Left Column: Image -->
    <div class="col-lg-6 mb-4 mb-lg-0 text-center d-none d-md-inline">
      <img src="banner-image/form-banner-2.png" class="img-fluid" alt="Form Banner">
    </div>

    <!-- Right Column: Form -->
    <div class="col-lg-6">
      <div class="card p-4 shadow-sm">
        <h2 class="mb-4 text-center bold">{{ __('form.membership_form_heading') }}</h2>

        <div class="stepper mb-4 d-flex justify-content-between">
          <div class="step-indicator active">{{ __('form.step_1') }}</div>
          <div class="step-indicator">{{ __('form.step_2') }}</div>
          <div class="step-indicator">{{ __('form.step_3') }}</div>
        </div>

        <form method="POST" id="multiStepForm"  action="{{ route('membership.store') }}"  enctype="multipart/form-data">
          @csrf
          <!-- Step 1 -->
          <div class="step active">
            <h5 class="mb-3">{{ __('form.membership_step1_title') }}</h5>

            <input type="text" name="member_name" class="form-control mb-3" placeholder="{{ __('form.member_name_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_member_name') }}</div>

            <input type="text" name="spouse_name" class="form-control mb-3" placeholder="{{ __('form.spouse_name_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_spouse_name') }}</div>

            <input type="number" name="age" class="form-control mb-3" placeholder="{{ __('form.age_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_age') }}</div>

            <label class="mt-2">{{ __('form.dob_label') }}</label>
            <input type="date" name="dob" class="form-control mb-3" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_select_dob') }}</div>

            <input type="text" name="father_name" class="form-control mb-3" placeholder="{{ __('form.father_name_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_father_name') }}</div>

            <input type="text" name="mother_name" class="form-control mb-3" placeholder="{{ __('form.mother_name_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_mother_name') }}</div>

            <select name="sub_caste" id="subCaste" class="form-select mb-3" required>
              <option value="">{{ __('form.sub_cast_placeholder') }}</option>
              <option value="Shrivastav" class=" ">Shrivastav</option>
                                <option value="Saxena" class=" ">Saxena</option>
                                <option value="Nigam" class=" ">Nigam</option>
                                <option value="Bhatnagar" class=" ">Bhatnagar</option>
                                <option value="Mathur" class=" ">Mathur</option>
                                <option value="Asthana" class=" ">Asthana</option>
                                <option value="Verma" class=" ">Verma</option>
                                <option value="Roy" class=" ">Roy</option>
                                <option value="Paul" class=" ">Paul</option>
                                <option value="Bose" class=" ">Bose</option>
                                <option value="Dutta" class=" ">Dutta</option>
                                <option value="Gour" class=" ">Gour</option>
                                <option value="Ghosh" class=" ">Ghosh</option>
                                <option value="Johri" class=" ">Johri</option>
                                <option value="Kulshrestha " class=" ">Kulshrestha </option>
                                <option value="Sinha" class=" ">Sinha</option>
                                <option value="other" class=" ">other</option>
            </select>
            <div class="invalid-feedback mb-2">{{ __('form.please_select_subcast') }}</div>

            <input type="text" name="gotra" class="form-control mb-3" placeholder="{{ __('form.gotra_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_gotra') }}</div>

            <button type="button" class="btn btn-primary next-btn w-100">{{ __('form.next') }}</button>
          </div>

          <!-- Step 2 -->
          <div class="step">
            <h5 class="mb-3">{{ __('form.membership_step2_title') }}</h5>

            <input type="text" name="qualification" class="form-control mb-3" placeholder="{{ __('form.qualification_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_qualification') }}</div>

            <input type="text" name="profession" class="form-control mb-3" placeholder="{{ __('form.profession_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_profession') }}</div>

            <input type="text" name="parental_place" class="form-control mb-3" placeholder="{{ __('form.parental_place_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_parental_place') }}</div>

            <input type="text" name="postal_address" class="form-control mb-3" placeholder="{{ __('form.postal_address_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_postal') }}</div>

            <input type="text" name="office_address" class="form-control mb-3" placeholder="{{ __('form.office_address_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_office_address') }}</div>

            <input type="email" name="email" class="form-control mb-3" placeholder="{{ __('form.email_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_email') }}</div>
          
            <input type="text" name="phone" class="form-control mb-3" placeholder="{{ __('form.phone_placeholder') }}" required>
            <div class="invalid-feedback mb-2">{{ __('form.please_enter_phone') }}</div>

            <select name="family_members" id="familyMembers" class="form-select mb-3" required>
              <option value="">{{ __('form.family_members_placeholder') }}</option>
              <option value="1">{{ __('form.family_members_1') }}</option>
              <option value="2">{{ __('form.family_members_2') }}</option>
              <option value="3">{{ __('form.family_members_3') }}</option>
              <option value="4">{{ __('form.family_members_4') }}</option>
              <option value="5">{{ __('form.family_members_5') }}</option>
              <option value="6">{{ __('form.family_members_6') }}</option>
              <option value="7">{{ __('form.family_members_7') }}</option>
              <option value="8+">{{ __('form.family_members_8_plus') }}</option>
            </select>
            <div class="invalid-feedback mb-3">{{ __('form.please_select_family_members') }}</div>

            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-primary prev-btn">{{ __('form.previous') }}</button>
              <button type="button" class="btn btn-primary next-btn">{{ __('form.next') }}</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="step">
            <h5 class="mb-3">{{ __('form.membership_step3_title') }}</h5>

            <div class="mb-3">
              <label>{{ __('form.upload_picture_label') }}</label><br>
              <button type="button" class="btn btn-outline-primary mb-3" onclick="document.getElementById('picInput').click()">{{ __('form.choose_file') }}</button>
              <input type="file" name="pic" id="picInput" accept="image/*" style="display:none" required>
              <div class="invalid-feedback">{{ __('form.please_upload_picture') }}</div>
              <img id="picPreview" class="img-preview mt-3" style="max-height:100px;">
            </div>

            <div class="mb-3">
              <label>{{ __('form.upload_signature_label') }}</label><br>
              <button type="button" class="btn btn-outline-primary mb-3" onclick="document.getElementById('signInput').click()">{{ __('form.choose_file') }}</button>
              <input type="file" name="signature" id="signInput" accept="image/*" style="display:none" required>
              <div class="invalid-feedback">{{ __('form.please_upload_signature') }}</div>
              <img id="signPreview" class="img-preview mt-3" style="max-height:100px;">
            </div>

            <div class="mb-3">
              <label>{{ __('form.upload_receipt_label') }}</label><br>
              <button type="button" class="btn btn-outline-primary mb-3" onclick="document.getElementById('feesInput').click()">{{ __('form.choose_file') }}</button>
              <input type="file" name="receipt" id="feesInput" accept="image/*" style="display:none" required>
              <div class="invalid-feedback">{{ __('form.please_upload_receipt') }}</div>
              <img id="feesPreview" class="img-preview mt-2" style="max-height:100px;">
            </div>

            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-primary prev-btn">{{ __('form.previous') }}</button>
              <button type="submit" class="btn btn-primary">{{ __('form.submit') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@include('partials.toast')
