// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='reg']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      bt_name: 'batch name is required',
      bt_stno: 'student no is required',
      bt_stime: 'start time is required',
      bt_etime: 'end time is required',
      bt_btime: 'required',
      bt_tid: 'required',
      bt_status: 'status required',
      bt_cid: 'required'

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
      bt_name: 'batch name is required',
      bt_stno: 'student no is required',
      bt_stime: 'start time is required',
      bt_etime: 'end time is required'
      bt_btime: 'required',
      bt_tid: 'required',
      bt_status: ' status required',
      bt_cid: 'required'
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
