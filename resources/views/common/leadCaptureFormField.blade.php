<div class="contact-info formFieldName">
    <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
</div>

<div class="contact-info formFieldEmail">
    <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
</div>

<div class="contact-info formFieldMobile">
    <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
</div>

<div class="contact-info formFieldPincode">
    <input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Pincode of Present Address" min="100000" max="999999" autocomplete="off" required>
</div>

@if(isset($_GET['city']))
    <select class="center" name="center" required>
        <option value="">Select Center</option>
        @foreach(getCenterByCityId($_GET['city']) as $value)
            <option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
        @endforeach
    </select>
@endif

@if(isset($_GET['state']))
    <select class="center" name="center" required>
        <option value="">Select Center</option>
        @foreach(getCenterByStateId($_GET['state']) as $value)
            <option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
        @endforeach
    </select>
@endif

@if(isset($_GET['bucket']))
    <select class="center" name="center" required>
        <option value="">Select Center</option>
        @foreach(getCenterByBucket($_GET['bucket']) as $value)
            <option value="{{$value->name}}" > {{$value->name}} </option>
        @endforeach
    </select>
@endif

@if(isset($center))
    <input type="hidden" name="center" value="{{ (isset($center) )?$center:'' }}">
@endif

@if(isset($contentMain->course_id))
<input type="hidden" name="course_id" value="{{$contentMain->course_id}}">
@endif

<input type="hidden" name="brochure_id" value="">