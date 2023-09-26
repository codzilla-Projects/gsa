// Name can't be blank
$('#contact_fullname').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});

// Email must be an email
$('#contact_email').on('input', function() {
//var emailRegx1 = /^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(test)\.com$/g;
  var emailRegx = /\b(?:(?![_.-])(?!.*[_.-]{2})[a-z0-9_.-]+(?<![_.-]))@(?:(?!-)(?!.*--)[a-z0-9-]+(?<!-)\.)*test\.com\b/i;
  //var re = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    if (emailRegx.test(email)) {
        if (email.indexOf('@test.com', email.length - '@test.com'.length) !== -1) {
            alert('Submission was successful.');
        } else {
            alert('Email must be a test e-mail address (your.name@test.com).');
        }
    } else {
        alert('Not a valid e-mail address.');
    }
});



// Name can't be blank
$('#contact_phone').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});

// Name can't be blank
$('#contact_governorate').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});

// Name can't be blank
$('#contact_organization').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});

// Name can't be blank
$('#contact_jobtitle').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});

// Name can't be blank
$('#contact_programs').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});
$('#contact_industry').on('input', function() {
  var input=$(this);
  var is_name=input.val();
  if(is_name){input.removeClass("invalid").addClass("valid");}
  else{input.removeClass("valid").addClass("invalid");}
});


// After Form Submitted Validation
$("#send_email_submit button").click(function(event){
  var form_data=$("#contact-form").serializeArray();
  var error_free=true;
  for (var input in form_data){
    var element=$("#contact_"+form_data[input]['name']);
    var valid=element.hasClass("valid");
    var error_element=$("span", element.parent());
    if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
    else{error_element.removeClass("error_show").addClass("error");}
  }
  if (!error_free){
    event.preventDefault(); 
  }
  else{
    alert('No errors: Form will be submitted');
  }
});