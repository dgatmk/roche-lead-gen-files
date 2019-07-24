<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script src="js/mainScripts.js"></script>
  <title>ACD Lead Gen</title>
</head>
<body>
  <?php 
    require_once 'php/roche-lead.php';
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
  ?>
  <img id="top-strip" src="images/topStrip.jpg">
  <img id="header-image" src="images/acdLogo.svg">
  <div id="form-body" class="imago">
    <form id="acd-form" action="php/roche-lead.php" method="POST" name="acdForm">
      <h1 class="row-head">Name</h1>
      <div class="row">
        <div class="half-field"><input type="text" name="fname" placeholder="First Name" required></div>
        <div class="half-field"><input type="text" name="lname" placeholder="Last Name" required></div>
      </div>
      <h1 class="row-head">What is your current position?</h1>
      <div class="row">
        <div class="half-field"><!--<input type="text" name="title" placeholder="Title"></div>-->
          <select name="title" class="imago" onchange="defaulter(this)">
            <option class="drop-placeholder" value="">Title</option>
            <option value="MD">MD</option>
            <option value="DO">DO</option>
            <option value="NP">NP</option>
            <option value="CDF">CDF</option>
            <option value="Nurse">Nurse</option>
            <option value="MA">MA</option>
            <option value="PA">PA</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="half-field"><input type="text" name="iname" placeholder="Institution Name"></div>
      </div>      
      <h1 class="row-head">Contact</h1>
      <div class="row">
        <div class="full-field top-field"><input type="text" name="address" placeholder="Address"></div>
        <div class="third-field"><input type="text" name="city" placeholder="City"></div>
        <div class="third-field">
          <select name="state" class="imago" onchange="defaulter(this)" rewquired>
            <option value="">State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            <option value="AS">American Samoa</option>
            <option value="GU">Guam</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="PR">Puerto Rico</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="VI">Virgin Islands</option>
          </select>
        </div>
        <div class="third-field"><input type="text" name="zip" placeholder="Zipcode"></div>
        <div class="half-field"><input type="email" name="email" placeholder="Email" required></div>
        <div class="half-field"><input class="phone_us" type="text" name="phone" placeholder="Phone: (xxx) xxx-xxxx"></div>
        <label class="cbox"><span class="ctext">Yes, please send me email notifications.</span>
          <input type="checkbox" name="email_optin">
          <span class="checkmark"></span>
        </label>
      </div>
      <h1 class="row-head">Additional Info</h1>
      <div class="row">
        <div class="full-field top-field"><input type="text" name="pname" placeholder="Current Prescriber Name"></div>
        <label class="cbox"><span class="ctext">I have already enrolled in AC Delivers.</span>
          <input type="checkbox" name="enrolled">
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="row">
          <button class="sub-button" type="submit" form="acd-form" value="Submit" name="submit">SUBMIT</button>
      </div>
    </form>
    <p id="disclaimer">* Roche Diabetes Care, Inc., the maker of Accu-Chek products, communicates with customers to provide information on advances in diagnosis and healthcare, product innovations, and special offers. Roche does not provide your personal information to any third party without your permission, except Roche affiliates and business working on our behalf (such as companies that print and send our mailings). You may always opt out of future marketing communications by calling 1-800-858-8072 or contacting us at accu-chek.care@roche.com. If you wish to unsubscribe from e-mail communications, you may also click the unsubscribe link in any e-mail you receive from us.<br>
    <br>This Web site contains information on products which are targeted to a wide range of audiences and could contain product details or information otherwise not accessible or valid in your country. Please be aware that we do not take any responsibility for accessing such information which may not comply with any valid legal process, regulation, registration or usage in the country of your origin.
© Roche Diabetes Care, Inc. All rights reserved.</p>
  </div>
</body>
</html>