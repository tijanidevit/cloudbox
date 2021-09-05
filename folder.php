<?php 
    session_start();    
    if (!isset($_SESSION['cloud_user'])) {
        header('location: ./login');
    }

    if (!isset($_GET['id'])) {
        header('location: ./folders');
    }

    include_once 'core/users.class.php';
    include_once 'core/user_folders.class.php';
    include_once 'core/core.function.php';
    $user_obj = new Users();
    $user_folder_obj = new User_folders();

    $user = $_SESSION['cloud_user'];
    $user_names = explode(' ', $user['fullname']);
    $user_id = $user['id'];
    $folder_id = $_GET['id'];

    $folder = $user_folder_obj->fetch_user_folder($folder_id);
    $folder_files = $user_folder_obj->fetch_user_folder_files($folder_id);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX | <?php echo $folder['folder_name'] ?> Folder</title>

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
                                            <div class="dropdown-toggle search-query"><?php echo $folder['folder_name'] ?></div><span class="search-replace"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <a href="#" data-folder-id="3" data-toggle="modal" data-target="#new-file-modal" id="init-new-file-modal" class="btn btn-sm btn-primary"><i class="ri-file-upload-line pr-3"></i>Upload File</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php if (count($folder_files) == 0): ?>
                        <div class="col-lg-12 mb-2 mt-0 col-md-12 col-sm-12">
                            You have not uploaded any files on this folder yet!
                        </div>
                    <?php else: ?>
                        <?php foreach ($folder_files as $file): ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body image-thumb">
                                        <div class="card-header mr-0">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ri-more-2-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>

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
                                                <li class="list-group-item"><b>File Size: </b><span id="file-size">20kb</span></li>
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

                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <?php include "includes/new-file-modal.php"; ?>
    <?php include "includes/file-modal.php"; ?>
    <?php include "includes/footer.php"; ?>

    <?php include "includes/script_resources.php"; ?>
    <script>
        $('#init-new-file-modal').click(function(e) {
            e.preventDefault();
            const folderId = $(this).data('folder-id');
            $('#nf-folder-id').val(folderId);
        })
    </script>


    <script>
    $('#registerForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'ajax/register.php',
            type: 'POST',
            data : new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function() {
                $('#spinner').show();
                $('#result').hide();
                $('#btnText').hide();
            },
            success: function(data){
                if (data == 1) {
                    location.href = 'register-pattern';
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
</body>

</html>