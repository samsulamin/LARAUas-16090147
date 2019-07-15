@extends('templateDash')

@section('main')
	 <div id="mapid"></div>
<div id="basemaps-wrapper" class="leaflet-bar">
<label id='greeting'>
    Penyalur Dengan Gas Tersedia <br>
  <select name="basemaps" id="basemaps" onChange="changeBasemap(basemaps)">
    <option value="Topographic">Topographic</option>
    <option value="Streets">Streets</option>
    <option value="NationalGeographic">National Geographic</option>
    <option value="Oceans">Oceans</option>
    <option value="Gray">Gray</option>
    <option value="DarkGray">Dark Gray</option>
    <option value="Imagery">Imagery</option>
    <option value="ImageryClarity">Imagery (Clarity)</option>
    <option value="ImageryFirefly">Imagery (Firefly)</option>
    <option value="ShadedRelief">Shaded Relief</option>
    <option value="Physical">Physical</option>
  </select>
  </label>
</div>

@stop

@section('footer')

@stop