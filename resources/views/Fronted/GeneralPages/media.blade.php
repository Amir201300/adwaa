@extends('Fronted.layouts.master')

@php
$media=\App\Models\Media::where('status',1)->where('image','!=',null)->paginate(36);
@endphp

@section('title')
    المركز الاعلامي
    @endsection

@section('content')
   {!! gePageSection('المركز الاعلامي') !!}

    <!-- Gallery -->
    <div class="gallery-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">

                <div class="gallery-isotope" style="clear: left;">
                    @foreach($media as $row)
                    <div class="col-sm-3 item cat-1">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="{{getImageUrl('Media',$row->image)}}"><img src="{{getImageUrl('Media',$row->image)}}" alt="gallery"></a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection