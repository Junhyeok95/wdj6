@php
$size = isset($size) ? $size : 48;
@endphp

@if (isset($user) and $user)
<div class="pull-left" >
    <img class="media-object img-thumbnail" src="http://127.0.0.1:8000/files2/yju_logo.jpg" alt="{{ $user->name }}">
    <!-- <img class="media-object img-thumbnail" src="http://btrya23.iptime.org:8000/files2/yjp.png" alt="{{ $user->name }}"> -->
</div>
@endif