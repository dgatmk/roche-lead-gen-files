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
  <title>SmartPix Lead Gen</title>
</head>
<body>
  <?php 
    require_once 'php/roche-lead.php';
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
  ?>
  <img id="top-strip" src="images/topStrip.jpg">
  <img id="header-image" src="images/spLogo.png">
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
        <div class="half-field"><input type="email" name="email" placeholder="Email" required></div>
        <div class="half-field"><input class="phone_us" type="text" name="phone" placeholder="Phone: (xxx) xxx-xxxx"></div>
        <label class="cbox"><span class="ctext">Yes, please send me email notifications.</span>
          <input type="checkbox" name="emailoptin">
          <span class="checkmark"></span>
        </label>
      </div>
      <h1 class="row-head">Current Systems Used</h1>
      <div class="row">
        <label class="rbox"><span class="rtext">Accu-Chek 360</span>
          <input type="checkbox" name="ac360">
          <span class="rboxdot"></span>
        </label>
        <label class="rbox"><span class="rtext">Accu-Chek Connect</span>
          <input type="checkbox" name="acConnect">
          <span class="rboxdot"></span>
        </label> 
        <label class="rbox"><span class="rtext">Diasend/Glooko</span>
          <input type="checkbox" name="diasend">
          <span class="rboxdot"></span>
        </label> 
        <label class="rbox"><span class="rtext">Carelink</span>
          <input type="checkbox" name="carelink">
          <span class="rboxdot"></span>
        </label> 
        <label class="rbox" onclick="otherField()"><span class="rtext">Other(please list)</span>
          <input type="checkbox" name="other" id="other-rbox">
          <span class="rboxdot"></span>
        </label>  
        <div id="other-sys" class="full-field"><input type="text" name="others" placeholder="Other System"></div>
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