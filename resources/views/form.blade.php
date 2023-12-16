{{-- <div class="container mt-3">
    <div class="card p-3 text-center">
        <div class="d-flex flex-row justify-content-center mb-3">
            <div class="image"> <img src="https://i.imgur.com/hczKIze.jpg" class="rounded-circle"> <span><i class='bx bxs-camera-plus'></i></span> </div>
            <div class="d-flex flex-column ms-3 user-details">
                <h4 class="mb-0">Zenda Grace</h4>
                <div class="ratings"> <span>4.0</span> <i class='bx bx-star ms-1'></i> </div> <span>Pro Member</span>
            </div>
        </div>
        <h4>Edit Profile</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="inputs"> <label>Name</label> <input class="form-control" type="text" placeholder="Name"> </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>Email</label> <input class="form-control" type="text" placeholder="Email"> </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>City</label> <input class="form-control" type="text" placeholder="City"> </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>Country</label> <input class="form-control" type="text" placeholder="Country"> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-inputs"> <label>About</label> <textarea class="form-control" type="text" placeholder="Tell us about yourself"> </textarea> </div>
            </div>
        </div>
        <div class="mt-3 gap-2 d-flex justify-content-end"> <button class="px-3 btn btn-sm btn-outline-primary">Cancel</button> <button class="px-3 btn btn-sm btn-primary">Save</button> </div>
    </div>
</div> --}}
@extends('sidebar')
@section('content')
    
<div id="navigation">
    <!-- Navigation Menu-->   
    <ul class="navigation-menu">
        <li><a href="index.html">Home</a></li>
        <li class="has-submenu">
            <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
            <ul class="submenu">
                <li><a href="job-list.html">Job List</a></li>
                <li><a href="job-grid.html">Job Grid</a></li>
                <li><a href="job-details.html">Job Details</a></li>
                <li><a href="job-details-2.html">Job Details-2</a></li>
            </ul>
        </li>
        
        <li class="has-submenu">
            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
            <ul class="submenu">
                <li><a href="about.html">About us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="faq.html">Faqs</a></li>
                <li><a href="pricing.html">Pricing plans</a></li>
                <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="candidates-listing.html">Candidates Listing</a></li>
                        <li><a href="candidates-profile.html">Candidates Profile</a></li>
                        <li><a href="create-resume.html">Create Resume</a></li>
                    </ul>  
                </li>
                <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="blog-grid.html">Blogs</a></li>
                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>  
                </li>
                <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="employers-list.html">Employers List</a></li>
                        <li><a href="company-detail.html">Company Detail</a></li>
                    </ul>  
                </li>
                <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a href="recovery_passward.html">Forgot Password</a></li>
                    </ul>  
                </li>
                <li><a href="components.html"> Components</a></li>
            </ul>
        </li>
        <li>
            <a href="contact.html">contact</a>
        </li>
    </ul><!--end navigation menu-->
</div><!--end navigation-->
        @endsection