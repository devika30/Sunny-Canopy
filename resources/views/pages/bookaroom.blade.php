@extends('layouts.app')
@section('content')
<div class="popup_box ">
        <div class="popup_inner">
        <h3>Check Availability</h3>
        
        <div class="row">
        <div class="col-xl-6">
        <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" placeholder="Check in date" data-type="datepicker" data-guid="3c37be9f-de7e-7dfb-73ab-8f38bebbe2bf" data-datepicker="true" class="gj-textbox-md" role="input"><span class="fa fa-caret-down" role="right-icon"></span></div>
        </div>
        <div class="col-xl-6">
        <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker2" placeholder="Check out date" data-type="datepicker" data-guid="7560befb-e468-9435-8d56-03b809af4353" data-datepicker="true" class="gj-textbox-md" role="input"><span class="fa fa-caret-down" role="right-icon"></span></div>
        </div>
        <div class="col-xl-6">
        <select class="form-select wide" id="default-select" style="display: none;">
        <option data-display="Adult">1</option>
        <option value="1">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        </select><div class="nice-select form-select wide" tabindex="0"><span class="current">Adult</span><ul class="list"><li data-value="1" data-display="Adult" class="option selected">1</li><li data-value="1" class="option">2</li><li data-value="2" class="option">3</li><li data-value="3" class="option">4</li></ul></div>
        </div>
        <div class="col-xl-6">
        <select class="form-select wide" id="default-select" style="display: none;">
        <option data-display="Children">1</option>
        <option value="1">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        </select><div class="nice-select form-select wide" tabindex="0"><span class="current">Children</span><ul class="list"><li data-value="1" data-display="Children" class="option selected">1</li><li data-value="1" class="option">2</li><li data-value="2" class="option">3</li><li data-value="3" class="option">4</li></ul></div>
        </div>
        <div class="col-xl-12">
        <select class="form-select wide" id="default-select" style="display: none;">
        <option data-display="Room type">Room type</option>
        <option value="1">Laxaries Rooms</option>
        <option value="2">Deluxe Room</option>
        <option value="3">Signature Room</option>
        <option value="4">Couple Room</option>
        </select><div class="nice-select form-select wide" tabindex="0"><span class="current">Room type</span><ul class="list"><li data-value="Room type" data-display="Room type" class="option selected">Room type</li><li data-value="1" class="option">Laxaries Rooms</li><li data-value="2" class="option">Deluxe Room</li><li data-value="3" class="option">Signature Room</li><li data-value="4" class="option">Couple Room</li></ul></div>
        </div>
        <div class="col-xl-12">
         <button type="submit" class="boxed-btn3">Check Availability</button>
        </div>
        </div>
        
        </div>
        </div>
@endsection