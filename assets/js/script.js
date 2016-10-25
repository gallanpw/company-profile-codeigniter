$( document ).ready(function() {    
    $(function() {
    $('a.lightbox').lightBox({
         'imageLoading' : "<?php echo base_url(); ?>assets/img/images/lightbox-ico-loading.gif",
         'imageBtnClose': "<?php echo base_url(); ?>assets/img/images/lightbox-btn-close.gif",
         'imageBtnPrev' : "<?php echo base_url(); ?>assets/img/images/lightbox-btn-prev.gif",
         'imageBtnNext' : "<?php echo base_url(); ?>assets/img/images/lightbox-btn-next.gif",
         'imageBlank'   : "<?php echo base_url(); ?>assets/img/images/lightbox-blank.gif"
      }); // Select all links with lightbox class
    });
});