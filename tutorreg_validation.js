// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='tutorreg']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      val-username: 'required',
      val-email: 'required',
      val-password: 'required',
      val-number: 'required',
      val-pro: 'required',
      val-terms:'required',
      val-proof: 'required',
      val-phoneus: 'required',
      val-quali: 'required',
      val-exp: 'required',
      val-range: 'required',

      // email: {
      //   required: true,
      //   // Specify that email should be validated
      //   // by the built-in "email" rule
      //   email: true
      // },
      // password: {
      //   required: true,
      //   minlength: 5
      // }
    },
    // Specify validation error messages
    messages: {
     val-username: 'required',
      val-email: 'required',
      val-password: 'required',
      val-number: 'required',
      val-pro: 'required',
     val-terms:'required',
      val-proof: 'required',
     val-phoneus: 'required',
     val-quali: 'required',
     val-exp: 'required',
     val-range: 'required',
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
