jQuery(document).ready(function($){
    // Afbeeldingen uploaden
    $('.upload_image_button').click(function(e){
        e.preventDefault();

        var inputSelector = $(this).data('target');

        var mediaUploader = wp.media({
            title: 'Choose Image',
            button: { text: 'Choose Image' },
            multiple: false,
            library: { type: 'image' } // Alleen afbeeldingen
        });

        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $(inputSelector).val(attachment.url);
        });

        mediaUploader.open();
    });

    // PDF uploaden
    $('.upload_file_button').click(function(e){
        e.preventDefault();

        var inputSelector = $(this).data('target');

        var mediaUploader = wp.media({
            title: 'Select PDF',
            button: { text: 'Select PDF' },
            multiple: false,
            library: { type: 'application/pdf' } // Alleen PDF’s
        });

        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $(inputSelector).val(attachment.url);
        });

        mediaUploader.open();
    });
});
