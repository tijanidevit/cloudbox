<?php 
    session_start();    
    if (!isset($_SESSION['cloud_user'])) {
        header('location: login');
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX </title>

    <?php include "includes/head_resources.php"; ?>
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/navbar.php"; ?>

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-transparent card-block card-stretch card-height mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="select-dropdown input-prepend input-append">
                                    <div class="btn-group">
                                        <label data-toggle="dropdown">
                                            <div class="dropdown-toggle search-query">My Drive<i class="fa fa-angle-down ml-3"></i></div><span class="search-replace"></span>
                                            <span class="caret">
                                                <!--icon-->
                                            </span>
                                        </label>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div>
                                            </li>
                                            <li>
                                                <div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div>
                                            </li>
                                            <li>
                                                <div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-block card-stretch card-height iq-welcome" style="background: url(./assets/images/layouts/mydrive/background.png) no-repeat scroll right center; background-color: #ffffff; background-size: contain;">
                            <div class="card-body property2-content">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="col-lg-6 col-sm-6 p-0">
                                        <h3 class="mb-3">Welcome Penny</h3>
                                        <p class="mb-5">You have 32 new notifications and 23 unread messages to reply</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Quick Access</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 mb-0 row align-items-center">
                                    <li class="col-lg-6 col-sm-6 mb-3 mb-sm-0">
                                        <a href="#" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                            <div data-load-file="file" style="cursor: pointer;" class="p-2 text-center border rounded">
                                                <div>
                                                    <img src="./assets/images/layouts/mydrive/folder-1.png" class="img-fluid mb-1" alt="image1">
                                                </div>
                                                <p class="mb-0">Planning</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-lg-6 col-sm-6">
                                        <a href="#" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                            <div data-load-file="file" style="cursor: pointer;" class="p-2 text-center border rounded">
                                                <div>
                                                    <img src="./assets/images/layouts/mydrive/folder-2.png" class="img-fluid mb-1" alt="image2">
                                                </div>
                                                <p class="mb-0">Wireframe</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-transparent ">
                            <div class="card-header d-flex justify-content-between pb-0">
                                <div class="header-title">
                                    <h4 class="card-title">Documents</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <a href="./drive" class=" view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body image-thumb">

                                <a href="./file?id=2" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <img src="./assets/images/layouts/page-1/pdf.png" class="img-fluid" alt="image1">
                                    </div>
                                    <h6>Terms.pdf</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body image-thumb">
                                <a href="./file?id=2" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <img src="./assets/images/layouts/page-1/doc.png" class="img-fluid" alt="image1">
                                    </div>
                                    <h6>New-one.docx</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body image-thumb">
                                <a href="./file?id=2" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <img src="./assets/images/layouts/page-1/xlsx.png" class="img-fluid" alt="image1">
                                    </div>
                                    <h6>Woo-box.xlsx</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body image-thumb doc-text">
                                <a href="#" data-file-id="3" class="load-file-modal" data-toggle="modal" data-target="#file-modal">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <img src="./assets/images/layouts/page-1/ppt.png" class="img-fluid" alt="image1">
                                    </div>
                                    <h6>IOS-content.pptx</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-transparent">
                            <div class="card-header d-flex justify-content-between pb-0">
                                <div class="header-title">
                                    <h4 class="card-title">Folders</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <a href="./folders" class=" view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="JavaScript:Void(0)" class="folder">
                                        <div class="icon-small bg-danger rounded mb-4">
                                            <i class="ri-file-copy-line"></i>
                                        </div>
                                    </a>
                                    <div class="card-header-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="./folder?id=2"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="./folder?id=2" class="folder">
                                    <h5 class="mb-2">Alexa Workshop</h5>
                                    <p class="mb-2"><i class="fa fa-calendar text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                    <p class="mb-0"><i class="fa fa-file text-danger mr-2 font-size-20"></i> 08 Files</p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="JavaScript:Void(0)" class="folder">
                                        <div class="icon-small bg-danger rounded mb-4">
                                            <i class="ri-file-copy-line"></i>
                                        </div>
                                    </a>
                                    <div class="card-header-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="./folder?id=2"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="./folder?id=2" class="folder">
                                    <h5 class="mb-2">Alexa Workshop</h5>
                                    <p class="mb-2"><i class="fa fa-calendar text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                    <p class="mb-0"><i class="fa fa-file text-danger mr-2 font-size-20"></i> 08 Files</p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="JavaScript:Void(0)" class="folder">
                                        <div class="icon-small bg-danger rounded mb-4">
                                            <i class="ri-file-copy-line"></i>
                                        </div>
                                    </a>
                                    <div class="card-header-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="./folder?id=2"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="./folder?id=2" class="folder">
                                    <h5 class="mb-2">Alexa Workshop</h5>
                                    <p class="mb-2"><i class="fa fa-calendar text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                    <p class="mb-0"><i class="fa fa-file text-danger mr-2 font-size-20"></i> 08 Files</p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="JavaScript:Void(0)" class="folder">
                                        <div class="icon-small bg-danger rounded mb-4">
                                            <i class="ri-file-copy-line"></i>
                                        </div>
                                    </a>
                                    <div class="card-header-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="./folder?id=2"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="./folder?id=2" class="folder">
                                    <h5 class="mb-2">Alexa Workshop</h5>
                                    <p class="mb-2"><i class="fa fa-calendar text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                    <p class="mb-0"><i class="fa fa-file text-danger mr-2 font-size-20"></i> 08 Files</p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <?php include "includes/file-modal.php"; ?>
    <?php include "includes/footer.php"; ?>

    <?php include "includes/script_resources.php"; ?>

</body>

</html>