
//Custom validation Rules

jQuery.validator.addMethod("alphaspace", function(value, element) {
   return this.optional(element) || value == value.match(/^[-a-zA-Z0-9_ ]+$/);
}, "Only letters, Numbers & Space/underscore Allowed.");

// Alpha Number Or Underscore Allowed
jQuery.validator.addMethod("alphaNum", function(value, element) {
   return this.optional(element) || value == value.match(/^[A-Za-z0-9_]{3,20}$/);
}, "Space not allowed! Only letters, Numbers & underscore Allowed.");

// Float Number or after(.) Max Three digit Allowed
jQuery.validator.addMethod("floatNumber", function(value, element) {
   return this.optional(element) || value == value.match(/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d{1,2})?$/);
}, "Value must be float or int after (.) only contain two decimal place.");

jQuery.validator.addMethod("greaterThanZero", function(value, element) {
    return this.optional(element) || (parseFloat(value) > 0);
}, "* Amount must be greater than zero");
