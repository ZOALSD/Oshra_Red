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
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('causes/create')}}"
                           data-toggle="tooltip" title="{{trans('admin.causes')}}">
                            <i class="fa fa-plus"></i>
                        </a>


                        <span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.causes')}}">

                        <a data-toggle="modal" data-target="#myModal{{$causes->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
                        <i class="fa fa-trash"></i>
                        </a>
                        </span>


<div class="modal fade" id="myModal{{$causes->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
            </div>
            <div class="modal-body">
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$causes->id}} ؟

            </div>
            <div class="modal-footer">
                {!! Form::open([
               'method' => 'DELETE',
               'route' => ['causes.destroy', $causes->id]
               ]) !!}
                {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/causes')}}"
                           data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.causes')}}">
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
<b>{{trans('admin.id')}} :</b> {{$causes->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.category_id')}} :</b>
 {!! $causes->category_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.country_id')}} :</b>
 {!! $causes->country_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.title_ar')}} :</b>
 {!! $causes->title_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.title_en')}} :</b>
 {!! $causes->title_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.disc_ar')}} :</b>
 {!! $causes->disc_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.disc_en')}} :</b>
 {!! $causes->disc_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.country_id')}} :</b>
 {!! $causes->country_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.city_id')}} :</b>
 {!! $causes->city_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.cause_data')}} :</b>
 {!! $causes->cause_data !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.category_id')}} :</b>
 {!! $causes->category_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.disc_page')}} :</b>
 {!! $causes->disc_page !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.keyword')}} :</b>
 {!! $causes->keyword !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.p_color')}} :</b>
 {!! $causes->p_color !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.img_color')}} :</b>
 {!! $causes->img_color !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.image')}} :</b>
 {!! $causes->image !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.YouTube_link')}} :</b>
 {!! $causes->YouTube_link !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop