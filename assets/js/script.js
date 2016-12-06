/**
 * Created by root on 05/12/16.
 */
'use strict';

(function ($) {

    var formTest = $('#form');
    var uploadMethod = formTest.fileupload({
        dataType: 'json',
        type: 'POST',
        url: 'http://localhost/Services/FileUploadService/fileUploaded.php',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|png|doc|pdf)$/i,
        maxFileSize: 2000000,
        singleFileUploads: false,
        autoUpload: false,
        messages: {
            acceptFileTypes: 'this file type is not supported',
            maxFileSize: 'you reached the max file size'
        },
        change: function (e, fileInput) {
            console.log('add file... ');
            console.log(fileInput);
            var isNotValid = fileInput.files[0].error;
            if (isNotValid) {
                return false;
            }
            uploadMethod.files.push(fileInput.fileInput[0]);
            uploadMethod.filenames.push(fileInput.files[0].name);
        },
        fail: function () {
            console.log(123);
        }

        /*ON PROCESS UPLOAD CHECK VALIDATION*/
    }).bind('fileuploadprocessalways', function (e, data) {
        console.log('validate input...');

        var currentFileJquery = $("#" + $(data.fileInput[0]).attr('id')).parents('.form-row');

        var currentFile = data.files[0];

        if (currentFile && currentFile.error) {
            currentFileJquery.find('label').addClass('error').text(currentFile.error);
            return false;
        }
        currentFileJquery.find('label').removeClass('error').text(currentFile.name);

        /*ON FINISH DOWNLOAD*/
    }).bind('fileuploaddone', function (e, data) {
        console.log('done upload file');
        console.log(data + e);
    });

    uploadMethod.files = [];
    uploadMethod.filenames = [];

    $('[type="submit"]').on('click', function (e) {
        var elem = $(e.preventDefault());
        var settings = {
            url:'/var/www/html/Services/FileUploadService/fileUploadService.php',
            method:"POST",
            data:{fileUpload:uploadMethod},
            dataType:'json',
            success:function (data) {
                console.log(data);
            }


        };
        $.ajax(settings)
    })


})(jQuery);