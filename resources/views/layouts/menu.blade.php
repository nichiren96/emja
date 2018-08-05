<nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{ route('homepage') }}">
                <img src="{{ asset('assets/img/logo-e-mja.png') }}" alt="" style="height: 50px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav">
                <li>
                    <a class="@yield('home')" href="{{ route('homepage') }}">
                        Home
                    </a>

                </li>
                <li>
                    <a class="@yield('jobs')" href="{{ route('all_jobs') }}">
                        Emplois
                    </a>
                </li>
                <li>
                    <a href="#">
                        Entreprises
                    </a>
                </li>
                <li>
                    <a href="blog.html">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right float-right">
                <li class="left">
                    <a href="{{ route('register') }}">
                        <i class="ti-pencil-alt"></i> S'inscrire</a>
                </li>
                <li class="right">
                    <a href="{{ route('login') }}">
                        <i class="ti-lock"></i> Se connecter</a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="wpb-mobile-menu">
        <li>
            <a href="index-2.html">Home</a>
            <ul>
                <li>
                    <a href="index-2.html">Home 1</a>
                </li>
                <li>
                    <a href="index-02.html">Home 2</a>
                </li>
                <li>
                    <a href="index-03.html">Home 3</a>
                </li>
                <li>
                    <a href="index-04.html">Home 4</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="active" href="about.html">Pages</a>
            <ul>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="job-page.html">Job Page</a>
                </li>
                <li>
                    <a class="active" href="job-details.html">Job Details</a>
                </li>
                <li>
                    <a href="resume.html">Resume Page</a>
                </li>
                <li>
                    <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="pricing.html">Pricing Tables</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">For Candidates</a>
            <ul>
                <li>
                    <a href="browse-jobs.html">Browse Jobs</a>
                </li>
                <li>
                    <a href="browse-categories.html">Browse Categories</a>
                </li>
                <li>
                    <a href="add-resume.html">Add Resume</a>
                </li>
                <li>
                    <a href="manage-resumes.html">Manage Resumes</a>
                </li>
                <li>
                    <a href="job-alerts.html">Job Alerts</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">For Employers</a>
            <ul>
                <li>
                    <a href="post-job.html">Add Job</a>
                </li>
                <li>
                    <a href="manage-jobs.html">Manage Jobs</a>
                </li>
                <li>
                    <a href="manage-applications.html">Manage Applications</a>
                </li>
                <li>
                    <a href="browse-resumes.html">Browse Resumes</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
                <li>
                    <a href="blog.html">Blog - Right Sidebar</a>
                </li>
                <li>
                    <a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                </li>
                <li>
                    <a href="blog-full-width.html">Blog - Full Width</a>
                </li>
                <li>
                    <a href="single-post.html">Blog Single Post</a>
                </li>
            </ul>
        </li>
        <li class="btn-m">
            <a href="post-job.html">
                <i class="ti-pencil-alt"></i> Post A Job</a>
        </li>
        <li class="btn-m">
            <a href="my-account.html">
                <i class="ti-lock"></i> Log In</a>
        </li>
    </ul>

</nav>
