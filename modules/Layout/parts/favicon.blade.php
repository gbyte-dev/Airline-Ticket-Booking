@php
    $favicon = setting_item('site_favicon');
@endphp
@if($favicon)
    @php
        $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
    @endphp
    @if(!empty($file))
        <!--<link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" />-->
	<link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/0000/7/2024/09/03/bkp2-tg-logo-111.png')}}" />
    @else
        :
        <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" />
    @endif
@endif
