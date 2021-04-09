@extends('layout.index')

@section('content')
    <section class="page-content wrap">

        <div class="container">

            <div class="row albums-holder">

                @foreach($groups as $group)
                    <div class="col-md-4 gallery">

                    <figure class="img-overlay gal-img">

                        <a href="{{route('childrens', $group->id)}}">
                            <span class="btn-more btn-link"></span>
                            <img class="img-responsive" src="{{$group->img}}" alt="" style="width: 400px; height: 250px" "></a></figure>

                    <h5><a href="{{route('childrens', $group->id)}}">{{$group->name}}</a></h5>
                        <br>

                </div><!--end col-md-4-->
                @endforeach

            </div><!--row-->

        </div><!-- container-->

    </section><!-- page-content-->
@endsection
