<!-- Backend Bundle JavaScript -->
<script src="./assets/js/backend-bundle.min.js"></script>

<!-- Chart Custom JavaScript -->
<script src="./assets/js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script src="./assets/js/chart-custom.js"></script>

<!--PDF-->
<script src="./assets/vendor/doc-viewer/include/pdf/pdf.js"></script>
<!--Docs-->
<script src="./assets/vendor/doc-viewer/include/docx/jszip-utils.js"></script>
<script src="./assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js"></script>
<!--PPTX-->
<script src="./assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js"></script>
<script src="./assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js"></script>
<script src="./assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js"></script>
<script src="./assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js"></script>
<script src="./assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js"></script>
<!--All Spreadsheet -->
<script src="./assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js"></script>
<script src="./assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js"></script>
<!--Image viewer-->
<script src="./assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
<!--officeToHtml-->
<script src="./assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js"></script>
<script src="./assets/js/doc-viewer.js"></script>
<!-- app JavaScript -->
<script src="./assets/js/app.js"></script>

<script>
    $(function() {
        $('.load-file-modal').each(function() {
            $(this).click(function(e) {
                e.preventDefault();
                const fileId = $(this).data('file-id');
                if (fileId) {
                    // make ajax request here 
                    // $.ajax({
                    //     url: '',
                    //     dataType: 'json',
                    //     type: 'get',
                    //     success: function(response) {
                    //         if (response.success == true && response.status == "ok") {
                    //             const fileData = response.data;
                    //             $('#fileModalTitle').text(fileData.title);
                    //             $('#file-filename').text(fileData.title);
                    //             $('#file-size').text(fileData.size);
                    //             $('#file-date-uploaded').text(fileData.date_inserted);
                    //             $('#file-visibility').text(fileData.visibility);
                    //             $('#file-url').val(fileData.url);
                    //             $('#file-download-link').attr('href', fileData.url).attr('download', fileData.title);
                    //         }
                    //     },
                    //     error: function(error) {
                    //         alert("Opps! Unable to load file at the moment. Please try again later.")
                    //     }
                    // });
                }
            });
        });
    });
</script>