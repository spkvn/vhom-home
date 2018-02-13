@extends('layouts.site')
@section('content')
<div class="grid-x grid-padding-x top-grid-row">
    <div class="cell small-6 primary">
        <h1>Hello</h1>
        <p>Feel free to check out some of the computer stuff I have been doing.</p>
        <h6><a href="https://github.com/spkvn" style="color:white;">github</a></h6>
    </div>
    <div class="cell small-2 white">

    </div>
    <div class="cell small-2 secondary">

    </div>
    <div class="cell small-2 tertiary lower-right-text">
        <p class="extra-large">:^)</p>
    </div>
</div>
<div class="grid-x grid-padding-x body-grid-row">
    <div class="cell small-12 image"
         style="background-image:url('{{asset('/img/leaves-droplets.jpeg')}}')">
        <h2>Project One</h2>
        <p>Project description goes here. I wonder what i can write here which people will read and see.</p>
    </div>
</div>
<div class="grid-x grid-padding-x body-grid-row">
    <div class="cell small-12 image right-align lower-right-text"
         style="background-image:url('{{asset('/img/jellyfish.jpg')}}')">
        <h2>Project Two</h2>
        <p>Project description goes here. I wonder what i can write here which people will read and see.</p>
    </div>
</div>
@endsection