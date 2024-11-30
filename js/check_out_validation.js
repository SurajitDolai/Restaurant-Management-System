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

	$("#chek_out").validate({
		rules:{
			contact_no:{
				required:true,
				mobile_no:true
			},
			area_id:{
				required:true
			},
			sub_id:{
				required:true
			},
			delivery_address:{
				required:true
			}
		},
		messages:{
			contact_no:{
				required:'Please enter your mobile number.'
			},
			area_id:{
				required:'Please select an area.'
			},
			sub_id:{
				required:'Please select your location'
			},
			delivery_address:{
				required:'Please enter delivery details'
			}
		}
		});
    
});
