jQuery(document).ready(function($) {

    $('.gsa_header_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_header_logo_img').attr('src', attachment.url);

            $('.gsa_header_logo_img_url').val(attachment.url);

        })

        .open();

    });  



    $('.gsa_sticky_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_sticky_logo_img').attr('src', attachment.url);

            $('.gsa_sticky_logo_img_url').val(attachment.url);

        })

        .open();

    }); 



    $('.gsa_favicon_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_favicon_img').attr('src', attachment.url);

            $('.gsa_favicon_img_url').val(attachment.url);

        })

        .open();

    }); 



    $('.gsa_footer_logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_footer_logo_img').attr('src', attachment.url);

            $('.gsa_footer_logo_img_url').val(attachment.url);

        })

        .open();

    });
    
    
        $('.gsa_background_pattern_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_background_pattern_img').attr('src', attachment.url);

            $('.gsa_background_pattern_img_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_main_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_main_img').attr('src', attachment.url);

            $('.gsa_main_img_url').val(attachment.url);

        })

        .open();

    }); 

    $('.gsa_vision_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_vision_img').attr('src', attachment.url);

            $('.gsa_vision_img_url').val(attachment.url);

        })

        .open();

    }); 



    $('.gsa_vision_year_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_vision_year_img').attr('src', attachment.url);

            $('.gsa_vision_year_img_url').val(attachment.url);

        })

        .open();

    });

    $('.gsa_certificate_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_certificate_img').attr('src', attachment.url);

            $('.gsa_certificate_img_url').val(attachment.url);

        })

        .open();

    });

    

    $('.gsa_video_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_video_img').attr('src', attachment.url);

            $('.gsa_video_img_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_video_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_video').attr('src', attachment.url);

            $('.gsa_video_url').val(attachment.url);

        })

        .open();

    });

    

    $('.gsa_home_seventh_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_seventh_img').attr('src', attachment.url);

            $('.gsa_home_seventh_img_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_home_element_one_img_upload').click(function(e) {

         e.preventDefault();

         var custom_uploader = wp.media({

             title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

             multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_element_one_img').attr('src', attachment.url);

            $('.gsa_home_element_one_img_url').val(attachment.url);

        })

        .open();

     });

 $('.gsa_home_element_two_img_upload').click(function(e) {

         e.preventDefault();

         var custom_uploader = wp.media({

             title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

             multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_element_two_img').attr('src', attachment.url);

            $('.gsa_home_element_two_img_url').val(attachment.url);

        })

        .open();

     });



    $('.gsa_home_ninth_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_ninth_img').attr('src', attachment.url);

            $('.gsa_home_ninth_img_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_home_tenth_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_tenth_img').attr('src', attachment.url);

            $('.gsa_home_tenth_img_url').val(attachment.url);

        })

        .open();

    });
    /*Home Page Arabic Version*/
        $('.gsa_main_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_main_img_ar').attr('src', attachment.url);

            $('.gsa_main_img_ar_url').val(attachment.url);

        })

        .open();

    }); 

    $('.gsa_vision_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_vision_img_ar').attr('src', attachment.url);

            $('.gsa_vision_img_ar_url').val(attachment.url);

        })

        .open();

    }); 



    $('.gsa_vision_year_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_vision_year_img_ar').attr('src', attachment.url);

            $('.gsa_vision_year_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.gsa_certificate_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_certificate_img_ar').attr('src', attachment.url);

            $('.gsa_certificate_img_ar_url').val(attachment.url);

        })

        .open();

    });

    

    $('.gsa_video_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_video_img_ar').attr('src', attachment.url);

            $('.gsa_video_img_ar_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_video_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_video_ar').attr('src', attachment.url);

            $('.gsa_video_ar_url').val(attachment.url);

        })

        .open();

    });

    

    $('.gsa_home_seventh_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_seventh_img_ar').attr('src', attachment.url);

            $('.gsa_home_seventh_img_ar_url').val(attachment.url);

        })

        .open();

    });



    $('.gsa_home_element_one_img_ar_upload').click(function(e) {

         e.preventDefault();

         var custom_uploader = wp.media({

             title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

             multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_element_one_img_ar').attr('src', attachment.url);

            $('.gsa_home_element_one_img_ar_url').val(attachment.url);

        })

        .open();

     });

 $('.gsa_home_element_two_img_ar_upload').click(function(e) {

         e.preventDefault();

         var custom_uploader = wp.media({

             title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

             multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_element_two_img_ar').attr('src', attachment.url);

            $('.gsa_home_element_two_img_ar_url').val(attachment.url);

        })

        .open();

     });



    $('.gsa_home_ninth_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_ninth_img_ar').attr('src', attachment.url);

            $('.gsa_home_ninth_img_ar_url').val(attachment.url);

        })

        .open();

    });

     $('.gsa_home_ninth_mobile_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_ninth_mobile_img_ar').attr('src', attachment.url);

            $('.gsa_home_ninth_mobile_img_ar_url').val(attachment.url);

        })

        .open();

    });




    $('.gsa_home_tenth_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_tenth_img_ar').attr('src', attachment.url);

            $('.gsa_home_tenth_img_ar_url').val(attachment.url);

        })

        .open();

    });

    /*End Home Page Arabic Version*/
    $('.about_first_section_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_first_section_img').attr('src', attachment.url);

            $('.about_first_section_img_url').val(attachment.url);

        })

        .open();

    });

    $('.about_third_section_img_one_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_one').attr('src', attachment.url);

            $('.about_third_section_img_one_url').val(attachment.url);

        })

        .open();

    });

    $('.about_third_section_img_two_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_two').attr('src', attachment.url);

            $('.about_third_section_img_two_url').val(attachment.url);

        })

        .open();

    });
    
    $('.about_third_section_img_third_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_third').attr('src', attachment.url);

            $('.about_third_section_img_third_url').val(attachment.url);

        })

        .open();

    });

    $('.about_video_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_video_img').attr('src', attachment.url);

            $('.about_video_img_url').val(attachment.url);

        })

        .open();

    });

    $('.about_video_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_video').attr('src', attachment.url);

            $('.about_video_url').val(attachment.url);

        })

        .open();

    });

    $('.about_vision_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_vision_img').attr('src', attachment.url);

            $('.about_vision_img_url').val(attachment.url);

        })

        .open();

    });

    $('.about_vision_year_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_vision_year_img').attr('src', attachment.url);

            $('.about_vision_year_img_url').val(attachment.url);

        })

        .open();

    });

    $('.about_sixth_image_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_sixth_image').attr('src', attachment.url);

            $('.about_sixth_image_url').val(attachment.url);

        })

        .open();

    });

    /*About Page Arabic Version*/
    $('.about_first_section_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_first_section_img_ar').attr('src', attachment.url);

            $('.about_first_section_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_third_section_img_one_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_one_ar').attr('src', attachment.url);

            $('.about_third_section_img_one_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_third_section_img_two_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_two_ar').attr('src', attachment.url);

            $('.about_third_section_img_two_ar_url').val(attachment.url);

        })

        .open();

    });
    
    $('.about_third_section_img_third_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_third_section_img_third_ar').attr('src', attachment.url);

            $('.about_third_section_img_third_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_video_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_video_img_ar').attr('src', attachment.url);

            $('.about_video_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_video_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_video_ar').attr('src', attachment.url);

            $('.about_video_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_vision_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_vision_img_ar').attr('src', attachment.url);

            $('.about_vision_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_vision_year_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_vision_year_img_ar').attr('src', attachment.url);

            $('.about_vision_year_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.about_sixth_image_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.about_sixth_image_ar').attr('src', attachment.url);

            $('.about_sixth_image_ar_url').val(attachment.url);

        })

        .open();

    });

        $('.third_about_first_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_first_block_img_ar').attr('src', attachment.url);

            $('.third_about_first_block_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.third_about_second_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_second_block_img_ar').attr('src', attachment.url);

            $('.third_about_second_block_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.third_about_third_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_third_block_img_ar').attr('src', attachment.url);

            $('.third_about_third_block_img_ar_url').val(attachment.url);

        })

        .open();

    });
    /*End About Page Arabic Version*/

    $('.programs_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_first_block_img').attr('src', attachment.url);

            $('.programs_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_second_block_img').attr('src', attachment.url);

            $('.programs_second_block_img_url').val(attachment.url);

        })

        .open();

    });


    $('.second_programs_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_first_block_img').attr('src', attachment.url);

            $('.second_programs_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.second_programs_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_second_block_img').attr('src', attachment.url);

            $('.second_programs_second_block_img_url').val(attachment.url);

        })

        .open();

    });
    
    
    $('.second_programs_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_third_block_img').attr('src', attachment.url);

            $('.second_programs_third_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_certificate_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_certificate_img').attr('src', attachment.url);

            $('.programs_certificate_img_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_fifth_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_fifth_img').attr('src', attachment.url);

            $('.programs_fifth_img_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_sixth_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_sixth_img').attr('src', attachment.url);

            $('.programs_sixth_img_url').val(attachment.url);

        })

        .open();

    });
	
	$('.programs_sixth_mobile_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_sixth_mobile_img').attr('src', attachment.url);

            $('.programs_sixth_mobile_img_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_seventh_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_seventh_img').attr('src', attachment.url);

            $('.programs_seventh_img_url').val(attachment.url);

        })

        .open();

    });

    /*Programs Page Arabic Version*/
        $('.programs_first_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_first_block_img_ar').attr('src', attachment.url);

            $('.programs_first_block_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_second_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_second_block_img_ar').attr('src', attachment.url);

            $('.programs_second_block_img_ar_url').val(attachment.url);

        })

        .open();

    });


    $('.second_programs_first_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_first_block_img_ar').attr('src', attachment.url);

            $('.second_programs_first_block_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.second_programs_second_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_second_block_img_ar').attr('src', attachment.url);

            $('.second_programs_second_block_img_ar_url').val(attachment.url);

        })

        .open();

    });
    
    
    $('.second_programs_third_block_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_programs_third_block_img_ar').attr('src', attachment.url);

            $('.second_programs_third_block_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_certificate_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_certificate_img_ar').attr('src', attachment.url);

            $('.programs_certificate_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_fifth_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_fifth_img_ar').attr('src', attachment.url);

            $('.programs_fifth_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_sixth_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_sixth_img_ar').attr('src', attachment.url);

            $('.programs_sixth_img_ar_url').val(attachment.url);

        })

        .open();

    });
    
    $('.programs_sixth_mobile_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_sixth_mobile_img_ar').attr('src', attachment.url);

            $('.programs_sixth_mobile_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.programs_seventh_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.programs_seventh_img_ar').attr('src', attachment.url);

            $('.programs_seventh_img_ar_url').val(attachment.url);

        })

        .open();

    });
    /*End Programs Page Arabic Version*/

    $('.faculty_second_section_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.faculty_second_section_img').attr('src', attachment.url);

            $('.faculty_second_section_img_url').val(attachment.url);

        })

        .open();

    });

    $('.diploma_fifth_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.diploma_fifth_img').attr('src', attachment.url);

            $('.diploma_fifth_img_url').val(attachment.url);

        })

        .open();

    });
    
    $('.second_smart_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_smart_first_block_img').attr('src', attachment.url);

            $('.second_smart_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.second_smart_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_smart_second_block_img').attr('src', attachment.url);

            $('.second_smart_second_block_img_url').val(attachment.url);

        })

        .open();

    });
    
    
    $('.second_smart_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_smart_third_block_img').attr('src', attachment.url);

            $('.second_smart_third_block_img_url').val(attachment.url);

        })

        .open();

    });

        $('.second_courses_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_courses_third_block_img').attr('src', attachment.url);

            $('.second_courses_third_block_img_url').val(attachment.url);

        })

        .open();

    });
    
    $('.third_smart_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_smart_first_block_img').attr('src', attachment.url);

            $('.third_smart_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_smart_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_smart_second_block_img').attr('src', attachment.url);

            $('.third_smart_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_smart_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_smart_third_block_img').attr('src', attachment.url);

            $('.third_smart_third_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_smart_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_smart_first_block_img').attr('src', attachment.url);

            $('.fourth_smart_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_smart_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_smart_second_block_img').attr('src', attachment.url);

            $('.fourth_smart_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_smart_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_smart_third_block_img').attr('src', attachment.url);

            $('.fourth_smart_third_block_img_url').val(attachment.url);

        })

        .open();

    });

    /*------------------*/

    $('.third_about_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_first_block_img').attr('src', attachment.url);

            $('.third_about_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_about_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_second_block_img').attr('src', attachment.url);

            $('.third_about_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_about_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_about_third_block_img').attr('src', attachment.url);

            $('.third_about_third_block_img_url').val(attachment.url);

        })

        .open();

    });
    
    $('.fourth_sec_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_sec_img').attr('src', attachment.url);

            $('.fourth_sec_img_url').val(attachment.url);

        })

        .open();

    });

        $('.second_courses_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_courses_first_block_img').attr('src', attachment.url);

            $('.second_courses_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.second_courses_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.second_courses_second_block_img').attr('src', attachment.url);

            $('.second_courses_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_courses_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_courses_first_block_img').attr('src', attachment.url);

            $('.third_courses_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_courses_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_courses_second_block_img').attr('src', attachment.url);

            $('.third_courses_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.third_courses_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.third_courses_third_block_img').attr('src', attachment.url);

            $('.third_courses_third_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_courses_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_courses_first_block_img').attr('src', attachment.url);

            $('.fourth_courses_first_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_courses_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_courses_second_block_img').attr('src', attachment.url);

            $('.fourth_courses_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.fourth_courses_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.fourth_courses_third_block_img').attr('src', attachment.url);

            $('.fourth_courses_third_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.first_courses_first_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.first_courses_first_block_img').attr('src', attachment.url);

            $('.first_courses_first_block_img_url').val(attachment.url);

        })

        .open();

    });
    

    $('.first_courses_second_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.first_courses_second_block_img').attr('src', attachment.url);

            $('.first_courses_second_block_img_url').val(attachment.url);

        })

        .open();

    });

    $('.first_courses_third_block_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.first_courses_third_block_img').attr('src', attachment.url);

            $('.first_courses_third_block_img_url').val(attachment.url);

        })

        .open();

    });
	
	
    $('.partner_form_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.partner_form_img').attr('src', attachment.url);

            $('.partner_form_img_url').val(attachment.url);

        })

        .open();

    });
	
	    $('.purchase_form_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.purchase_form_img').attr('src', attachment.url);

            $('.purchase_form_img_url').val(attachment.url);

        })

        .open();

    });
	
    $('.purchase_first_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.purchase_first_img').attr('src', attachment.url);

            $('.purchase_first_img_url').val(attachment.url);

        })

        .open();

    });
	
	$('.purchase_second_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.purchase_second_img').attr('src', attachment.url);

            $('.purchase_second_img_url').val(attachment.url);

        })

        .open();

    });
	
	
	    $('.purchase_third_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.purchase_third_img').attr('src', attachment.url);

            $('.purchase_third_img_url').val(attachment.url);

        })

        .open();

    });
	
    $('.thankyou_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.thankyou_img').attr('src', attachment.url);

            $('.thankyou_img_url').val(attachment.url);

        })

        .open();

    });
	$('.page_mobile_featured_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.page_mobile_featured_img').attr('src', attachment.url);

            $('.page_mobile_featured_img_url').val(attachment.url);

        })

        .open();

    });  
	
	$('.gsa_home_ninth_mobile_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_home_ninth_mobile_img').attr('src', attachment.url);

            $('.gsa_home_ninth_mobile_img_url').val(attachment.url);

        })

        .open();

    });  
	
    $('.gsa_faculty_element_one_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_faculty_element_one_img').attr('src', attachment.url);

            $('.gsa_faculty_element_one_img_url').val(attachment.url);

        })

        .open();

    });  
	
    $('.gsa_faculty_element_two_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.gsa_faculty_element_two_img').attr('src', attachment.url);

            $('.gsa_faculty_element_two_img_url').val(attachment.url);

        })

        .open();

    });
	
    
});

   