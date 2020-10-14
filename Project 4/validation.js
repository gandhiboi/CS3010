$(document).ready(function() {
    console.log('Testing');
    $("form[name='regForm']").validate({
        rules: {
            username: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 50,
                uppercaseLetter: true,
                lowercaseLetter: true,
                digit: true,
                specialCharacter: true
            },
            verifyPassword: {
                required: true,
                minlength: 8,
                maxlength: 50,
                equalTo: "#password",
                uppercaseLetter: true,
                lowercaseLetter: true,
                digit: true,
                specialCharacter: true,
            },
            fname: {
                required: true,
                maxlength: 50
            },
            lname: {
                required: true,
                maxlength: 50
            },
            address1: {
                required: true,
                maxlength: 100
            },
            address2: {
                required: false,
                maxlength: 100
            },
            city: {
                required: true,
                maxlength: 50
            },
            state: {
              required: true,
              maxlength: 52
            },
            zipcode: {
                required: true,
                maxlength: 10,
                minlength: 5,
            },
            phonenum: {
                required: true,
                maxlength: 12
            },
            email: {
                required: true,
                emailCheck: true
            },
            gender: {
                required: true,
                maxlength: 50
            },
            maritalstatus: {
                required: true,
                maxlength: 50
            },
            dob: {
                required: true
            }
        },
        messages: {
            username: {
                required: "*Username required"
            },
            password: {
                required: "*Password required"
            },
            verifyPassword: {
                required: "*Verification required",
                equalTo: "Passwords do not match"
            },
            fname: {
                required: "*First name required"
            },
            lname: {
                required: "<br/>*Last name required"
            },
            address1: {
                required: "*Address required"
            },
            city: {
                required: "<br/>*City required"
            },
            state: {
                required: "*State required"
            },
            zipcode: {
                required: "*Zipcode required"
            },
            phonenum: {
                required: "*Phone number required"
            },
            email: {
                required: "*Email required"
            },
            gender: {
                required: "*Gender required <br/>"
            },
            maritalstatus: {
                required: "*Marital status required<br/>"
            },
            dob: {
                required: "<br/>*Date of birth required",
            }
        },

        errorPlacement: function(error, element) {
            if (element.attr("type") == "radio") {
                error.insertBefore(element);
            } else {
                error.insertAfter(element);
            }
        },

    });
    $('#phonenum').mask('000-000-0000');
    $('#zipcode').mask('00000-0000')
});

$.validator.addMethod('uppercaseLetter', function(value, element) {
        return this.optional(element) || (value.match(/[A-Z]/));
    },
    'Must contain at least one uppercase letter');

$.validator.addMethod('lowercaseLetter', function(value, element) {
        return this.optional(element) || (value.match(/[a-z]/));
    },
    'Must contain at least one lowercase letter');

$.validator.addMethod('digit', function(value, element) {
        return this.optional(element) || (value.match(/[0-9]/));
    },
    'Must contain at least one digit');

$.validator.addMethod('specialCharacter', function(value, element) {
        return this.optional(element) || (value.match(/[^a-zA-Z0-9]/));
    },
    'Must contain at least one special character');

$.validator.addMethod('emailCheck', function(value, element) {
        return this.optional(element) || (value.match(/^\S+\@\S+\.\S+$/));
    },
    'Format x@x.x');