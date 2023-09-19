/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  //////////////// CKEditor settings
  Drupal.behaviors.stackCkeditor = {
    attach: function (context, settings) {
      // Alter CKEditor config to allow empty tags
      if (typeof CKEDITOR !== "undefined") {
        CKEDITOR.dtd.$removeEmpty['i'] = false;
        CKEDITOR.dtd.$removeEmpty['span'] = false;
        console.log('Ckeditor log', CKEDITOR.dtd);
      }
    }
  };

  //////////////// Disable input on Layout Paragraph Builder
  Drupal.behaviors.stackLPB = {
    attach: function (context, settings) {      
      $('.js-lpb-component .block-contact textarea, .js-lpb-component .block-contact input, .js-lpb-component .block-simplenews input, .js-lpb-component .block-user input').each(function() {
        var thisElement = $(this);
        thisElement.attr('disabled', 'disabled');
    });
    }
  };

})(jQuery, Drupal);
