function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var countryCode = document.forms["contactForm"]["country-code"].value;
    var phoneNumber = document.forms["contactForm"]["phone-number"].value;
    var message = document.forms["contactForm"]["message"].value;
    var captcha = grecaptcha.getResponse();
  
    if (name == "") {
      alert("NAME MUST BE REQUIRED !");
      return false;
    }
  
    if (email == "") {
      alert("Email MUST BE REQUIRED !");
      return false;
    }
  
    if (countryCode == "") {
      alert("COUNTRY CODE MUST BE REQUIRED !");
      return false;
    }
  
    if (phoneNumber == "") {
      alert("PHONE NO MUST BE REQUIRED");
      return false;
    }
  
    if (message == "") {
      alert("YOU HAVE TO ENTER SOME MESSAGE !");
      return false;
    }
  
    if (captcha == "") {
      alert("reCAPTCHA MUST BE CHECKED !");
      return false;
    }
  }
  