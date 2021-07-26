<!DOCTYPE html>
<head>
    <title>test learn
    </title>
</head>
<Body>

{{--@if($test =="adnan kanakri")--}}
{{--    <div>--}}
{{--        <h1> my name is adnan kanakri d </h1>--}}
{{--    </div>--}}
{{--@endif--}}
{{--@foreach($adnan as $ad)--}}
{{--    <p>{{$ad}}</p>--}}
{{--@endforeach--}}
///////////////////////////////////////////////////////////////////////////////
@forelse($adnan as $da)
    <p>{{$da}}</p>
@empty
    <div>you have in empty array</div>
@endforelse

</Body>
