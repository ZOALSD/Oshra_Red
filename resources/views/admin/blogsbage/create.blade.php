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
								<a  href="{{aurl('blogsbage')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('admin.show_all')}}"
										title="{{trans('admin.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('admin.fullscreen')}}"
										title="{{trans('admin.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/blogsbage'),'id'=>'blogsbage','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_p_ar',trans('admin.main_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_ar',old('main_p_ar'),['class'=>'form-control','placeholder'=>trans('admin.main_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_en',trans('admin.main_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_p_en',old('main_p_en'),['class'=>'form-control','placeholder'=>trans('admin.main_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_ar',trans('admin.sub_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sub_p_ar',old('sub_p_ar'),['class'=>'form-control','placeholder'=>trans('admin.sub_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_en',trans('admin.sub_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sub_p_en',old('sub_p_en'),['class'=>'form-control','placeholder'=>trans('admin.sub_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('slide_image',trans('admin.slide_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('slide_image',['class'=>'form-control','placeholder'=>trans('admin.slide_image')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('other_image',trans('admin.other_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('other_image',['class'=>'form-control','placeholder'=>trans('admin.other_image')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('youtube_link',trans('admin.youtube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('youtube_link',old('youtube_link'),['class'=>'form-control','placeholder'=>trans('admin.youtube_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('disc',trans('admin.disc'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('disc',old('disc'),['class'=>'form-control','placeholder'=>trans('admin.disc')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('keyword',trans('admin.keyword'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('keyword',old('keyword'),['class'=>'form-control','placeholder'=>trans('admin.keyword')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('p_color',trans('admin.p_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::color('p_color',old('p_color'),['class'=>'form-control','placeholder'=>trans('admin.p_color')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('image_color',trans('admin.image_color'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('image_color',old('image_color'),['class'=>'form-control','placeholder'=>trans('admin.image_color')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.add'),['class'=>'btn btn-success']) !!}
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
	
