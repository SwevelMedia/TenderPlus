                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow d-flex justify-content-between">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline" style="margin-top: -20px;">
                        <button class="border-0" id="sidebarToggleTop">
                            <div class="hamburger1"></div>
                            <div class="hamburger1"></div>
                            <div class="hamburger1"></div>
                        </button>
                    </div>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none mr-3">
                        <div class="hamburger1"></div>
                        <div class="hamburger1"></div>
                        <div class="hamburger1"></div>
                    </button>
                    <div class="navbar topbar">
                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-md-0 mw-100 navbar-search">
                            <div class="form-group">
                                <i class="icon-input">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> -->
                                </i>
                                <input type="text" class="form-control my-1 mb-5 form-style border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown" style="list-style: none;">
                                <a class="nav-link dropstart" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="img-profile rounded-circle" style="border: 5px solid red; border-radius:100px;" src="<?= base_url("assets/img/image_user_profile.png") ?>">
                                    <span class="iconify" data-icon="ic:baseline-arrow-drop-down" style="color: red; margin-top:-15px" data-width="40" data-height="40"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class=" dropdown-item active" href="#">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
                <!-- End of Topbar -->