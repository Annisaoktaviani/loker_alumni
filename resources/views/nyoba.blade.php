@extends('sidebar')
@section('content')
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="rounded shadow bg-white p-4 py-5">
                    <div class="custom-form">
                        <div id="message3"></div>
                        <form method="post" action="https://themesdesign.in/jobya/php/contact.php" name="contact-form" id="contact-form3">
                            <h4 class="text-dark mb-3">Profil Saya :</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Job Type</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Job Type">Job Type</option>
                                                <option value="1">Full Time</option>
                                                <option value="2">Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Job Category</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Category">Category</option>
                                                <option value="1">Web Developer</option>
                                                <option value="2">PHP Developer</option>
                                                <option value="3">Web Designer</option>
                                                <option value="4">Graphic Designer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">City</label>
                                        <input id="city" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Country</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Country">Country</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Bangladesh</option>
                                                <option value="3">Canada</option>
                                                <option value="4">Dominica</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Minimum Salary</label>
                                        <input id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Maximum Salary</label>
                                        <input id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Education Level</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Level">Level</option>
                                                <option value="1">Level-1</option>
                                                <option value="2">Level-2</option>
                                                <option value="3">Level-3</option>
                                                <option value="4">Level-4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Year of Experience</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Experience">Experience</option>
                                                <option value="1">1 Year</option>
                                                <option value="2">2 Year</option>
                                                <option value="3">3 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Website</label>
                                        <input id="url" type="url" class="form-control resume" placeholder="">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Email Address</label>
                                        <input id="email-address" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Phone Number</label>
                                        <input id="number" type="text" class="form-control resume" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Gender</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Gender">Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Shift</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Shift">Shift</option>
                                                <option value="1">Morning</option>
                                                <option value="2">Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group app-label mt-2">
                                        <label class="text-muted">Job Description</label>
                                        <textarea id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <div class="input-group mt-2 mb-2">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-inline-item">
                                            <h6 class="text-muted mb-0">Upload Images Or Documents.</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-2">
                                    <a href="#" class="btn btn-primary">Post a Job</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection