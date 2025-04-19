<form method="post" id="lead_generate_form" action="{{ route('insert-lead-records') }}" >

    @csrf

    <div class="row g-3">

        <div class="col-md-12">

            <div class="form-floating mb-2">

                <input type="text" class="form-control" id="name" name="lead_name" placeholder="Enter Your Name" required>

                <label for="name">Your Name</label>

            </div>

        </div>

        <div class="col-md-12">

            <div class="form-floating mb-2">

                <input type="email" class="form-control" id="email_address" name="lead_email" placeholder="Enter Your Email Address" required>

                <label for="email_address">Email Address</label>

            </div>

        </div>

        <div class="col-12">

            <div class="form-floating mb-2">

                <input type="text" class="form-control" id="mobile" name="lead_phone" placeholder="Enter Your Mobile Number" required>

                <label for="mobile_number">Mobile Number</label>

            </div>

        </div>

        <div class="col-12">

            <div class="form-floating mb-2">

                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Your Country" required>

                <label for="country">Country</label>

            </div>

        </div>

        <div class="col-12">

            <div class="form-floating mb-2">

                <textarea class="form-control" id="comment" name="comment" placeholder="Enter Your Query" required></textarea>

                <label for="pincode">Write Enquiry </label>

            </div>

        </div>

        <div class="col-lg-12">

            <div class="form-group disclaimer">

                <p style="margin:0">
                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fab fa-whatsapp" style="color: green;"></i> whatsapp. 
                </p>
                <p style="margin:0">
                <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive promotional and marketing material on Email. 
                </p>
                <p>
                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                </p>

            </div>

        </div>

        <div class="col-12">

            <button class="btn btn-primary w-100 py-3 text-white" type="submit">Enroll Now</button>

            <input type="hidden" class="formFieldOtpResponse" value="">

            <input type="hidden" class="lead_id"  name ="lead_id" value="">

            <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">

            <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">

            <input type="hidden" name ="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >

            <input type="hidden" name ="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  

            <input type="hidden" name ="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  

            <input type="hidden" name ="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  

            <input type="hidden" name ="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" >   

            <input type="hidden" name ="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  

            <input type="hidden" name ="source_url" value="{{ url()->current() }}" >

    </div>

</form>