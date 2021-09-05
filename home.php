<?php 
    session_start();    
    if (!isset($_SESSION['cloud_user'])) {
        header('location: ./login');
    }
    include_once 'core/users.class.php';
    include_once 'core/user_folders.class.php';
    include_once 'core/core.function.php';
    $user_obj = new Users();
    $user_folder_obj = new User_folders();

    $user = $_SESSION['cloud_user'];
    $user_names = explode(' ', $user['fullname']);
    $user_id = $user['id'];

    $user_folders_count = $user_obj->user_folders_num($user_id);
    $user_files_count = $user_obj->user_files_num($user_id);
    $user_quick_access = $user_obj->fetch_limited_user_folders($user_id,2);
    $user_folders = $user_obj->fetch_limited_user_folders($user_id,4);
    $user_files = $user_obj->fetch_limited_user_files($user_id,4);
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
                                        <h3 class="mb-3">Welcome <?php echo $user_names[0] ?></h3>
                                        <p class="mb-5">You have <?php echo $user_folders_count ?> folders created and  <?php echo $user_files_count ?> files uploaded</p>
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
                                    <?php if ($user_folders_count == 0): ?>
                                        No Data Available Yet!
                                    <?php else: ?>
                                        <?php foreach ($user_quick_access as $folder): ?>
                                            <li class="col-lg-6 col-sm-6 mb-3 mb-sm-0">
                                                <a href="folder?id=<?php echo $folder['id'] ?>" >
                                                    <div data-load-file="file" style="cursor: pointer;" class="p-2 text-center border rounded">
                                                        <div>
                                                            <img src="./assets/images/layouts/mydrive/folder-1.png" class="img-fluid mb-1" alt="image1">
                                                        </div>
                                                        <p class="mb-0"><?php echo $folder['folder_name'] ?></p>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    <?php endif ?>
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
                    <?php if ($user_files_count == 0): ?>
                        <div class="col-lg-12 mb-2 mt-0 col-md-12 col-sm-12">
                            You have not uploaded any files yet!
                        </div>
                    <?php else: ?>
                        <?php foreach ($user_files as $file): ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body image-thumb">

                                        <a href="./file?id=<?php echo $file['id'] ?>" data-file-id="<?php echo $file['id'] ?>" class="load-file-modal" data-toggle="modal" data-target="#file-modal<?php echo $file['id'] ?>">
                                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                                <div class="iq-image-overlay"></div>
                                                <img src="./assets/images/layouts/page-1/<?php echo getFileType($file['file']) ?>.png" class="img-fluid" alt="image1">
                                            </div>
                                            <h6><?php echo $file['title'] ?>.<?php getRealFileType($file['file']) ?></h6>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="file-modal<?php echo $file['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="file-modalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fileModalTitle">File</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>File Name: </b><span id="file-filename"><?php echo $file['title'] ?></span></li>
                                                <li class="list-group-item"><b>File Size: </b><span id="file-size"><?php getFileSize('./uploads/'.$file["file"]) ?></span></li>
                                                <li class="list-group-item"><b>Date Uploaded: </b><span id="file-date-uploaded"><?php echo format_date($file['created_at']) ?></span></li>
                                                <li class="list-group-item"><b>Visibility: </b><span id="file-visibility">Public</span> <a href="change-visibility"><i class="fa fa-eye"></i></a></li>
                                                <li class="list-group-item"><b>URL: </b> <input type="text" id="file-url" value="https://ddjjkwd" class="form-control"> </li>
                                                <li class="list-group-item">
                                                    <a href="./uploads/<?php echo $file['file'] ?>" download id="file-download-link" class="btn btn-primary btn-block">
                                                        Download <i class="fa fa-download"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>





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
                    <?php if ($user_folders_count == 0): ?>
                        <div class="col-12">
                            You have not created any folders yet!
                        </div>
                    <?php else: ?>
                        <?php foreach ($user_folders as $folder): ?>
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
                                                        <a class="dropdown-item" href="./folder?id=<?php echo $folder['id'] ?>"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="./folder?id=<?php echo $folder['id'] ?>" class="folder">
                                            <h5 class="mb-2"><?php echo $folder['folder_name'] ?></h5>
                                            <p class="mb-2"><i class="fa fa-calendar text-danger mr-2 font-size-20"></i> <?php echo format_date($folder['created_at']) ?></p>
                                            <p class="mb-0"><i class="fa fa-file text-danger mr-2 font-size-20"></i> <?php echo $user_folder_obj->user_folder_files_num($folder['id']) ?> Files</p>
                                        </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
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