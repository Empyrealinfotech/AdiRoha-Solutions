<div role="alert" id="contact-alert-div" style="display: none;">
    <span></span>
</div>
<form name="contactfrm" id="contactfrm" method="POST" enctype="multipart/form-data" autocomplete="off" data-action="{{ route('front.contact.us.store') }}">
    <div class="row">
        <div class="col-md-6">
            <div class="form-box">
                <input type="text" name="first_name" class="form-input" placeholder="First Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-box">
                <input type="text" name="last_name" class="form-input" placeholder="Last Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-box">
                <input type="email" name="email" class="form-input" placeholder="Email Address" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-box">
                <input type="text" name="phone_no" class="form-input" placeholder="Phone Number" onkeypress="return isNumber(event);" maxlength="15" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-box">
                <textarea name="message" class="form-input" placeholder="Message" required></textarea>
            </div>
        </div>
        <div class="col-12">
            <img src="assets/images/contact-form-image.png" alt="100% privacy" class="contact-form-privacy">
        </div>
        <div class="col-12">
            <div class="form-box mb-0">
                <button name="submit" type="submit" value="Submit" class="sec-btn gradient"><span>Submit</span></button>
            </div>
        </div>
    </div>
</form>