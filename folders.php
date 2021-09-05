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
    $user_folders = $user_obj->fetch_user_folders($user_id);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX | Folders</title>

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
                                        <label>
                                            <div class="dropdown-toggle search-query">My Folders</div><span class="search-replace"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <a href="#" data-toggle="modal" data-target="#new-folder-modal" class="btn btn-sm btn-primary"><i class="ri-file-upload-line pr-3"></i>New Folder</a>
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
                                                        <!-- <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a> -->
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
    <?php include "includes/new-folder-modal.php"; ?>
    <?php include "includes/footer.php"; ?>

    <?php include "includes/script_resources.php"; ?>

</body>

</html>

<script>
    $('#folderForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'ajax/add_folder.php',
            type: 'POST',
            data : $(this).serialize(),
            cache: false,
            beforeSend: function() {
                $('#spinner').show();
                $('#result').hide();
                $('#btnText').hide();
            },
            success: function(data){
                if (!isNaN(data)) {
                    location.href = 'folder?id='+data;
                }
                else{
                    $('#result').html(data);
                    $('#result').fadeIn();
                    $('#spinner').hide();
                    $('#btnText').show();
                }
            }
        })
    })
</script>