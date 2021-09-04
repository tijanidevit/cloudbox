<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX | Responsive Bootstrap 4 Admin Dashboard Template</title>

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
                                            <div class="dropdown-toggle search-query">Folder Name</div><span class="search-replace"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <a href="#" data-folder-id="3" data-toggle="modal" data-target="#new-file-modal" id="init-new-file-modal" class="btn btn-sm btn-primary"><i class="ri-file-upload-line pr-3"></i>Upload File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height">
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