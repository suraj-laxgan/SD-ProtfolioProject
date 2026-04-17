@extends('layout.admin.app')
@section('title', 'Profile | SD')
@section('meta_description', 'SD Dashboard home')
@section('meta_keywords', 'SD Dashboard home.')
@section('content')


    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            @include('profile.admin.nav')
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded"
                            height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" name="profile_image" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('wsprofile.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"  type="text" id="firstName" name="name" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Title</label>
                                <input class="form-control"  value="{{ old('title') }}" type="text" name="title" id="lastName" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="subTitle" class="form-label">Sub Title</label>
                                <input class="form-control" type="text" name="sub_title" id="subTitle" value="{{ old('sub_title') }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control  @error('email') is-invalid @enderror" type="text" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">IND (+91)</span>
                                    <input type="text" id="phoneNumber" name="phone" class="form-control"value="{{ old('phone') }}"
                                        placeholder="202 555 0111" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="select2 form-select" name="country">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state"
                                    placeholder="state"  value="{{ old('state') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="zipCode" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zipCode" name="zipCode"
                                    placeholder="231465" maxlength="6" value="{{ old('zipCode') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="total_experience" class="form-label">Total Experience</label>
                                <input type="text" class="form-control" id="total_experience" name="total_experience"
                                    placeholder="5" maxlength="3" value="{{ old('total_experience') }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="project_completed" class="form-label">Project Completed</label>
                                <input type="text" class="form-control" id="project_completed"
                                    name="project_completed" placeholder="5" maxlength="3" value="{{ old('project_completed') }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="happy_client" class="form-label">Happy Client</label>
                                <input type="text" class="form-control" id="happy_client" name="happy_client"
                                    placeholder="5" maxlength="3" value="{{ old('happy_client') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="github_url" class="form-label">Github url</label>
                                <input type="text" class="form-control" id="github_url" name="github_url" value="{{ old('github_url') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="linkedin_url" class="form-label">Linkedin Url</label>
                                <input type="text" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url') }}"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="upwork_url" class="form-label">Upwork Url</label>
                                <input type="text" class="form-control" id="upwork_url" name="upwork_url" value="{{ old('upwork_url') }}"/>
                            </div>

                             <div class="mb-3 col-md-6">
                                <label for="contact_title" class="form-label">Contact Title</label>
                                <input class="form-control" type="text" id="contact_title" name="contact_title" value="{{ old('contact_title') }}"
                                    placeholder="Contact Title" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="contact_sub_title" class="form-label">Contact Sub Title</label>
                                <input class="form-control" type="text" id="contact_sub_title" value="{{ old('contact_sub_title') }}"
                                    name="contact_sub_title" placeholder="Contact Sub Title" />
                            </div>

                             <div class="mb-3 col-md-6">
                                <label for="service_title" class="form-label">Service Title</label>
                                <input class="form-control" type="text" id="service_title" name="service_title" value="{{ old('service_title') }}"
                                    placeholder="Service Title" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="service_sub_title" class="form-label">Service Sub Title</label>
                                <input class="form-control" type="text" id="service_sub_title"
                                    name="service_sub_title" placeholder="Service Sub Title" />
                            </div>
                             <div class="mb-3 col-md-6">
                                <label for="service_header" class="form-label">Service Header</label>
                                <textarea name="service_header" class="form-control" id="service_header" cols="30" rows="1"></textarea>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="about_title" class="form-label">About Title</label>
                                <input class="form-control" type="text" id="about_title" name="about_title"
                                    placeholder="California" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="about_subtitle" class="form-label">About Sub Title</label>
                                <input class="form-control" type="text" id="about_subtitle" name="about_subtitle"
                                    placeholder="California" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="about_header" class="form-label">About Header</label>
                                <textarea name="about_header" class="form-control" id="about_header" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="about_header" class="form-label">About Description</label>
                                <textarea name="about_description" class="form-control" id="about_description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="resume_header" class="form-label">Resume Header</label>
                                <textarea name="resume_header" class="form-control" id="resume_header" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exp_header" class="form-label">Experience Header</label>
                                <textarea name="exp_header" class="form-control" id="exp_header" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="edu_header" class="form-label">Education Header</label>
                                <textarea name="edu_header" class="form-control" id="edu_header" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="protfolio_header" class="form-label">Protfolio Header</label>
                                <textarea name="protfolio_header" class="form-control" id="protfolio_header" cols="30" rows="5"></textarea>
                            </div>
   
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Create</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
           
        </div>
    </div>


@endsection


@push('scripts')
    <script></script>
@endpush
