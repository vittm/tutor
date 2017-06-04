/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	config.filebrowserBrowseUrl = '/bbboom/public/ckeditor/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/bbboom/public/ckeditor/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/bbboom/public/ckeditor/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '/bbboom/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/bbboom/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/bbboom/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
};

CKEDITOR.replace( 'editor1',
    {
        on :
        {
            instanceReady : function( ev )
            {
                this.dataProcessor.writer.setRules( 'p',
                    {
                        indent : false,
                        breakBeforeOpen : true,
                        breakAfterOpen : false,
                        breakBeforeClose : false,
                        breakAfterClose : true
                    });
            }
        }
    });

