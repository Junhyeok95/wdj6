@php
$size = isset($size) ? $size : 48;
@endphp

@if (isset($user) and $user)
<div class="pull-left" >
    <img class="media-object img-thumbnail" onerror="this.src='img/no_img.png'" src="img/yju_logo.png" alt="{{ $user->name }}">
</div>
@endif