// JavaScript Document

$(document).ready(function() {
	jQuery.validator.addMethod("nameonly", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+$/);
},"Only alphabets Allowed.");

jQuery.validator.addMethod("email", function(value, element) {
    return this.optional(element) || value == value.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
},"Please enter valid email.");

jQuery.validator.addMethod("mobile_no", function(value, element) {
    return this.optional(element) || value == value.match(/^\d{10}$/);
},"Please enter valid mobile number.");

jQuery.validator.setDefaults({
    errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
    }
});

	$("#reg").validate({
		rules:{
			f_name:{
				required:true,
				nameonly:true				
			},
			l_name:{
				required:true,
				nameonly:true				
			},
			email_id:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:6,
				maxlength:15
			},
			contact_no:{
				required:true,
				mobile_no:true
			},
			address:{
				required:true
			},
			
		},
		messages:{
			f_name:{
				required:'Please enter your name'
			},
			l_name:{
				required:'Please enter your name'
			},
			email_id:{
				required:'Please enter your email'
			},
			password:{
				required:'Please enter password',
				minlength:'Password minimum 6 characters',
				maxlength:'Password maximum 15 characters'
			},
			
			contact_no:{
				required:'Please enter your mobile number'
			},
			address:{
				required:'Please enter your address'
			}
		}
		});
    
});
