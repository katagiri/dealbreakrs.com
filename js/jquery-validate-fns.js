// JavaScript Document
$().ready(function() {
	// validate UPDATE PROFILE form on keyup and submit
	$("#sign-up-form").validate({
		rules: {
			first: {
				required: true,
			},
			last: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			gender: {
				required: true,
			}/*,
			current_password2: {
				required: true,
				equalTo: "#current_password"
			}*/
		},
		messages: {
			first: {
				required: "Please provide a last name.",
			},
			last: {
				required: "Please provide a first name.",
			},
			email: {
				required: "Please provide a valid-email.",
			},
			gender: {
				required: "Please speficy your gender.",
			}/*,
			current_password: {
				required: "Please provide a password",
			},
			current_password2: {
				required: "Please confirm your email",
				equalTo: "Your passwords do not match"
			}*/
		}
	});
});

// Jquery Phone Validator

jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
		phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Must be a valid phone number");