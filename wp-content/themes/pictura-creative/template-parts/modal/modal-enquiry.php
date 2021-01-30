<!--- MODAL --->

<div class="enquiry-modal"> <span class="modal-close"> <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-white.svg" ?></span>
    <div class="enquiry-modal__inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="enquiry-modal__content">
                        <h1 class="text-white enq_desc"><?php echo get_field("enquiry_popup_title", "option"); ?></h1>
                        <p class="text-white"><?php echo get_field("enquiry_popup_description", "option"); ?></p>
                    </div>
                </div>
                <?php $e_formId = get_field("enquiry_form", "option");
						$form_id= "1";
				?>
                <div class="col-lg-7 col-sm-12">
                    <div class="form-wrap"> <?php echo do_shortcode('[formidable id='.$form_id.']'); 
						//gravity_form( 1 );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END MODAL -->
<!-- END MODAL -->
