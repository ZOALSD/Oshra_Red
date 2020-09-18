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
								<a  href="{{aurl('homepage')}}"
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
								
{!! Form::open(['url'=>aurl('/homepage'),'id'=>'homepage','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('main_preghraph_ar',trans('admin.main_preghraph_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_preghraph_ar',old('main_preghraph_ar'),['class'=>'form-control','placeholder'=>trans('admin.main_preghraph_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('main_preghraph_en',trans('admin.main_preghraph_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('main_preghraph_en',old('main_preghraph_en'),['class'=>'form-control','placeholder'=>trans('admin.main_preghraph_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_preghraph_ar',trans('admin.sub_preghraph_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('sub_preghraph_ar',old('sub_preghraph_ar'),['class'=>'form-control','placeholder'=>trans('admin.sub_preghraph_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sub_preghraph_en',trans('admin.sub_preghraph_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('sub_preghraph_en',old('sub_preghraph_en'),['class'=>'form-control','placeholder'=>trans('admin.sub_preghraph_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Where_we_work_ar',trans('admin.Where_we_work_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('Where_we_work_ar',old('Where_we_work_ar'),['class'=>'form-control','placeholder'=>trans('admin.Where_we_work_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Where_we_work_en',trans('admin.Where_we_work_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('Where_we_work_en',old('Where_we_work_en'),['class'=>'form-control','placeholder'=>trans('admin.Where_we_work_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('about_say_ar',trans('admin.about_say_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('about_say_ar',old('about_say_ar'),['class'=>'form-control','placeholder'=>trans('admin.about_say_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('about_say_en',trans('admin.about_say_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('about_say_en',old('about_say_en'),['class'=>'form-control','placeholder'=>trans('admin.about_say_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('write_about_us_ar',trans('admin.write_about_us_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('write_about_us_ar',old('write_about_us_ar'),['class'=>'form-control','placeholder'=>trans('admin.write_about_us_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('write_about_us_en',trans('admin.write_about_us_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('write_about_us_en',old('write_about_us_en'),['class'=>'form-control','placeholder'=>trans('admin.write_about_us_en')]) !!}
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
    {!! Form::label('Discraption_site',trans('admin.Discraption_site'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('Discraption_site',old('Discraption_site'),['class'=>'form-control','placeholder'=>trans('admin.Discraption_site')]) !!}
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
	
