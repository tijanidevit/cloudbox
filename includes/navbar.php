<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="./" class="header-logo">
                    <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                </a>
            </div>
            <div class="iq-search-bar device-search">

                <form>
                    <div class="input-prepend input-append">
                        <div class="btn-group">
                            <form action="./search.php" method="get">
                                <label class="dropdown-toggle searchbox">
                                    <input class="search-query text search-input" type="search" name="q" placeholder="Type here to search..."><span class="search-replace"></span>
                                    <button class="search-link btn" type="submit"><i class="ri-search-line"></i></button>

                                </label>
                            </form>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">
                <div class="change-mode">
                    <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                        <div class="custom-switch-inner">
                            <p class="mb-0"> </p>
                            <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                            <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                <span class="switch-icon-left"><i class="a-left"></i></span>
                                <span class="switch-icon-right"><i class="a-right"></i></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">

                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="caption bg-primary line-height">P</div>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                <div class="card mb-0">
                                    <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="header-title">
                                            <h4 class="card-title mb-0">Profile</h4>
                                        </div>
                                        <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="profile-header">
                                            <div class="cover-container text-center">
                                                <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                    P
                                                    <a href="#">

                                                    </a>
                                                </div>
                                                <div class="profile-detail mt-3">
                                                    <h5><a href="#">Panny Marco</a></h5>
                                                    <p>pannymarco@gmail.com</p>
                                                </div>
                                                <a href="logout" class="btn btn-primary">Sign Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>