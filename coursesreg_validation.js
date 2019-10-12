// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='coursereg']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
     course: 'Course name is required',
     duration: 'Duration is required',
     fee: 'Fee is required',
      // ct_duration: 'required',
      // bt_btime: 'required',
      // bt_tid: 'required',
      // bt_status: 'required',
      // bt_cid: 'required'

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
      course: 'Course name is required',
      duration: 'Duration is required',
      fee: 'Fee is required',
      // bt_etime: 'required',
      // bt_btime: 'required',
      // bt_tid: 'required',
      // bt_status: 'required',
      // bt_cid: 'required'
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
