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
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.blogsbage')}}">
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
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$blogsbage->id}}) ؟
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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blogsbage')}}"
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
										
{!! Form::open(['url'=>aurl('/blogsbage/'.$blogsbage->id),'method'=>'put','id'=>'blogsbage','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_p_ar',trans('admin.main_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_ar', $blogsbage->main_p_ar ,['class'=>'form-control','placeholder'=>trans('admin.main_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_en',trans('admin.main_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_en', $blogsbage->main_p_en ,['class'=>'form-control','placeholder'=>trans('admin.main_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_ar',trans('admin.sub_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sub_p_ar', $blogsbage->sub_p_ar ,['class'=>'form-control','placeholder'=>trans('admin.sub_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_en',trans('admin.sub_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sub_p_en', $blogsbage->sub_p_en ,['class'=>'form-control','placeholder'=>trans('admin.sub_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('slide_image',trans('admin.slide_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('slide_image',['class'=>'form-control','placeholder'=>trans('admin.slide_image')]) !!}
        @if(!empty($blogsbage->slide_image))
        <img src="{{it()->url($blogsbage->slide_image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('other_image',trans('admin.other_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('other_image',['class'=>'form-control','placeholder'=>trans('admin.other_image')]) !!}
        @if(!empty($blogsbage->other_image))
        <img src="{{it()->url($blogsbage->other_image)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('youtube_link',trans('admin.youtube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('youtube_link', $blogsbage->youtube_link ,['class'=>'form-control','placeholder'=>trans('admin.youtube_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('disc',trans('admin.disc'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('disc', $blogsbage->disc ,['class'=>'form-control','placeholder'=>trans('admin.disc')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('keyword',trans('admin.keyword'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('keyword', $blogsbage->keyword ,['class'=>'form-control','placeholder'=>trans('admin.keyword')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('p_color',trans('admin.p_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::color('p_color', $blogsbage->p_color ,['class'=>'form-control','placeholder'=>trans('admin.p_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image_color',trans('admin.image_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('image_color', $blogsbage->image_color ,['class'=>'form-control','placeholder'=>trans('admin.image_color')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
