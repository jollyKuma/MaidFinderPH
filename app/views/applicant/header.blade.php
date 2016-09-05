
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content black-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/profile') }}">Profile</a></li>
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="">
        <div class="nav-wrapper navbar-fixed container-fluid">
            <a href="#" data-activates="mobile-demo" class="button-collapse btn-floating btn-large waves-effect waves-light  blue accent-1 white-text"><i class="material-icons">menu</i></a>

            <a href="{{asset('/')}}" style="font-family:DancingScript, cursive; margin-left:0;color:#46a7f7; weight:100;font-size:2em;"  class="brand-logo above "><span><img height="55"   src="{{ asset('public/images/header2.png') }}" /></span></a>
            <ul class="right hide-on-med-and-down ">
                <li><a class="white-text" href="{{ asset('applicant/home') }}">Home</a></li>
                <li><a class="white-text" href="{{ asset('employer/job/ads') }}">Employer ads</a></li>
                <li><a class="white-text" href="badges.html">Recommendations</a></li>
                <li><a class="white-text" href="badges.html">Subscription</a></li>
                <!-- Dropdown Trigger -->
                <li>

                    <a class="dropdown-button chip light-blue lighten-1 white-text" data-hover="true" data-beloworigin="true" href="{{ asset('applicant/profile') }}" data-activates="dropdown1">{{ $app['fname'] }}<img src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" alt="Contact Person"><i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="side-nav " id="mobile-demo">
                <li></li>
                    </a>
                    <a class="collection-item black-text" href="{{ asset('applicant/home') }}">Home</a>
                    <a class="collection-item black-text" href="{{ asset('applicant/shortlist') }}">Shortlist</a>
                    <a class="collection-item black-text" href="{{ asset('employer/job/request') }}">Employers request</a>
                    <a class="collection-item black-text" href="{{ asset('applicant/messagebox') }}">Message box</a>
                    <a class="collection-item black-text" href="{{ asset('applicant/application') }}">Job application</a>
                    <a class="collection-item black-text" href="{{ asset('applicant/experience') }}">Experiences</a>
                </li>
                <li><a class="black-text" href="{{ asset('employers/job/ads') }}">Employer ads</a></li>
                <li><a class="black-text" href="badges.html">Recomendations</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#_" data-activates="dropdown2">{{ $app['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>
