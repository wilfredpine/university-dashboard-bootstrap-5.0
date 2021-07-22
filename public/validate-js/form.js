$().ready(function(){
    
    // required – Makes the element required.
    // remote – Requests a resource to check the element for validity.
    // minlength – Makes the element require a given minimum length.
    // maxlength – Makes the element require a given maximum length.
    // rangelength – Makes the element require a given value range.
    // min – Makes the element require a given minimum.
    // max – Makes the element require a given maximum.
    // range – Makes the element require a given value range.
    // step – Makes the element require a given step.
    // email – Makes the element require a valid email
    // url – Makes the element require a valid url
    // date – Makes the element require a date.
    // dateISO – Makes the element require an ISO date.
    // number – Makes the element require a decimal number.
    // digits – Makes the element require digits only.
    // equalTo – Requires the element to be the same as another one
    //https://jqueryvalidation.org/documentation/

    /* ---------------------- Custom Methods -------------------------------------- */

    // alpha
    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Input must contain only letters.");

    // alpha_space
    jQuery.validator.addMethod("alpha_space", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Input must contain only letters and spaces.");

    // alpha_numeric
    jQuery.validator.addMethod("alpha_numeric", function(value, element) {
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Input must contain only letters, or numbers.");

    // alpha_numeric_space
    jQuery.validator.addMethod("alpha_numeric_space", function(value, element) {
        return this.optional(element) || /^[a-z0-9\s]+$/i.test(value);
    }, "Input must contain only letters, numbers, or spaces.");
    
    // alpha_numeric_dash_space
    jQuery.validator.addMethod("alpha_numeric_dash_space", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
    }, "Input must contain only letters, numbers, spaces, or dashes.");

    // alpha_numeric_dash
    jQuery.validator.addMethod("alpha_numeric_dash", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    }, "Input must contain only letters, numbers, or dashes.");

    // alpha_numeric_underscore
    jQuery.validator.addMethod("alpha_numeric_underscore", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Input must contain only letters, numbers, or underscore.");

    /* ---------------------- End Custom Methods -------------------------------------- */

    // test
    $("#test-validate").validate({
        rules: {
            testinput: {
                required : true,
                alpha_numeric_space: true
            }
        },
        messages: {
            testinput: {
                required : "Required.",
                alpha_numeric_space : "Program needs a valid value."
            }
        }
    });
    /* ---------------------- End Test -------------------------------------- */

    /* Signin */
    $("#sigin-validate").validate({
        rules: {
            username: {
                required : true,
                maxlength : 16
            },
            password: {
                required : true,
                maxlength : 25
            }
        },
        messages: {
            username: {
                required : "Please enter a username",
                maxlength : "plase input less than 17 characters"
            },
            password: {
                required : "Please enter a password",
                maxlength : "plase input less than 26 characters"
            }
        }
    });

    /* Add Student */
    $("#student-validate").validate({
        rules: {
            PROGID: {
                required : true,
                minlength : 1,
                maxlength : 1,
                digits: true
            },
            PROGID2: {
                required : true,
                minlength : 1,
                maxlength : 1,
                digits: true
            },
            ELEMSCHOOL: {
                required : true,
                maxlength : 255,
                alpha_numeric_space : true
            },
            ELEMSY: {
                required : true,
                maxlength : 9,
                alpha_numeric_dash : true
            },
            HSSCHOOL: {
                required : true,
                maxlength : 255,
                alpha_numeric_space : true
            },
            HSSY: {
                required : true,
                maxlength : 9,
                alpha_numeric_dash : true
            },
            COLLEGE: {
                maxlength : 255,
                alpha_numeric_space : true
            },
            COLLEGESY: {
                maxlength : 9,
                alpha_numeric_dash : true
            },
            STUDNAM3: {
                required : true,
                maxlength : 50,
                alpha_space : true
            },
            STUDNAM2: {
                maxlength : 30,
                alpha_space : true
            },
            STUDNAM1: {
                required : true,
                maxlength : 30,
                alpha_space : true
            },
            STUDNAM4: {
                maxlength : 3,
                alpha : true
            },
            GENDER: {
                required : true,
                maxlength : 6,
                alpha : true
            },
            STUDCIVILSTAT: {
                required : true,
                maxlength : 12,
                alpha : true
            },
            STUDBDAY: {
                required : true,
                maxlength : 10
            },
            BRTHHOUSENO: {
                maxlength : 20,
                alpha_numeric_space : true
            },
            BRTHSTREET: {
                maxlength : 50,
                alpha_numeric_space : true
            },
            BRTHBRGY: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            BRTHTOWN: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            BRTHZIPCODE: {
                required : true,
                maxlength : 4,
                digits : true
            },
            BRTHPROVINCE: {
                required : true,
                maxlength : 150,
                alpha_numeric_space : true
            },
            BRTHCOUNTRY: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            ADDHOUSENO: {
                maxlength : 20,
                alpha_numeric_space : true
            },
            ADDSTREET: {
                maxlength : 50,
                alpha_numeric_space : true
            },
            ADDBRGY: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            ADDTOWN: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            ADDZIPCODE: {
                required : true,
                maxlength : 4,
                digits : true
            },
            ADDPROVINCE: {
                required : true,
                maxlength : 150,
                alpha_numeric_space : true
            },
            ADDCOUNTRY: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            PHONE1: {
                required : true,
                minlength : 10,
                maxlength : 11,
                digits : true
            },
            EMAIL1: {
                required : true,
                maxlength : 100,
                email : true
            },
            RELIGION: {
                required : true,
                maxlength : 150,
                alpha_numeric_space : true
            },
            FATHNAM3: {
                required : true,
                maxlength : 50,
                alpha_space : true
            },
            FATHNAM2: {
                maxlength : 30,
                alpha_space : true
            },
            FATHNAM1: {
                required : true,
                maxlength : 30,
                alpha_space : true
            },
            FATHNAM4: {
                maxlength : 3,
                alpha : true
            },
            FATHOCCUP: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            MOTHNAM3: {
                required : true,
                maxlength : 50,
                alpha_space : true
            },
            MOTHNAM2: {
                maxlength : 30,
                alpha_space : true
            },
            MOTHNAM1: {
                required : true,
                maxlength : 30,
                alpha_space : true
            },
            MOTHOCCUP: {
                required : true,
                maxlength : 80,
                alpha_numeric_space : true
            },
            ANNUALFAMINCOME: {
                required : true,
                maxlength : 10,
                number : true
            },
            GUARDIAN: {
                required : true,
                maxlength : 100,
                alpha_space : true
            },
            PHONE2: {
                required : true,
                maxlength : 11,
                minlength : 10,
                digits : true
            },
            RELATIONSHIP: {
                required : true,
                maxlength : 50,
                alpha_numeric_space : true
            },
            TRIBE: {
                maxlength : 50,
                alpha_numeric_dash_space : true
            },
            DISABILITY: {
                maxlength : 50,
                alpha_numeric_space : true
            },
            LGBT: {
                maxlength : 12,
                alpha : true
            },
            SCHOLARSHIP1: {
                maxlength : 150,
                alpha_numeric_space : true
            },
            SCHOLARSHIP2: {
                maxlength : 150,
                alpha_numeric_space : true
            }
        },
        messages: {
            PROGID: {
                required : "Required.",
                minlength : "Program needs a valid value.",
                maxlength : "Program needs a valid value.",
                digits : "Program needs a valid value."
            },
            PROGID2: {
                required : "Required.",
                minlength : "Program needs a valid value.",
                maxlength : "Program needs a valid value.",
                digits : "Program needs a valid value."
            },
            ELEMSCHOOL: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ELEMSY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_dash : "Please input letters, numbers, and dash only."
            },
            HSSCHOOL: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            HSSY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_dash : "Please input letters, numbers, and dash only."
            },
            COLLEGE: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            COLLEGESY: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_dash : "Please input letters, numbers, and dash only."
            },
            STUDNAM3: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            STUDNAM2: {
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            STUDNAM1: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            STUDNAM4: {
                maxlength : "Please input a valid Name Extension.",
                alpha : "Please input letters only."
            },
            GENDER: {
                required : "This field is required.",
                maxlength : "Please input a valid value.",
                alpha : "Please input letters only."
            },
            STUDCIVILSTAT: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha : "Please input letters only."
            },
            STUDBDAY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
            },
            BRTHHOUSENO: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            BRTHSTREET: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            BRTHBRGY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            BRTHTOWN: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            BRTHZIPCODE: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                digits : "Please input numbers only."
            },
            BRTHPROVINCE: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            BRTHCOUNTRY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDHOUSENO: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDSTREET: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDBRGY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDTOWN: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDZIPCODE: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                digits : "Please input numbers only."
            },
            ADDPROVINCE: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ADDCOUNTRY: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            PHONE1: {
                required : "This field is required.",
                minlength : "Please enter atleast 10 digits",
                maxlength : "You have reach the maximum input value.",
                digits : "Please enter a valid numbers"
            },
            EMAIL1: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                email : "Please enter a valid email"
            },
            RELIGION: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            FATHNAM3: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            FATHNAM2: {
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            FATHNAM1: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            FATHNAM4: {
                maxlength : "You have reach the maximum input value.",
                alpha : "Please input letters only."
            },
            FATHOCCUP: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            MOTHNAM3: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            MOTHNAM2: {
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            MOTHNAM1: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            MOTHOCCUP: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            ANNUALFAMINCOME: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                number : "Please input numbers only."
            },
            GUARDIAN: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_space : "Please input letters, and spaces only."
            },
            PHONE2: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                minlength : "Please enter atleast 10 digits",
                digits : "Please enter a valid numbers"
            },
            RELATIONSHIP: {
                required : "This field is required.",
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            TRIBE: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_dash_space : "Please input letters, numbers, dash, and spaces only."
            },
            DISABILITY: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            LGBT: {
                maxlength : "You have reach the maximum input value.",
                alpha : "Please input letters only."
            },
            SCHOLARSHIP1: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            },
            SCHOLARSHIP2: {
                maxlength : "You have reach the maximum input value.",
                alpha_numeric_space : "Please input letters, numbers, and spaces only."
            }
        }
    });

    /* Add college */
    $("#college-validate").validate({
        rules: {
            COLLCODE: {
                required : true,
                maxlength : 6,
                alpha : true
            },
            COLLDESC: {
                required : true,
                maxlength : 255,
                alpha_numeric_space : true
            }
        },
        messages: {
            COLLCODE: {
                required : "This field is required.",
                maxlength : "Please input less than 7 characters.",
                alpha : "Please input letters only."
            },
            COLLDESC: {
                required : "This field is required.",
                maxlength : "Please input less than 255 characters.",
                alpha_numeric_space : "Please input letters, numbers, and space only."
            }
        }
    });
    
    $("#form-validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required : true,
                minlength : 2
            },
            email: {
                required : true,
                email : true
            },
            password: {
                required : true,
                minlength : 5
            },
            confirm_password: {
                required : true,
                minlength : 5,
                equalTo : "#password"
            },
            course: "required",
            address: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required : "Please enter a username",
                minlength : "plase input atleast 2 characters"
            },
            password: {
                required : "Please enter a password",
                minlength : "plase input atleast 5 characters"
            },
            confirm_password: {
                required : "Please enter a password",
                minlength : "plase input atleast 5 characters",
                equalTo : "please enter the same password as above"
            }
        }
    });

    

})