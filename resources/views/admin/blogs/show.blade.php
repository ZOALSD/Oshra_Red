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
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blogs/create')}}"
                           data-toggle="tooltip" title="{{trans('admin.blogs')}}">
                            <i class="fa fa-plus"></i>
                        </a>


                        <span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.blogs')}}">

                        <a data-toggle="modal" data-target="#myModal{{$blogs->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
                        <i class="fa fa-trash"></i>
                        </a>
                        </span>


<div class="modal fade" id="myModal{{$blogs->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
            </div>
            <div class="modal-body">
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$blogs->id}} ؟

            </div>
            <div class="modal-footer">
                {!! Form::open([
               'method' => 'DELETE',
               'route' => ['blogs.destroy', $blogs->id]
               ]) !!}
                {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/blogs')}}"
                           data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.blogs')}}">
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
<b>{{trans('admin.id')}} :</b> {{$blogs->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.admin_id')}} :</b>
 {{ App\Admin::find($blogs->admin_id)->name }}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_title_ar')}} :</b>
 {!! $blogs->blog_title_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_title_en')}} :</b>
 {!! $blogs->blog_title_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_ar')}} :</b>
 {!! $blogs->blog_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_en')}} :</b>
 {!! $blogs->blog_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_img')}} :</b>
 {!! $blogs->blog_img !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.blog_date')}} :</b>
 {!! $blogs->blog_date !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.Disc')}} :</b>
 {!! $blogs->Disc !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.keyword')}} :</b>
 {!! $blogs->keyword !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.p_color')}} :</b>
 {!! $blogs->p_color !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.img_color')}} :</b>
 {!! $blogs->img_color !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.youtube_link')}} :</b>
 {!! $blogs->youtube_link !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop