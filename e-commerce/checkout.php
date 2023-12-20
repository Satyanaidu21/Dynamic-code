<?php 
?>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- style.css For Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- fontawesome cdn For Icons -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">

  <title>E-Commerce</title>
</head>
<body>
  <!--==========header menu section starts here==========-->
  <section class="header_menu" id="header_menu">
    <div class="container-fluid px-0 shadow">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 ">
        <a class="navbar-brand pl-5 pl-small-0" href="index.html">
          <img src="logo1.jpg" class="img img-fluid" width="120px"
          alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.html">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
<!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
role="button" data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false">
Dropdown
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li> -->
</ul>
<div class="search mr-3">
  <a href="search.html" class="btn btn-sm btn-outline-primary">
    Search
  </a>
</div>
<div class="cart">
  <a href="cart.html">
    <i class="fas fa-shopping-cart fa-2x"></i>
    <span class="badge badge-pill badge-primary">24</span>
  </a>
</div>
</div>
</nav>
</div>
</section>
<!-- ==============header menu section ends here============== --> 
<!-- ==============Checkout starts here============== -->
<section class="Checkout py-5 my-5" id="Checkout">
  <div class="container ">
    <div class="section_title text-center mb-5">
      <h1 class="text-capitalize">Checkout</h1>
    </div>
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-8">
        <!-- Card -->
        <div class="card bg_checkout_1 pb-5">
          <div class="card-body">
            <h5 class="mb-5">Billing details</h5>
            <!-- Grid row -->
            <form method="post">
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-6">
                <!-- First name -->
                <div class="form-group mb-0 mb-lg-4">
                  <label for="firstName">First name</label>
                  <input type="text" name="firstName" id="firstName" class="form-control mb-0
                  mb-lg-2">
                </div>
              </div>
              <!-- Grid column -->
              <!-- Grid column -->
              <div class="col-lg-6">
                <!-- Last name -->
                <div class="form-group md-outline">
                  <label for="lastName">Last name</label>
                  <input type="text" name="lastName" id="lastName" class="form-control">
                </div>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <!-- Phone -->
            <div class="form-group">
              <label for="form18">Phone</label>
              <input type="number" name="form18" id="form18" class="form-control">
            </div>
            <!-- Email address -->
            <div class="form-group">
              <label for="form19">Email address</label>
              <input type="email" name="form19" id="form19" class="form-control">
            </div>
            <!-- Country -->
            <div class="d-flex flex-wrap">
              <div class="w-100">
                <label>Country</label>
                <select class="custom-select form-group" name="country">
                  <option value="" selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>
            <!-- Address Part 1 -->
            <div class="form-group">
              <label for="form14">Address Line 1</label>
              <input type="text" id="form14" name="form14" placeholder="House number and
              street name"
              class="form-control">
            </div>
            <!-- Address Part 2 -->
            <div class="form-group">
              <label for="form15">Address Line 2</label>
              <input type="text" id="form15" name="form15" placeholder="Apartment, suite, unit
              etc. (optional)"
              class="form-control">
            </div>
            <!-- Postcode / ZIP -->
            <div class="form-group">
              <label for="form16">Postcode / ZIP</label>
              <input type="text" id="form16" name="form16" class="form-control">
            </div>
            <!-- Town / City -->
            <div class="form-group">
              <label for="form17">Town / City</label>
              <input type="text" id="form17" name="form17" class="form-control">
            </div>
            <!-- Additional information -->
            <div class="form-group">
              <label for="form76">Additional information</label>
              <textarea id="form76" name="form76" class="md-textarea form-control"
              rows="4"></textarea>
            </div>
<button class="btn btn-success" name="submit"><i class="fa fa-check"></i>
Purchase</button>
</form>
<!-- <div class="text-center">
  <a href="order_confirmation.html" class="btn btn-primary">
    <i class="fa fa-check mr-2"></i>Purchase
  </a>
</div> -->
</div>
</div>
<!-- Card -->
</div>
<!--Grid column-->
<!--Grid column-->
<div class="col-lg-4 bg_checkout_1 h-25 rounded">
  <!-- Card -->
  <div class="mb-3">
    <div class="pt-4">
      <h5 class="mb-3">Order summary</h5>
      <ul class="list-group list-group-flush">
        <li
        class="list-group-item d-flex justify-content-between
        align-items-center border-0 px-0 pb-2">
        <span>Product name 1</span>
        <span>x2</span>
        <span>₹100.98</span>
      </li>
      <li
      class="list-group-item d-flex justify-content-between
      align-items-center border-0 px-0 pb-2">
      <span>Product name 2</span>
      <span>x2</span>
      <span>₹300.98</span>
    </li>
    <li
    class="list-group-item d-flex justify-content-between
    align-items-center border-top px-0 mb-3">
    <div>
      <strong>Total amount</strong>
      <strong>
        <p class="mb-0">(including VAT)</p>
      </strong>
    </div>
    <span><strong>₹501.96</strong></span>
  </li>
</ul>
</div>
</div>
<!-- Card -->
</div>
<!--Grid column-->
</div>
</div>
</section>
<!-- ==============Checkout ends here============== -->
<!-- ==============footer starts here============== -->
<section class="footer_section pt-5 pb-2" id="footer_section">
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-6 pl-5 pl-small-15">
          <div class="footer_title">
            <a href="index.html"><img src="logo1.jpg" width="150px"
              class="img img-fluid" alt="logo"></a>
            </div>
            <div>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, totam est
              illum ipsum quas ad
              dignissimos magni veritatis natus voluptatem.
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Quick Links</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="javascript:;">Offers & Discounts</a></li>
                <li><a href="javascript:;">Get Coupon</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>New Products</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="javascript:;">Woman Cloth</a></li>
                <li><a href="javascript:;">Fashion Accessories</a></li>
                <li><a href="javascript:;">Man Accessories</a></li>
                <li><a href="javascript:;">Rubber made Toys</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Support</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="javascript:;">Frequently Asked Questions</a></li>
                <li><a href="javascript:;">Terms & Conditions</a></li>
                <li><a href="javascript:;">Privacy Policy</a></li>
                <li><a href="javascript:;">Report a Payment Issue</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top">
        <h6 class="text-center mt-3">Copyright ©2020 All rights reserved
        </h6>
      </div>
    </footer>
  </section>
  <div class="backtop">
    <a id="button" href="#top" class="btn btn-lg btn-outline-danger" role="button">
      <i class="fas fa-chevron-up text-dark"></i>
    </a>
  </div>
  <!-- ==============footer ends here============== -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerece";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  if (isset($_POST['submit'])) {
    // Retrieve form data
     $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['form18'];
    $email = $_POST['form19'];
    $country = $_POST['country']; 
    $addressLine1 = $_POST['form14'];
    $addressLine2 = $_POST['form15'];
    $postcode = $_POST['form16'];
    $city = $_POST['form17'];
    $additionalInfo = $_POST['form76'];

    // SQL query to insert data into the contact_form table
    $sql = "INSERT INTO checkout (firstName, lastName, phone, email, country, addressLine1, addressLine2, postcode, city, additionalInfo)
            VALUES ('$firstName', '$lastName', '$phone', '$email', '$country', '$addressLine1', '$addressLine2', '$postcode', '$city', '$additionalInfo')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>