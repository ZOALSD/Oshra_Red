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
								<a  href="{{aurl('ourwork')}}"
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
								
{!! Form::open(['url'=>aurl('/ourwork'),'id'=>'ourwork','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_imig',trans('admin.main_imig'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('main_imig',['class'=>'form-control','placeholder'=>trans('admin.main_imig')]) !!}
    </div>
</div>
<br>
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
        {!! Form::textarea('sub_p_ar',old('sub_p_ar'),['class'=>'form-control','placeholder'=>trans('admin.sub_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_p_en',trans('admin.sub_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('sub_p_en',old('sub_p_en'),['class'=>'form-control','placeholder'=>trans('admin.sub_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_ar',trans('admin.what_our_do_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('what_our_do_ar',old('what_our_do_ar'),['class'=>'form-control','placeholder'=>trans('admin.what_our_do_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_en',trans('admin.what_our_do_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('what_our_do_en',old('what_our_do_en'),['class'=>'form-control','placeholder'=>trans('admin.what_our_do_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('what_our_do_img',trans('admin.what_our_do_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('what_our_do_img',['class'=>'form-control','placeholder'=>trans('admin.what_our_do_img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_ar',trans('admin.why_oshra_unique_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('why_oshra_unique_ar',old('why_oshra_unique_ar'),['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_en',trans('admin.why_oshra_unique_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('why_oshra_unique_en',old('why_oshra_unique_en'),['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('why_oshra_unique_img',trans('admin.why_oshra_unique_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('why_oshra_unique_img',['class'=>'form-control','placeholder'=>trans('admin.why_oshra_unique_img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('page_description',trans('admin.page_description'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('page_description',old('page_description'),['class'=>'form-control','placeholder'=>trans('admin.page_description')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('key_Word',trans('admin.key_Word'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('key_Word',old('key_Word'),['class'=>'form-control','placeholder'=>trans('admin.key_Word')]) !!}
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
	
