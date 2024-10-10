<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="http://pikahq.co/">
                <div class="logo">
                    <img class="logo-size" src="img/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
                    <div class="img-box">
                    </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Join Our WaitList</h3>
                        <p style="font-weight: 400;">Don’t miss out—partner with Pika to elevate your business with affordable store solutions and high-earning delivery
                        opportunities</p>
                        <div class="page-links">
                            <a href="index">Merchants</a><a href="register5" class="active">Delivery Partners</a>
                        </div>
                        <form id="myForm" >
                            <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
                            <input class="form-control" type="text" name="address" placeholder="Address" required>
                            <select class="form-control" name="stateOfOperation" style="margin-bottom: 12px;" required>
                                <option value="" disabled selected>Select State of Operation</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">Federal Capital Territory (FCT)</option>
                            </select>
                            <select class="form-control" name="meansoftransportation" style="margin-bottom: 12px;" required>
                                <option value="" disabled selected>Select Means of Transportation</option>
                                <option value="car">Car</option>
                                <option value="bike">Bike</option>
                                <option value="bicycle">Bicycle</option>
                                <option value="truck">Truck</option>
                                <option value="errand boy">Errand Boy</option>
                            </select>
                            <input class="form-control" type="text" name="vehiclename" placeholder="Vehicle Name" required>
                            <input class="form-control" type="text" name="vehiclenumber" placeholder="Vehicle No" required>
                            <input class="form-control" type="number" name="phonenumber" placeholder="Phone Number" required>
                            <input class="form-control" type="email" name="email" placeholder="Email Address" >
                            <input class="form-control" type="text" name="referralink" placeholder="Referral Link">
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or register with</span><a href="register5.html#">Facebook</a><a href="register5.html#">Google</a><a href="register5.html#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
<script>
    document.getElementById('myForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        window.location.href = "email-confirm"; // Redirect to another page
    });
</script>
</body>
</html>