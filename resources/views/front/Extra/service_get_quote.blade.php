<div class="col-lg-6 order-lg-1 order-2 wow right-animation" data-wow-delay="0.2s">
    <div class="contact-content portfolio-box">
        <h2 class="">Get a free Keystroke <br>
            quote now</h2>
        <p>Just drop us your details and thoughts and our executive will get in touch with you shortly</p>
        <div class="contact-form">
            <div role="alert" id="quote-alert-div" style="display: none;">
                <span></span>
            </div>
            <form name="quotefrm" id="quotefrm" method="POST" enctype="multipart/form-data" autocomplete="off" data-action="{{ route('front.inquiry.store') }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-box">
                            <input type="text" name="name" class="form-input" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-box">
                            <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-box">
                            <input type="text" name="company_name" class="form-input" placeholder="Company">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-box">
                            <input type="text" name="phone_no" class="form-input" placeholder="Phone Number"  onkeypress="return isNumber(event);" maxlength="15" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-box mb-0">
                            <button name="submit" type="submit" value="Submit" class="sec-btn gradient"><span>Submit</span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
