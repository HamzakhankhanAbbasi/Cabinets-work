<?php include 'inc/header.php'; ?>
<section class="dashboard-sec">
    <div class="row">
        <aside>
            <div class="side-logo">
                <a href="javascript:void(0)"><img src="assets/images/dashboard-logo.png" class="img-fluid"></a>
            </div>
            <div class="user-profile">
                <div class="profile-image">
                    <img src="assets/images/user-image.png" class="img-fluid">
                </div>
                <div class="user-name">
                    <p>Hi,<br>
                        <strong>John Doe</strong>
                    </p>
                </div>
            </div>
            <div class="dashboard-links">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-user"></i> My Account</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-shopping-cart"></i> My Orders</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-file-invoice-dollar"></i> Payment</a>
                    <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false"><i class="far fa-address-book"></i>Address</a>
                    <a class="nav-link" id="v-pills-cart-tab" data-toggle="pill" href="#cart" role="tab" aria-controls="cart" aria-selected="false"><i class="fas fa-shopping-cart"></i>Cart</a>
                      <a class="nav-link" id="v-pills-cart-tab" data-toggle="pill" href="#spec" role="tab" aria-controls="spec" aria-selected="false"><i class="far fa-file"></i>Spec Catalog</a>
                    <a class="nav-link" id="v-pills-claim-tab" data-toggle="pill" href="#claim" role="tab" aria-controls="claim" aria-selected="false"><i class="far fa-sticky-note"></i>Claim</a>
                    <a class="nav-link" href="javascript:;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <a class="nav-link" href="javascript:;"><i class="fas fa-home"></i> Back To Home</a>
                </div>
            </div>
        </aside>
        <div class="right-box-wrap">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- My Account Tab -->
                <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h5 class="black-head">Welcome to Your Account</h5>
                    <div class="user-info-box">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"><i class="fas fa-plus"></i></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(assets/images/user-image.png);">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="profile-edit">
                            <img src="assets/images/user-image.png" class="img-fluid">
                            <span><a href="javascript:void(0)"><i class="fas fa-plus"></i></a></span>
                            </div> -->
                        <div class="info-box">
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>User Name</label>
                                    <p>John Doe</p>
                                </div>
                                <div class="edit-btn">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#newUsername-modal">Edit</a>
                                </div>
                            </div>
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>Address</label>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                                <div class="edit-btn">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#newAddress-modal">Edit</a>
                                </div>
                            </div>
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>Phone Number</label>
                                    <p>You haven’t added a phone number yet</p>
                                </div>
                                <div class="edit-btn">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#newNumber-modal">Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="change-pass-wrap">
                        <h5 class="black-head m-0">Password & Authentication</h5>
                        <div class="pass-btn-box">
                            <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">Change Password</a>
                            <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newEmail-modal">Change Your Email</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
                <!-- My Order Tab -->
                <div class="tab-pane fade" id="myorder" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h5 class="black-head">My Orders</h5>
                    <div class="order-detail-box">
                        <table class="display nowrap" id="example" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Oder#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Last update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="yellow-color">Shipped</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Fullfilled</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Billingt Tab -->
                <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h5 class="black-head">Payment Method</h5>
                    <div class="payment-wrap">
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="address-box payment-box-card">
                                    <p class="name">VISA</p>
                                    <p><strong>Name: </strong>Jon Snow</p>
                                    <p><strong>Card No: </strong>0**** **** **** ***0</p>
                                    <p><strong>Exp Date: </strong>12/22</p>
                                    <p><strong>CVV: </strong>***</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-box">
                        <div class="payment-text">
                            <p>No payment method saved</p>
                            <label>Checkout faster by saving a payment method</label>
                        </div>
                        <div class="payment-btn">
                            <button type="button" class="black-btn" data-toggle="modal" data-target="#payment-modal">add payment method</button>
                        </div>
                    </div>
                    <div class="transaction-history-box">
                        <h5 class="black-head m-0">Transaction History</h5>
                        <div class="alert alert-box" role="alert">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        </div>
                    </div>
                </div>
                <!-- ADDRESS TAB -->
                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                    <h5 class="black-head">Address</h5>
                    <div class="addresses-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="address-box">
                                    <p class="name">Billing Address</p>
                                    <p>H.no 2 </p>
                                    <p>Street 5</p>
                                    <p>Sydney</p>
                                    <p>Australia</p>
                                    <p><strong>Zipcode </strong>00000</p>
                                    <p><strong>Phone: </strong>000 000 000 000</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="address-box">
                                    <p class="name">Shipping Address</p>
                                    <p>H.no 2 </p>
                                    <p>Street 5</p>
                                    <p>Sydney</p>
                                    <p>Australia</p>
                                    <p><strong>Zipcode </strong>00000</p>
                                    <p><strong>Phone: </strong>000 000 000 000</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="add-address">
                                    <a href="#!" data-toggle="modal" data-target="#addAddressModal">
                                    <i class="fas fa-plus"></i>
                                    <span>New Address</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CART TAB -->
                <div class="tab-pane fade" id="cart" role="tabpanel" aria-labelledby="v-pills-cart-tab">
                    <h5 class="black-head">CART</h5>
                    <div class="cart-list">
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">
                            </div>
                            <div class="product-name">
                                <p class="name">Hardback Cover</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$50.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">
                            </div>
                            <div class="product-name">
                                <p class="name">Hardback Cover</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$50.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">
                            </div>
                            <div class="product-name">
                                <p class="name">Hardback Cover</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$99.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Spec Tab-->
                  <div class="tab-pane fade" id="spec" role="tabpanel" aria-labelledby="v-pills-cart-tab">
                    <h5 class="black-head">SPEC CATALOG</h5>
                    <!--<div class="cart-list">-->
                    <!--    <div class="cart-list-item">-->
                    <!--        <div class="product-img">-->
                    <!--            <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">-->
                    <!--        </div>-->
                    <!--        <div class="product-name">-->
                    <!--            <p class="name">Hardback Cover</p>-->
                    <!--            <p class="price">$5.00</p>-->
                    <!--        </div>-->
                    <!--        <div class="product-quantity-wrap y-center">-->
                    <!--            <div class="quaitity-box">-->
                    <!--                <form>-->
                    <!--                    <div class="plus-minus">-->
                    <!--                        <span class="minus">-</span>-->
                    <!--                        <label for="quantity-select">QUANTITY</label>-->
                    <!--                        <input type="number" class="count" name="qty" value="1" disabled="">-->
                    <!--                        <span class="plus">+</span>-->
                    <!--                    </div>-->
                    <!--                </form>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="product-action-price y-center">-->
                    <!--            <p>$50.00</p>-->
                    <!--            <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="cart-list-item">-->
                    <!--        <div class="product-img">-->
                    <!--            <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">-->
                    <!--        </div>-->
                    <!--        <div class="product-name">-->
                    <!--            <p class="name">Hardback Cover</p>-->
                    <!--            <p class="price">$5.00</p>-->
                    <!--        </div>-->
                    <!--        <div class="product-quantity-wrap y-center">-->
                    <!--            <div class="quaitity-box">-->
                    <!--                <form>-->
                    <!--                    <div class="plus-minus">-->
                    <!--                        <span class="minus">-</span>-->
                    <!--                        <label for="quantity-select">QUANTITY</label>-->
                    <!--                        <input type="number" class="count" name="qty" value="1" disabled="">-->
                    <!--                        <span class="plus">+</span>-->
                    <!--                    </div>-->
                    <!--                </form>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="product-action-price y-center">-->
                    <!--            <p>$50.00</p>-->
                    <!--            <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="cart-list-item">-->
                    <!--        <div class="product-img">-->
                    <!--            <img src="../assets/images/rta-det-1.jpg" class="img-fluid" alt="phone case">-->
                    <!--        </div>-->
                    <!--        <div class="product-name">-->
                    <!--            <p class="name">Hardback Cover</p>-->
                    <!--            <p class="price">$5.00</p>-->
                    <!--        </div>-->
                    <!--        <div class="product-quantity-wrap y-center">-->
                    <!--            <div class="quaitity-box">-->
                    <!--                <form>-->
                    <!--                    <div class="plus-minus">-->
                    <!--                        <span class="minus">-</span>-->
                    <!--                        <label for="quantity-select">QUANTITY</label>-->
                    <!--                        <input type="number" class="count" name="qty" value="1" disabled="">-->
                    <!--                        <span class="plus">+</span>-->
                    <!--                    </div>-->
                    <!--                </form>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="product-action-price y-center">-->
                    <!--            <p>$99.00</p>-->
                    <!--            <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <!--Spec Tab End-->
                <!-- CLAIM TAB -->
                <div class="tab-pane fade" id="claim" role="tabpanel" aria-labelledby="v-pills-claim-tab">
                    <h5 class="black-head mb-2">Submit Claim</h5>
                    <p class="gen-text">Do you have a claim to make? Did anything arrive damaged?</p>
                    <p class="gen-text">Please fill out our claims form.</p>
                    <form class="claim-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-top mt-3 mb-3">
                                    <p class="heading">Claim/Missing Items Request Form</p>
                                    <p>We apologize for the damage/missing or manufacturer defected items on your cabinet shipment. Freight companies can be rough sometimes. Be assured we will work with you until everything is taken care of. Your satisfaction with our product is very important to us.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name </label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Order number</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Please select the type of claim</label>
                                    <select>
                                        <option value="Damage due to shipping">Damage due to shipping</option>
                                        <option value="Damage after opening boxes">Damage after opening boxes</option>
                                        <option value="Returns">Returns</option>
                                        <option value="Missing items">Missing items</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Please take an image of the Delivery Receipt with the drivers notations and attach it here </label>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Attach an image of the damaged part by itself</label>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Please describe the image above. Please include exact cabinet piece and/or part damaged.</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Additional comments</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                                      <label class="custom-control-label" for="customCheck1">I have checked over all cabinets and all damages and missing items have been noted in this form</label>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <button class="submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tabs End -->
    </div>
</section>
<?php include 'inc/footer.php'; ?>
<!-- ADD ADDRESS MODAL -->
<div class="modal payment-popup fade c-popups" id="addAddressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup-head">
                    <h6>Add Address</h6>
                    <p><span>Add address details</span> </p>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Country</label>
                                <select name="" id="">
                                    <option value="" selected disabled>Select Country</option>
                                    <option value="">USA</option>
                                    <option value="">Australia</option>
                                    <option value="">Austria</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Address 1</label>
                                <input type="text" placeholder="Address 1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Address 2</label>
                                <input type="text" placeholder="Address 2">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Suburb/City</label>
                                <input type="text" placeholder="Suburb/City">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">State/Province</label>
                                <select name="" id="">
                                    <option value="" selected disabled>Select State/Province</option>
                                    <option value="">State 1</option>
                                    <option value="">State 2</option>
                                    <option value="">State 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Zip/Postcode</label>
                                <input type="text" placeholder="Zip/Postcode">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <button class="card-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>