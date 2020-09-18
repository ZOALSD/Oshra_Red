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
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('ourwork/create')}}"
                           data-toggle="tooltip" title="{{trans('admin.ourwork')}}">
                            <i class="fa fa-plus"></i>
                        </a>


                        <span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.ourwork')}}">

                        <a data-toggle="modal" data-target="#myModal{{$ourwork->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
                        <i class="fa fa-trash"></i>
                        </a>
                        </span>


<div class="modal fade" id="myModal{{$ourwork->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
            </div>
            <div class="modal-body">
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$ourwork->id}} ؟

            </div>
            <div class="modal-footer">
                {!! Form::open([
               'method' => 'DELETE',
               'route' => ['ourwork.destroy', $ourwork->id]
               ]) !!}
                {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/ourwork')}}"
                           data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.ourwork')}}">
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
<b>{{trans('admin.id')}} :</b> {{$ourwork->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.admin_id')}} :</b>
 {{ App\Admin::find($ourwork->admin_id)->name }}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.main_imig')}} :</b>
 {!! $ourwork->main_imig !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.main_p_ar')}} :</b>
 {!! $ourwork->main_p_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.main_p_en')}} :</b>
 {!! $ourwork->main_p_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.sub_p_ar')}} :</b>
 {!! $ourwork->sub_p_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.sub_p_en')}} :</b>
 {!! $ourwork->sub_p_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.what_our_do_ar')}} :</b>
 {!! $ourwork->what_our_do_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.what_our_do_en')}} :</b>
 {!! $ourwork->what_our_do_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.what_our_do_img')}} :</b>
 {!! $ourwork->what_our_do_img !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.why_oshra_unique_ar')}} :</b>
 {!! $ourwork->why_oshra_unique_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.why_oshra_unique_en')}} :</b>
 {!! $ourwork->why_oshra_unique_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.why_oshra_unique_img')}} :</b>
 {!! $ourwork->why_oshra_unique_img !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.page_description')}} :</b>
 {!! $ourwork->page_description !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.key_Word')}} :</b>
 {!! $ourwork->key_Word !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.p_color')}} :</b>
 {!! $ourwork->p_color !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop