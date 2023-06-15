<?php
// Read country codes and names from CSV file
$all_country_codes = array();
if (($handle = fopen("https://github.com/AbhisekhNayek/Contact-form-with-captcha/blob/main/Country-codes.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $all_country_codes[] = array('code' => $data[0], 'name' => $data[1]);
    }
    fclose($handle);
}
?>

<!-- Error messages -->
<?php if(!empty($response)) {?>
<div class="form-group col-12 text-center">
  <div class="alert text-center <?php echo $response['status']; ?>">
    <?php echo $response['message']; ?>
  </div>
</div>
<?php }?>

<!-- Contact form -->
<form action="" name="contactForm" id="contactForm" method="post" enctype="multipart/form-data" novalidate>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <select class="custom-select" id="country-code" name="country-code">
          <option value="">Select Country Code</option>
          <?php
            foreach ($all_country_codes as $country) {
              echo '<option value="' . $country['code'] . '">' . $country['name'] . ' (' . $country['code'] . ')' . '</option>';
            }
          ?>
        </select>
      </div>
      <input type="text" class="form-control" name="phone-number" id="phone-number">
    </div>
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea class="form-control" rows="4" name="message" id="message"></textarea>
  </div>
  <div class="form-group">
    <!-- Google reCAPTCHA block -->
    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"></div>
  </div>
  <div class="form-group">
    <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">        
  </div>
</form>