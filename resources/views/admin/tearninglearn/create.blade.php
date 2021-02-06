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
								<a  href="{{aurl('tearninglearn')}}"
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
								
{!! Form::open(['url'=>aurl('/tearninglearn'),'id'=>'tearninglearn','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_image',trans('admin.main_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('main_image',['class'=>'form-control','placeholder'=>trans('admin.main_image')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_ar',trans('admin.main_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('main_p_ar',old('main_p_ar'),['class'=>'form-control','placeholder'=>trans('admin.main_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_p_en',trans('admin.main_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('main_p_en',old('main_p_en'),['class'=>'form-control','placeholder'=>trans('admin.main_p_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Desc_search',trans('admin.Desc_search'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('Desc_search',old('Desc_search'),['class'=>'form-control','placeholder'=>trans('admin.Desc_search')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Key_word',trans('admin.Key_word'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('Key_word',old('Key_word'),['class'=>'form-control','placeholder'=>trans('admin.Key_word')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sup_p_ar',trans('admin.sup_p_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sup_p_ar',old('sup_p_ar'),['class'=>'form-control','placeholder'=>trans('admin.sup_p_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sup_p_en',trans('admin.sup_p_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('sup_p_en',old('sup_p_en'),['class'=>'form-control','placeholder'=>trans('admin.sup_p_en')]) !!}
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
	
