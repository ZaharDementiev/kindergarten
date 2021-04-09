@extends('layout.index')

@section('content')
    <section class="page-content wrap">

        <div class="container">

            <div class="row">

                <div class="col-sm-5 col-md-4">

                    <img class="img-responsive" src="images/team/team-1.jpg" alt="">

                </div><!-- col-md-4-->

                <div class="col-sm-7 col-md-8">

                    <h3>Учитель: {{\App\Models\User::where('id', \App\Models\TeacherGroup::where('group_id', $id)->first()->teacher_id)->first()->name}}</h3>
                    <h3>Дети: </h3>
                    @foreach($childrens as $children)
                        <article class="single-teacher">
                        <h4>{{$children->name}}</h4>
{{--                        <p class="small-txt">Principal</p>--}}

{{--                        <ul class="team-social">--}}
{{--                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                        </ul>--}}

{{--                        <h5>Short Bio</h5>--}}

{{--                        <p>Curabitur auctor erat sed nisl interdum luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent enim felis, semper hendrerit hendrerit porta. Proin tempor posuere felis. Quisque et dui dui. Integer vehicula ornare felis, a tincidunt nunc elementuam pulvinar. Nulla vehicula neque id erat cursus interdum. Suspendisse tristique tortor ac elit eleifend egestas. Integer pretium feugiat sapien non diam hendrerit, at porta.</p>--}}

{{--                        <p>Ut consectetur fringilla porta. Proin luctus, enim non porta feugiat, libero dolor adipiscing metus, id pharetra arcu urna vel elit. Vivamus consectetur tellus sapien, a faucibus diam placerat id. Sed arcu felis, tincidunt sed ligula nec, suscipit euismod massa. Curabitur faucibus ante est, ac sollicitudin purus congue ut.</p>--}}

{{--                        <p>Proin luctus, enim non porta feugiat, libero dolor adipiscing metus, id pharetra arcu urna vel elit. Vivamus consectetur tellus sapien, a faucibus diam placerat id. Sed arcu felis, tincidunt sed ligula nec, suscipit euismod massa. Curabitur faucibus ante est, ac sollicitudin purus congue ut.</p>--}}

                    </article><!-- article-->
                    @endforeach

                </div><!--.col-md-8-->

            </div><!-- container-->

        </div><!-- row-->

    </section><!-- page-content-->
@endsection
