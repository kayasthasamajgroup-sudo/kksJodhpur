@extends('layouts.app')

@section('title', __('form.page_title'))

@section('content')

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Column: Image -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center d-none d-md-inline">
                <img src="banner-image/matrimonial-form.png" class="img-fluid" alt="Form Banner">
            </div>

            <!-- Right Column: Form -->
            <div class="col-lg-6">
                <div class="card p-4 shadow-sm">
                    <h2 class="mb-4 text-center text-primary bold">{{ __('form.form_heading') }}</h2>

                    <div class="stepper mb-4 d-flex justify-content-between">
                        <div class="step-indicator active">{{ __('form.step_1') }}</div>
                        <div class="step-indicator">{{ __('form.step_2') }}</div>
                        <div class="step-indicator">{{ __('form.step_3') }}</div>
                    </div>

                    <form method="POST" id="multiStepForm" action="{{ route('matrimonial.store') }}"
                        enctype="multipart/form-data">

                        @csrf
                        <!-- Step 1 -->
                        <div class="step active">
                            <h5 class="mb-3">{{ __('form.step1_title') }}</h5>
                            <select name="createdBy" id="createdBy" class="form-select mb-3" required>
                                <option value="">{{ __('form.profile_created_by_placeholder') }}</option>
                                <option value="self">{{ __('form.profile_created_by_self') }}</option>
                                <option value="parent">{{ __('form.profile_created_by_parent') }}</option>
                                <option value="sibling">{{ __('form.profile_created_by_sibling') }}</option>
                                <option value="relative">{{ __('form.profile_created_by_relative') }}</option>
                                <option value="friend">{{ __('form.profile_created_by_friend') }}</option>

                            </select>
                            <div class="invalid-feedback mb-2">{{ __('form.please_select_creator') }}</div>
                            <input type="text" name="person_name" class="form-control mb-3" placeholder="{{ __('form.person_name_placeholder') }}"
                                required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_person_name') }}</div>
                            <input type="number" name="age" class="form-control mb-3" placeholder="{{ __('form.age_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_age') }}</div>

                            <select name="marital_status" id="marital_status" class="form-select mb-3" required>
                                <option value="">{{ __('form.marital_status_placeholder') }}</option>
                                <option value="unmarried">{{ __('form.marital_unmarried') }}</option>
                                <option value="widow/widower">{{ __('form.marital_widow_widower') }}</option>
                                <option value="divorced">{{ __('form.marital_divorced') }}</option>
                                <option value="separated">{{ __('form.marital_separated') }}</option>

                            </select>
                            <div class="invalid-feedback mb-2">{{ __('form.please_select_marital') }}</div>
                            <select name="gender" id="gender" class="form-select mb-3" required>
                                <option value="">{{ __('form.gender_placeholder') }}</option>
                                <option value="male">{{ __('form.gender_male') }}</option>
                                <option value="female">{{ __('form.gender_female') }}</option>


                            </select>
                            <div class="invalid-feedback mb-2">{{ __('form.please_select_gender') }}</div>
                            <label class="mt-2">{{ __('form.dob_label') }}</label>
                            <input type="date" name="dob" class="form-control mb-3" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_select_dob') }}</div>

                            <select data-is-required="true" name="sub_cast" id="sub_cast" class="form-select mb-3"
                                required>
                                <option value="" class=" "> {{ __('form.sub_cast_placeholder') }}</option>
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
                            <input type="text" name="father_name" class="form-control mb-3"
                                placeholder="{{ __('form.father_name_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_father_name') }}</div>


                            <input type="text" name="father_occupation" class="form-control mb-3"
                                placeholder="{{ __('form.father_occupation_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_father_occupation') }}</div>

                            <input type="text" name="mother_name" class="form-control mb-3"
                                placeholder="{{ __('form.mother_name_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_mother_name') }}</div>

                            <input type="email" name="email" class="form-control mb-3" placeholder="{{ __('form.email_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_email') }}</div>

                            <input type="text" name="phone" class="form-control mb-3" placeholder="{{ __('form.phone_placeholder') }}"
                                required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_phone') }}</div>
                            <input type="text" name="qualification" class="form-control mb-3"
                                placeholder="{{ __('form.qualification_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_qualification') }}</div>

                            <input type="text" name="profession" class="form-control mb-3"
                                placeholder="{{ __('form.profession_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_profession') }}</div>

                            <input type="text" name="hobbies" class="form-control mb-3" placeholder="{{ __('form.hobbies_placeholder') }}"
                                required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_hobbies') }}</div>


                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-primary prev-btn">{{ __('form.previous') }}</button>
                                <button type="button" class="btn btn-primary next-btn">{{ __('form.next') }}</button>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step">
                            <h5 class="mb-3">{{ __('form.step3_title') }}</h5>
                            <input type="text" name="postal_address" class="form-control mb-3"
                                placeholder="{{ __('form.postal_address_placeholder') }}" required>
                            <div class="invalid-feedback mb-2">{{ __('form.please_enter_postal') }}</div>
                            <div class="mb-3">
                                <label>{{ __('form.upload_picture_label') }}</label><br>
                                <button type="button" class="btn btn-outline-primary mb-3"
                                    onclick="document.getElementById('picInput').click()">{{ __('form.choose_file') }}</button>
                                <input type="file" name="pic" id="picInput" accept="image/*"
                                    style="display:none" required>
                                <div class="invalid-feedback">{{ __('form.please_upload_picture') }}</div>
                                <img id="picPreview" class="img-preview mt-3" style="max-height:100px;">
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
