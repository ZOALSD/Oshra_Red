@extends('admin.index')
@section('content')

		 <div class="row">
        <div class="col-md-12">
            <div class="widget-extra body-req portlet light bordered">
              <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-dark">{{$title}}</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blogsbage/create')}}"
                           data-toggle="tooltip" title="{{trans('admin.blogsbage')}}">
                            <i class="fa fa-plus"></i>
                        </a>


                        <span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.blogsbage')}}">

                        <a data-toggle="modal" data-target="#myModal{{$blogsbage->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
                        <i class="fa fa-trash"></i>
                        </a>
                        </span>


<div class="modal fade" id="myModal{{$blogsbage->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
            </div>
            <div class="modal-body">
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$blogsbage->id}} ؟

            </div>
            <div class="modal-footer">
                {!! Form::open([
               'method' => 'DELETE',
               'route' => ['blogsbage.destroy', $blogsbage->id]
               ]) !!}
                {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/blogsbage')}}"
                           data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.blogsbage')}}">
                            <i class="fa fa-list"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
                           data-original-title="{{trans('admin.fullscreen')}}"
                           title="{{trans('admin.fullscreen')}}">
                        </a>
                    </div>
                </div>
            <div class="portlet-body form">
				<div class="col-md-12">
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('admin.id')}} :</b> {{$blogsbage->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.main_p_ar')}} :</b>
 {!! $blogsbage->main_p_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.main_p_en')}} :</b>
 {!! $blogsbage->main_p_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.sub_p_ar')}} :</b>
 {!! $blogsbage->sub_p_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.sub_p_en')}} :</b>
 {!! $blogsbage->sub_p_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.slide_image')}} :</b>
 {!! $blogsbage->slide_image !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.other_image')}} :</b>
 {!! $blogsbage->other_image !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.youtube_link')}} :</b>
 {!! $blogsbage->youtube_link !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.disc')}} :</b>
 {!! $blogsbage->disc !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.keyword')}} :</b>
 {!! $blogsbage->keyword !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.p_color')}} :</b>
 {!! $blogsbage->p_color !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.image_color')}} :</b>
 {!! $blogsbage->image_color !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop